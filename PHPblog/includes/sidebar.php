
<div class="sidebar-module">
<h4>category</h4>
    <?php $q = "SELECT * FROM categories"; $categories = $db->query($q); ?>

<ul class="list-unstyled">
        <?php while($c = $categories->fetch_assoc())   { ?>
        <li><a href="index.php?category=<?php echo $c['id'];   ?>">    <?php echo $c['text'];   ?>  </a></li> <?php } ?>
</ul>




<!-- Sidebar forms -->
<div class="sidebar-module1">
  <h4>Search</4>
    <hr>
    <form method="GET" action="results.php" class="form-inline">
      <div class="form-group">
        <input type="text" name="search" placeholder="search" class="form-control" id="exampleInputName2">
      </div>
      <button type="submit" class="button button-sidebar">Search<span>click me!</button>
        </form>
      </div> <br> <br> <br> <br>

<div class="sidebar-module2">
    <h4>Subscribe</4> <hr>

      <?php if(isset($_POST['subscribe'])) {
         $name = mysqli_real_escape_string($db , $_POST['name']);
         $email = mysqli_real_escape_string($db , $_POST['email']);

         $query = "INSERT INTO subscriber (name,email) VALUES('$name','$email')";

         $db->query($query); } ?>

      <form method="POST" action="results.php" class="form-inline">
        <div class="form-group">

          <input type="text" name="name" placeholder="name" class="form-control" id="exampleInputEmaill">
        </div>

        <div class="form-group">

          <input type="email" name="email" placeholder="email" class="form-control" id="exampleInputEmaill">
        </div>
        <button type="submit" name="subscribe" class="button button-sidebar">Subscribe</button>
        </form>
    </div>
</div>
 </div>
