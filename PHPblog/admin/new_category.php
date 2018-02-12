<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



   <?php
   include("includes/header.php");
   include("includes/sidebar.php");
   ?>


          <h1 class="page-header">Add new Category</h1>
          <div class="table-responsive">
              <form method="POST">

            <div class="form-group">
            <label for="category">
                Category:
            </label>
            <input class="form-control" type="text" name="category" id="category">
          </div>
            <button type="submit" name="add_category" class="btn btn-default">Add category</button>
              </form>
          </div>
        </div>
   
