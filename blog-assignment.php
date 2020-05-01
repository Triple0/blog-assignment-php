<?php
  ini_set( 'display_errors', 1 );
  ini_set( 'display_startup_errors', 1 );
  error_reporting( E_ALL );
  include './includes/Blogs.Class.php';
  
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Page</title>
</head>
<body>
  <h1>Blogs</h1>
  <?php include './includes/navigation.php';; ?>
  <?php
    // New object instance of "Snacks" class.
    $blogs = new Blogs( dirname( __FILE__ ) . '/data/articles.json');
   
    // Output ALL the snacks we found!
    $blogs->output();
  ?>
  <h2>Find Article by ID</h2>
  <p>The article with id:<?php $id ?> is:</p>
  <?php
    // Output just the third snack (remember, arrays start at index: 0.)
    $blogs->findblogByIndex( 2 );
  ?> -->
</body>
</html>