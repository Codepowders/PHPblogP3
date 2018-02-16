
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

</div>
 </div>
