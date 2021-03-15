<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    /* Getting User Input */
    echo "<h3>Getting User Input</h3><br>"
  ?>
  <form action="form.php" method="get">
    Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age">
    <br>
    <input type="submit">
  </form>
  Your name is <?php 
    echo $_GET["name"]; // GET request, look for "name" in request body
    echo "<br>";
    echo "Your age is";
    echo $_GET["age"];
  ?>
  <hr>
  <h3>Building a Basic Calculator </h3>
  <form action="form.php" method="get">
    <input type="number" name="num1"><br>
    <input type="number" name="num2"><br>
    <input type="submit">
  </form>
  <?php 
    /* Building a Basic Calculator */
    echo "Sum: ";
    echo $_GET['num1'] + $_GET['num2']; // "num1" and "num2" will be in url "http://localhost:4000/form.php?num1=5&num2=3"
    echo "<br>";
    echo "Difference: ";
    echo $_GET['num1'] - $_GET['num2'];
    echo "<br>";
    echo "Product: ";
    echo $_GET['num1'] * $_GET['num2'];
    echo "<br>";
    echo "Quotient: ";
    echo $_GET['num1'] / $_GET['num2'];
  ?>
  <hr>
  <h3>Madlibs Game</h3>
  <form action="form.php" method="GET">
    Color: <input type="text" name="color"><br>
    Plural Noun: <input type="text" name="plural"><br>
    Celebrity: <input type="text" name="celebrity"><br>
    <input type="submit">
  </form>
  <?php 
    /* Madlibs Game */
    $color = $_GET['color'];
    $plural = $_GET['plural'];
    $celebrity = $_GET['celebrity'];
    echo "Roses are $color <br>";
    echo "$plural are blue <br>";
    echo "I love $celebrity <br>";
  ?>
  <hr>
  <h3>URL Parameters</h3>
  <form action='form.php' method="get">
    Name: <input type="text" name="name"> <br>
    <input type="submit"><br>
  </form>
  <br>
  <?php 
    /* URL Parameters */
   echo $_GET["name"];
   echo $_GET['age'];
  ?>
  <hr>
  <h3>POST vs GET</h3>
  <form action="form.php" method="post">
    Password: <input type="password" name="password"><br>
    <input type="submit"><br>
  </form><br>
  <?php 
    /* POST vs GET */
    echo $_POST['password']
  ?>
  <hr>
  <h3>Arrays</h3>
  <?php 
  // Arrays

    $friends = array("Lance", "Enrique", "Daryll");
    echo $friends[0];
    echo "<br>";
    echo $friends[1];
    echo "<br>";
    echo $friends[2];
    echo "<br>";
    

  ?>

</body>
</html>