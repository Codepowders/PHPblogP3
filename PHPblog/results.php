<?php include("includes/header.php");

      if(isset($_GET['search'] ) ) {
          $keyword = mysqli_real_escape_string($db , $_GET['search']);
          $query = "SELECT * FROM posts WHERE keywords LIKE '%$keyword%'";
           $posts = $db->query($query);
      }
      else{
          echo "<p>No Keyword</p>";
          } ?>

<?php include("includes/sidebar.php");?>
<br>

<?php if($posts->num_rows > 0) {
      while($row = $posts->fetch_assoc() ) { ?>
    <div class="blog-post">
            <h2 class="blog-post-title"><a href="single.php?post=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></h2><hr>
            <p class="blog-post-meta"><?php echo $row ['date']; ?> <a href="#"><?php echo $row ['author']; ?></a></p><hr>
            <p class="blog-post-body"><?php $body = $row ['body']; echo substr($body, 0 ,200) , "...."; ?></p><br>
            <a href="single.php?post=<?php echo $row ['id'] ?>" class="btn">readmore<span>CLICK ME</a>
    </div>
<?php } } ?>


<?php include("includes/footer.php");?>
