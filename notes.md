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
