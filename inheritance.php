<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inheritance</title>
</head>
<body>

<?php 
  class Parents {
    public $name; 
    public $age;

    function __construct($aName, $aAge){
      $this->name = $aName; 
      $this->age = $aAge;
    }

    function makeDinner() {
      echo "Parent makes dinner.";
    }

    function cleansHouse() {
      echo "Parent cleans house.";
    }

    function gardens() {
      echo "Parent gardens.";
    }

    function makeSpecialDish() {
      echo "Parent makes pizza";
    }
  }

  //... extends Parents... allows Dad class to inherit all the functionality of Parent class
  class Dad extends Parents{
    public $name; 
    public $age;

    function playsGolf() {
      echo "Dad plays golf.";

    }

    function makeSpecialDish() {
      echo "Dad orders takeout";
    }
  }

  $parent1 = new Parents("Magdalena", 27);

  $dad = new Dad("Brad", 34);
  echo $parent1->makeSpecialDish();
  echo "<br>";
  echo $dad->makeSpecialDish();
  echo "<br>";
  echo $dad->playsGolf();
  echo "<br>";

  echo $parent1->name;



?>

</body>
</html>