<html>
  <head>
    <meta>
    <title>Magdalena's Form</title>
  </head>
  <body>
<!-- stores information to post method as student -->
    <form action="arrays.php" method="post">
      <input type="text" name="student">
      <input type="submit">
    </form>
    
    <?php 
      $grades = 
        array(
          "Jim"=> 90, 
          "Pam"=> 89, 
          "Dwight"=> 100
        );
        // finds grades from the array above, by POSTING from the form student.
        echo $grades[$_POST["student"]];
        echo "number of students <br>";
        echo count($grades);
    ?>

  </body>    
</html>