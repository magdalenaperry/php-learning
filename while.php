<html>

<head>
  <meta>
  <title>While Loops</title>
</head>

<body>
  <!-- 
    <form action="form.php" method="get">
      Name: <input type="text" name="userName">
      <br>
      Age: <input type="number" name="userAge">
      <input type="submit">
    </form> -->

  <?php
  $index = 1;
  while ($index <= 5) {
    echo "while loop is running: $index <br>";
    $index++;
    echo "<hr>";
  }
  ?>

  <?php
  $i = 5;
  do {
    echo "do while loop is running: $i <br>";
    $i++;
  } while ($i <= 6);

  ?>

</body>

</html>
