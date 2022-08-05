<html>
  <head>
    <meta>
    <title>Get vs Post Forms</title>
  </head>
  <body>

    <form action="form.php" method="get">
      Name: <input type="text" name="userName">
      <br>
      Age: <input type="number" name="userAge">
      <input type="submit">
      
    </form>

    <form action="form.php" method="post">
      Password: <input type="password" name="password"><br>

      Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
      Oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
      Pears:<input type="checkbox" name="fruits[]" value="pears"><br>

      <input type="submit">
    </form>

    <br>
    <?php 
      echo $_GET["userName"];
      echo $_GET["userAge"];
      echo $_POST["password"];
      
      $fruits = $_POST["fruits"];

      echo $fruits[1];

    ?>

  </body>    
</html>