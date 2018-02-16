<!-- Get post message in database by ID -->
<?php include("includes/header.php");
    if(isset($_GET['post'])){
        $id = mysqli_real_escape_string($db , $_GET['post']);
        $query = "SELECT * FROM posts WHERE id = '$id'";}
        $posts = $db->query($query);
    if(isset($_POST['post_comment'])) {
        $name = mysqli_real_escape_string($db , $_POST['name']);
        $comment = mysqli_real_escape_string($db , $_POST['comment']);
    if(isset($_POST['website'])){
        $website = mysqli_real_escape_string($db , $_POST['website']); }
    else{
        $website = ""; }

    $query = "INSERT INTO comments(name,comment,post,website) VALUES('$name','$comment','$id','$website')";
    $db->query($query); }
    $query = "SELECT * FROM comments WHERE post='$id' AND status='1'";
    $comments = $db->query($query); ?>
    <br>

<?php include("includes/sidebar.php");?>

<!-- Echo title, date and author from database -->
<?php
  if($posts->num_rows > 0) {
  while($row = $posts->fetch_assoc() ) {?>
<div class="blog-single">
    <h2 class="blog-post-title"><?php echo $row['title']; ?></h2><hr>
    <p class="blog-post-meta"><?php echo $row ['date']; ?>   by <a href="#">
        <?php echo $row ['author']; ?> </a></p><hr>
        <?php echo $row ['body']; ?>
</div>

<?php } } ?>

<!-- Form comment area with example -->
<blockquote> <?php echo $comments->num_rows; ?>comments</blockquote>

<div class="comment-area">
      <form method="post">
<div class="form-group"><br>
      <label for="exampleInputEmail1">name</label>
<input type="text" cols="10" placeholder="Put >anonymous< privacy" name="name" class="form-control" id="exampleInputEmail1" placeholder="name">
</div>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Website</label>
    <input type="text" name="website" class="form-control" id="exampleInputEmail1" placeholder="Webiste(Optional)">
</div>

<div class="form-group1">
    <textarea cols="60" rows="10" name="comment" id="shortcuts" class="form-control"></textarea>
</div>


<button type="submit" name="post_comment" class="btn">post comment <span>is Cool.</span></button>
</form><br><br><hr>

<?php  while($comment = $comments->fetch_assoc()) { if($comment['is_admin'] != 1) { ?>

<div class="comment">
<div class="comment-head">
    <a href="#"><?php echo $comment['name'];  ?></a> <img width="50" height="50" src="img/img.jpg"/>
</div>
<?php echo $comment['comment']; ?>
</div>
<?php }else { ?>

<div class="comment">
<div class="comment-head">
      <a href="#"><?php echo $comment['name']; ?></a><button>admin</button><img width="50" height="50" src="img/img.jpg"/>
</div>
<?php echo $comment['comment']; ?>
</div><br><br> <?php } } ?>

<?php include("includes/footer.php");?>
