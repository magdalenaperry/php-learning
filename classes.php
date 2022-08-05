<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Classes</title>
</head>
<body>
  <?php 
    class Book{
      // visibility modifiers: keyword that tells php what code is able to access different attributes in the program
      // var = open to be used with no restrictions
      // public = open to be used with no restrictions
      // private = any code outside of the movie class cannot access the attribute directly

      public $title;
      public $author;
      public $pages;
      // have to use getters, and setters to access private attributes
      private $rating;

      function __construct($aTitle, $aAuthor, $aPages, $aRating){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
        $this->setRating($aRating);
      }

      function getRating(){
        return $this->rating;
      }

      // allows you to change rating although rating is private.
      function setRating($rating){
        switch($rating){
          case "G": 
          case "PG": 
          case "PG-13":
          case "R":
          case "NR":
            $this->rating = $rating;
            break;
          default: 
            $this->rating = "NR";
        }
      }

      function longBook(){
        if($this->pages >=1000){
          return "$this->title is a long book.";
        } else {
          return "$this->title is a short book.";
        }
      }


    }
  

    $book1 = new Book("The Return of the King", "J. R. R. Tolkien", 1200, "dog");
    // $book1->title = "The Return of the King";
    // $book1->author = "J. R. R. Tolkien";
    // $book1->pages = 1100; 

    $book2 = new Book("The Hobbit", "J. R. R. Tolkien", 800, 5);

    echo $book1->title;
    echo $book1->longBook();
    echo "<br>";
    echo $book2->longBook();
    echo "<br>";
    
    // $book1->setRating("");
    echo $book1->getRating(); 
  

    
  
  ?>

</body>
</html>