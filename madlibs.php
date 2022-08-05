<html>
  <head>
    <meta>
    <title>Magdalena's Form</title>
  </head>
  <body>

    <form action="madlibs.php" method="get">
      Noun: <input type="text" name="noun"> <br>
      Verb + ing: <input type="text" name="verb"><br>
      <input type="submit">
    </form>
    <br>
    <?php 
      $noun = $_GET["noun"];
      $verb = $_GET["verb"];

      echo "One day, Magdalena was riding around with a $noun. <br>";
      echo "She was tired of $verb all day. <br>";
      
    ?>

  </body>    
</html>