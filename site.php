<html>
  <head>
    <meta>
    <title>

    </title>
  </head>
  <body>
    <?php
      $charFullName = "Magdalena Chavez";
      $charAge = 27;
      $charMoney = 25.50;
      $isFemale = true;
      $friends = array("Brad", "Fer", "Samy", "America", "Jo");

      echo "<h1> $charFullName's Story</h1>";
      echo "<hr>";
      echo "There once was a woman named $charFullName. <br>"; 
      echo "She was $charAge and thought she was old. <br>";
      echo $friends[1];  
      echo "<br>";
      // assign variable new value
      $charName = "Mags";
      echo "She went by the name $charName.<br>";
      echo "<hr>";
      echo strtolower($charName);
      echo strtoupper($charName);
      echo strlen($charName);
      echo $charName[0];
      $charName[0] = "W";
      echo $charName;
      echo "<hr>";
      echo str_replace("Chavez", "Perry", $charFullName);
      echo substr($charFullName, 10, 6);

      echo "<hr>";
      // absolute value
      echo abs(-140);
      
      echo pow(2, 4);

      echo sqrt(144);

      echo max(2, 10);

      echo round(35.632);

      echo ceil(2.4);

      echo floor(3.7);
    ?>  

  </body>
</html>