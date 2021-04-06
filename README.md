#### PHP needs semicolons

```
php -S localhost:4000
```

Create a web server.

**Echo** is a command in php, allows us to write information into html document

```php
<?php
  echo ("Hello World") // or echo "Hello World"
?>
```

Can type HTML Codes

```php
<?php
  echo "<h1>Joshua's Site</h1>"
?>
```

Php renders echo commands in order

### Variables

```php
$name = "Joshua"; // declare a variable
echo "My name is $name";
$name = "Enrick"; // update a variable
echo "Oh wait no, it's actually $name"; // name will now be "Enrick"
```

### Data Types

```php
$phrase = "This is a String Data Type.";
$exampleInteger = 18; // can be negative
$exampleFloat = 18.0; // can be negative, is different from "exampleInteger"
$exampleBoolean = true; // or false
null // no value
```

### Working with Strings

```php
$string = "String";
echo strtolower("Just a basic string <br>"); // string to lowercase
echo strtoupper("Just a basic string <br>"); // string to uppercase
echo strlen("String Length"); // string length
echo "<br>";
echo "String"[0]; // gets specific character by index
echo "<br>";
$string[1] = "b"; // change letter in string
echo str_replace("ing", "art", $string); // replace "ing" with "art" in "$string"
echo "<br>";
echo substr($string, 2, 4); // get substring from "$string" starting at index "2" until "4"(optional)
```

### Working with Numbers

```php
$myNum = 25;
echo 9 % 2; // php supports all arithmetic and orders of operations PEMDAS
echo "<br>";
$myNum++; // increment
echo "$myNum <br>";
$myNum*=2; // shorthand operations
echo "$myNum <br>";
echo abs(-4); //absolute number
echo "<br>";
echo pow(2, 4); // power
echo "<br>";
echo sqrt(144); // squareroot
echo "<br>";
echo max(2, 4); // return larger number
echo "<br>";
echo min(2, 4); // return smaller number
echo "<br>";
echo round(2.5343); // round off
echo "<br>";
echo ceil(3.001); // always round up
echo "<br>";
echo floor(2.9999) // always round down
```

### Getting User Input

Code is stored in **form.php**

```php
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
```

### Building a Basic Calculator

```php
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
```

### Madlibs Game

```php
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
```

### URL Parameters

> localhost:4000/form.php?name=Joshua&age=70

We can still access 'age' with $\_GET

We can store information in URLs

```php
 <form action='form.php' method="get">
    Name: <input type="text" name="name"> <br>
    <input type="submit"><br>
  </form>
  <br>
  <?php
   echo $_GET["name"];
   echo $_GET['age'];
  ?>
```

### POST vs GET

**GET** always shows data in url parameters, not good for password

**POST** does not show data in url parameters, secure to transfer to php server

```php
<h3>POST vs GET</h3>
  <form action="form.php" method="post">
    Password: <input type="password" name="password"><br>
    <input type="submit"><br>
  </form><br>
  <?php
    /* POST vs GET */
    echo $_POST['password']
  ?>
```

### Arrays

Arrays are structures where we can store multiple pieces of information.

```php
 $friends = array("Lance", "Enrique" ,"Daryll");
  echo $friends[0];
  echo "<br>";
  echo $friends[1];
  echo "<br>";
  echo $friends[2];
  echo "<br>";
```

Accessing individual elements can be accessed like in JS.

PHP can store multiple types of data.
Can replace an element with a different data type.

```php
 $friends[4] = "Added Element"; // can add at any index

 echo count($friends); // shows how many elements
```

### Using Checkboxes

Values in checkboxes can be stored in an array.

```html
<form action="sess3.php" method="post">
  Apples: <input type="checkbox" name="fruits[]" value="apples" /><br />
  Oranges: <input type="checkbox" name="fruits[]" value="oranges" /><br />
  Bananas: <input type="checkbox" name="fruits[]" value="bananas" /><br />
  Pineapple: <input type="checkbox" name="fruits[]" value="pineapple" /><br />
  Grapes: <input type="checkbox" name="fruits[]" value="grapes" /><br />
  <input type="submit" />
</form>
```

```php
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
```

### Associative Arrays

They're similar to objects in Javascript.

```php
$grades = array("Joshua" => 100, "Enrick" => 98, "Barney" => 80);
/*
  const grades = [
    {
      Joshua: 100
    },
    {
      Enrick: 98
    },
    {
      Barney: 80
    }
  ]
*/
echo $grades[$_POST["student"]];
echo "<br>"
```

### Functions

```php
function sayHi($name){
    echo "Hello $name";
  }
  sayHi($_POST["dude"]);
```

### Return Statements

```php
function cube($num) {
    return $num * $num * $num;
  }
$cubeResult = cube(5);
echo $cubeResult;
```

Just like most functions, **return** breaks out of the function and returns a value.

### If Statements

```php
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
```

```php
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
```

### Switch Statements

```php
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
```

### While and Do-while Loops

```php
$index = 6;
while($index <= 5) {
  echo "$index <br>";
  $index++;
}

do {
  echo "$index <br>";
  $index++;
} while($index <= 5);
```

### For loops

```php
$index = 0;
$arr = array(4, 8, 16, 24, 32);
for($index /* or $i = 1 (initialize new variable) */; $index < count($arr); $index++) {
  // echo "$index <br>";
  echo "$arr[$index] <br>";
}
```

### Including HTML

```php
<?php include"header.html" ?>
```

### Include PHP

```php
// $title = "My First Post";
// $author = "Joshua";
// $wordCount = 400;
// include "article-header.php";

include "useful-tools.php";
sayName("Joshua");
echo $feetInMile;
```
