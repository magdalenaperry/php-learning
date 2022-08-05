<html>
  <head>
    <meta>
    <title>Magdalena's Form</title>
  </head>
  <body>

    <form action="calculator.php" method="post">
      <input type="number" name="num1" step="0.001">
      <br>
      <input type="text" name="op">
      <br>
      <input type="number" name="num2" step="0.001">
      <br>
      <input type="submit">
    </form>
    
    <?php 
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];
    

    if($op == "+"){
      echo $num1 + $num2;
    } elseif ($op == "-"){
      echo $num1 - $num2;
    } elseif ($op == "/"){
      echo $num1 / $num2;
    } elseif ($op == "*"){
      echo $num1 - $num2;
    } else {
      echo "invalid operator.";
    }

    ?>

  </body>    
</html>