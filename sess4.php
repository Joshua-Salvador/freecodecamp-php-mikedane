<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Classes and Objects -->
  <?php
    class Book {
      var $title;
      var $author;
      var $pages;
      // Constructors 
      function __construct($aTitle, $aAuthor, $aPages) {
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
      }
    }

    $book1 = new Book("Harry Potter", "J.K. Rowling", 400);
    // $book1->title = "Harry Potter";
    // $book1->author = "J.K. Rowling";
    // $book1->pages = 400;
    
    $book2 = new Book("Lord Of The Rings", "Tolkien", 700);
    // $book2->title = "Lord Of The Rings";
    // $book2->author = "Tolkien";
    // $book2->pages = 700;
    
    echo "$book2->title <br><hr>";
    // echo $book2->author;
  ?>
  <!-- Object Functions -->
  <?php
    class Student {
      var $name;
      var $major;
      var $gpa;

      function __construct($name, $major, $gpa) {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }

      function hasHonors() {
        if ($this->gpa  >= 3.5) {
          return "true";
        }
        return "false";
      }
    }
    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);
    // $student2->gpa = 2.5;
    echo $student2->hasHonors();
  ?>
  <hr>
  <!-- Getters and Setters -->
    <?php
      class Movie {
        public $title;
        private $rating;

        function __construct($title, $rating) {
          $this->title = $title;
          $this->setRating($rating);
        }

        function getRating() {
          return $this->rating;
        }

        function setRating($rating) {
          if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
            $this->rating = $rating;
          } else {
            $this->rating = "NR";
          }
        }
      }
      $avengers = new Movie("Avengers", "Dog");
      // $avengers->setRating("Avengers - Level Threat");
      echo $avengers->getRating();
      echo "<hr>";
    ?>
    <!-- Inheritance -->
  <?php
    class Chef {
      function makeChicken() {
        echo "The chef makes chicken <br>";
      }
      function makeSalad() {
        echo "The chef makes salad <br>";
      }
      function makeSpecialDish() {
        echo "The chef makes bbq ribs <br>";
      }
    }

    class ItalianChef extends Chef {
      function makePasta() {
        echo "The Italian Chef makes pasta <br>";
      }
      function makeSpecialDish() {
        echo "The Italian Chef makes chicken parmesian <br>";
      }
    }

    $chef = new Chef();
    $chef->makeSpecialDish();

    $italianChef = new ItalianChef();
    $italianChef->makeSpecialDish();
    $italianChef->makeSalad();
    $italianChef->makePasta();
  ?>
</body>
</html>