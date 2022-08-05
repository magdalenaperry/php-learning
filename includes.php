<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magdalena's Site</title>
</head>
<body>
  <?php include "header.html" ?>

  <?php 
    include "article-header.php";

    $title = "My First Post";
    $author = "Magdalena Perry";
    $wordCount = 500;
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque consectetur incidunt error impedit tenetur minima odit, repellat aliquam suscipit tempore. Aspernatur voluptas omnis numquam labore voluptates, nulla eius fuga aut?";
  ?>

  <?php 
    include "useful-tools.php"; 
    echo $feetInMile;
    
  ?>

  <hr>
 

  <?php include "footer.html" ?>
</body>
</html>