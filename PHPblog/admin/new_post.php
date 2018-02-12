
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

       $d = getDate();
       $date ="$d[month] $d[mday], $d[year] ";

       $query ="INSERT INTO posts (title,author,category,body,keywords,date)
       VALUES('$title','$author','$category','$body','$keywords','$date')";

       $db->query($query);  }

       $cats = $db->query("SELECT * FROM categories"); ?>

          <h1 class="page-header">Add new post</h1>
          <div class="table-responsive">
          <form method="POST">
          <div class="form-group">
            <label>
                Post Title:
            </label>
            <input class="form-control" type="text" name="title">
            </div>
            <div class="form-group">

            <label>
                Post Author:
            </label>
            <input class="form-control" type="text" name="author">
            </div>

            <div class="form-group">
            <label>
                Post Category:
            </label>
            <select class="form-control" name="category">

                <?php while($row = $cats->fetch_assoc()) { ?>

                <option value="<?php echo $row['id'];  ?>   " >

                    <?php echo $row['text']; ?>  </option>
               <?php } ?>
            </select>

            </div>

            <div class="form-group">
            <label>
                Post Body:
            </label>

            <textarea name="body" class="form-control"></textarea>
            </div>

            <div class="form-group">
            <label>
                Post Keywords:
            </label>

            <input class="form-control" type="text" name="Keywords">
            </div>

            <button type="submit" name="add_post" class="btn btn-default">Add post</button>
            </form>
          </div>
        </div>
   
