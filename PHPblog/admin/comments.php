<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include("includes/header.php"); ?>
  <?php include("includes/sidebar.php"); ?>

          <h1 class="page-header">Comments</h1>
          <div class="table-responsive">
              <form method="POST">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th>Select</th>
                  <th>Author</th>
                  <th>Website</th>
                  <th>post</th>
                  <th>comment</th>
                  <th>status</th>
                  <th>Reply</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td><input type="checkbox" name="checkbox[]"/>  </td>
                  <td>Jorrit</td>
                  <td>Jorritbreeuwer.nl</td>
                  <td>sample java post</td>
                  <td>nice postsss</td>
                  <td><button class="btn btn-success">approved</button></td>
                  <td><a href="#" class="btn btn-info">Reply</a> <textarea cols="15" rows="2" class="form-control"></textarea></td>
                </tr>

                <tr>
                  <td><input type="checkbox" name="checkbox[]"/>  </td>
                  <td>Jorrit</td>
                  <td>Jorritbreeuwer.nl</td>
                  <td>sample java post</td>
                  <td>nice postsss</td>
                  <td><button class="btn btn-warning">pending</button></td>
                  <td><a href="#" class="btn btn-info">Reply</a> <textarea cols="15" rows="2" class="form-control"></textarea></td>
                </tr>

              </tbody>
            </table>


            <select name="action">
                <option>Delete</option>
                <option>Approve</option>
            </select>
            <button type="submit" name="apply" class="btn btn-default">Apply</button>
            </form>

          </div>
        </div>

  </body>
</html>
