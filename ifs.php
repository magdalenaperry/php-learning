<html>
  <head>
    <meta>
    <title>Magdalena's Form</title>
  </head>
  <body>

    
    <?php 
      $isMale = true;
      $isTall = false;

      if ($isMale && $isTall){
        echo "You are a tall male.";
      } else if ($isMale && !$isTall) {
        echo "You are a short male.";
      } else {
        echo "something else";
      }


      function getMax($num1, $num2){
        if ($num1 > $num2){
          return $num1;
        } else if ($num1 < $num2) {
          return $num2;
        } else {
          return "$num1 and $num2 are equal";
        }
      }
      echo getMax(5, 8);

    ?>

  </body>    
</html>