
<?php
   include("includes/config.php");
   include("includes/db.php");
   include("includes/header.php");
   include("includes/sidebar.php");

   if(isset($_POST['add_post'])){

       $title = mysqli_real_escape_string ($db , $_POST['title']);
       $author = mysqli_real_escape_string ($db , $_POST['author']);
       $category = mysqli_real_escape_string ($db , $_POST['category']);
       $body = mysqli_real_escape_string ($db , $_POST['body']);
       $keywords = mysqli_real_escape_string ($db , $_POST['keywords']);

       if(isset($_POST['id'])){

           $id = mysqli_real_escape_string ($db , $_POST['id']);
           $query = "UPDATE posts SET title='$title',author='$author',category='$category',body='$body',keywords='$keywords' WHERE id='$id'";

       }else{

           $d = getDate();
       $date ="$d[month] $d[mday], $d[year] ";

       $query ="INSERT INTO posts (title,author,category,body,keywords,date)
       VALUES('$title','$author','$category','$body','$keywords','$date')"; }

       $db->query($query);  }

if(isset($_GET['post'])) {

    $id = mysqli_real_escape_string($db , $_GET['post']);

    $p = $db->query("SELECT * FROM posts WHERE id = '$id'");

    $p = $p->fetch_assoc();

}

       $cats = $db->query("SELECT * FROM categories"); ?>


          <h1 class="page-header">Add new post</h1>
          <div class="table-responsive">
          <form method="POST">

             <?php if(isset($p)) {
             echo "<input type='hidden' value='$id' name='id'/>"; } ?>
          <div class="form-group">
            <label>
                Post Title:
            </label>

            <input class="form-control" type="text" value="<?php echo @$p['title']; ?> " name="title"/>
            </div>
            <div class="form-group">

            <label>
                Post Author:
            </label>

            <input class="form-control" type="text" value="<?php echo @$p['author']; ?> " name="author">
            </div>

            <div class="form-group">
            <label>
                Post Category:
            </label>
            <select class="form-control" name="category">

                <?php while($row = $cats->fetch_assoc()) {

                $selected = ($row['id'] == $p['category'] ? "selected":"") ;  ?>

                <option value="<?php echo $row['id'];  ?>" <?php echo $selected; ?> >

                    <?php echo $row['text']; ?>  </option>
               <?php } ?>
            </select>
            </div>

            <div class="form-group">
            <label>
                Post Body:
            </label>

            <textarea name="body" class="form-control"><?php echo @$p['body']; ?> </textarea>
            </div>

            <div class="form-group">
            <label>
                Post Keywords:
            </label>

            <input class="form-control" type="text" value="<?php echo @$p['keywords']; ?> " name="Keywords">
            </div>

            <button type="submit" name="add_post" class="btn btn-default">Add post</button>
            </form>
          </div>
        </div>
