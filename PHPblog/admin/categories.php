<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>

          <h1 class="page-header">Categories</h1>
          <a href="new_category.php" class="btn btn-info btn">Add new</a>
          <div class="table-responsive">

              <form method="POST">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th>Select</th>
                  <th>ID</th>
                  <th>Title></th>
                  <th>Edit</th>

                </tr>
              </thead>
              <tbody>

                <tr>
                  <td><input type="checkbox" name="checkbox[]"/>  </td>
                  <td>1</td>
                  <td>JAVA</td>
                  <td><a href="#" class="btn btn-warning">Edit</a>
                </tr>

                <tr>
                  <td><input type="checkbox" name="checkbox[]"/>  </td>
                  <td>2</td>
                  <td>PHP</td>
                  <td><a href="#" class="btn btn-warning">Edit</a>
                </tr>

                <tr>
                  <td><input type="checkbox" name="checkbox[]"/>  </td>
                  <td>3</td>
                  <td>CSS</td>
                  <td><a href="#" class="btn btn-warning">Edit</a>
                </tr>

              </tbody>
            </table>


            <select name="action">
                <option>Delete</option>
                <option>Clone</option>
            </select>
            <button type="submit" name="apply" class="btn btn-default">Apply</button>
            </form>

          </div>
        </div>

  </body>
</html>
