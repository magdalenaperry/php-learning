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
      var $title;
      var $author;
      var $pages;

      function __construct($aTitle, $aAuthor, $aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
      }

      function longBook(){
        if($this->pages >=1000){
          return "$this->title is a long book.";
        } else {
          return "$this->title is a short book.";
        }
      }
    }
  

    $book1 = new Book("The Return of the King", "J. R. R. Tolkien", 1200 );
    // $book1->title = "The Return of the King";
    // $book1->author = "J. R. R. Tolkien";
    // $book1->pages = 1100; 

    $book2 = new Book("The Hobbit", "J. R. R. Tolkien", 800);

    // echo $book1->title;
    echo $book1->longBook();
    echo "<br>";
    echo $book2->longBook();

    
  
  ?>

</body>
</html>