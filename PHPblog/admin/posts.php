
<?php
include("includes/header.php");
include("includes/sidebar.php");
include("includes/db.php");
include("includes/confgig.php");
?>


<h1 class="page-header">Posts</h1>
    <a href="new_post.php" class="btn btn-info btn">Add new</a>
<div class="table-responsive">

              <form method="POST">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th>Select</th>
                  <th>Date Posted</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Tags</th>
                  <th>Category</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td><input type="checkbox" name="checkbox[]"/>  </td>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>per</td>
                  <td>PHP category</td>
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
