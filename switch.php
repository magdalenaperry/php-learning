<html>
  <head>
    <meta>
    <title>Magdalena's Form</title>
  </head>
  <body>
    <form action="switch.php" method="post" >
    <input type="text" name="grade" >
    <input type="submit" >
    </form>
    
    <?php 

      $grade = $_POST["grade"];
      switch ($grade) {
        case "A":
          echo "Perfect!";
        break;
        case "B": 
          echo "Good job!"; 
          break;
        case "C": 
          echo "Keep working hard!";
          break; 
        // Default isn't necessary?
        default: 
          echo "Lets practice together!";
      }

    ?>

  </body>    
</html>