<html>
  <head>
    <meta>
    <title>Magdalena's Functions</title>
  </head>
  <body>
    <!-- <form action="functions.php" method="get">
      <input type="number" name="num1">
      <br>
      <input type="number" name="num2">
      <br>
      <input type="submit">
    </form> -->
    
    <?php 
      function sayHi($name, $age){
        echo "Hello $name, you are $age years old.";
      }


      function cube($num){
        return pow($num, 3);
      }


      echo cube(2);
      sayHi("John", 20);
    ?>
  </body>    
</html> 