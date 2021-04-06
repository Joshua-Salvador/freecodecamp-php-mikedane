<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Using Checkboxes -->
  <form action="sess3.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Bananas: <input type="checkbox" name="fruits[]" value="bananas"><br>
    Pineapple: <input type="checkbox" name="fruits[]" value="pineapple"><br>
    Grapes: <input type="checkbox" name="fruits[]" value="grapes"><br>
    <input type="submit" />
  </form>
  <?php 
    // Using Checkboxes
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    echo '<br>';
    echo $fruits[1];
    echo '<br>';
    echo $fruits[2];
    echo '<br>';
    echo $fruits[3];
    echo '<br>';
    echo $fruits[4];
    echo '<br>';
  ?>
  <hr>
  <!-- Associative Arrays -->
  <form action="sess3.php" method="post">

    <input type="text" name="student">
    <input type="submit">
  </form>
  <?php 
    // Associative Arrays
    $grades = array("Joshua" => 100, "Enrick" => 98, "Barney" => 80);
    echo $grades[$_POST["student"]];
    echo "<br>"
  ?>
  <hr>
  <!-- Functions -->
  <form action="sess3.php" method="post">
    <input type="text" name="dude">
    <input type="submit">
  </form>
  <?php 
    function sayHi($name){
      echo "Hello $name";
    }

    sayHi($_POST["dude"]);
    echo "<br>";
  ?> 
  <hr>
  <!-- Return Statements -->
  <?php
    function cube($num) {
      return $num * $num * $num;
    }
    $cubeResult = cube(5);
    echo $cubeResult;
    echo "<br>";
  ?>
  <hr>
  <!-- If Statements -->
  <?php
    $isMale = false;
    $isTall = false;
    if ($isMale && $isTall) {
      echo "You are a tall male.";
    } elseif ($isMale && !$isTall){
      echo "You are a short male.";
    } elseif (!$isMale && $isTall) {
      echo "You are not male but are tall.";
    } else {
      echo "You are not male and not tall.";
    }
    echo "<br>";
  ?>
  <hr>
  <!-- If Statements (Comparisons) -->
  <?php
    function getMax ($num1, $num2, $num3) {
      if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
      } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
      } else {
        return $num3;
      }
    }
    echo getMax(34, 7, 5);
    echo "<br>";
  ?>
  <hr>
  <!-- Building a better calculator -->
  <form action="sess3.php" method="post">
    First Number: <input type="number" step="0.01" name="num1"><br>
    Operator: <input type="text" name="op"><br>
    Second Number: <input type="number" step="0.01" name="num2"><br>
    <input type="submit">
  </form>
  <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];
    
    if ($op == "+") {
      echo $num1 + $num2;
    } elseif ($op == "-") {
      echo $num1 - $num2;
    } elseif ($op == '*' || $op == "x" || $op == "X") {
      echo $num1 * $num2;
    } elseif ($op == "/") {
      echo $num1 / $num2;
    } else {
      echo "Invalid Operator => $op";
    }
    echo "<br>"
  ?>
  <hr>
  <!-- Switch Statements -->
  <form action="sess3.php" method="post">
    What was your grade?
    <input type="text" name="grade">
    <input type="submit">
  </form>
  <?php
    $grade = $_POST["grade"];
    switch($grade){
      case "A":
        echo "You did amazing!";
        break;
      case "B":
        echo "You did pretty good!";
        break;
      case "C":
        echo "You did good.";
        break;
      case "D":
        echo "I know you could do better!";
        break;
      case "F":
        echo "Ooh, you're not doing so well, do you need help for this lesson?";
        break;
      default:
        echo "I don't recognize this grade.";
        break;
    }
    echo "<br>"
  ?>
  <hr>
  <!-- While and Do-while Loops -->
  <?php
    $index = 6;
    while($index <= 5) {
      echo "$index <br>";
      $index++;
    }
    
    do {
      echo "$index <br>";
      $index++;
    } while($index <= 5);
    echo "<br>"
  ?>
  <hr>
  <!-- For Loops -->
  <?php
    $index = 0;
    $arr = array(4, 8, 16, 24, 32);
    for($index /* or $i = 1 (initialize new variable) */; $index < count($arr); $index++) {
      // echo "$index <br>";
      echo "$arr[$index] <br>";
    }
  ?>
  <!-- Including HTML -->
  <?php include"header.html" ?>
  <!-- Include - PHP -->
  <?php
    // $title = "My First Post";
    // $author = "Joshua";
    // $wordCount = 400;
    // include "article-header.php";

    include "useful-tools.php";
    sayName("Joshua");
    echo $feetInMile;
  ?>
</body>
</html>