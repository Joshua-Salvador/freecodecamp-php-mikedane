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
    echo"Hello World"; // echo ("Hello World")
    echo "<h1>Joshua's Site</h1>";
    echo "<hr />";
    echo "<p>Paragraph</p>";
    echo "<hr>";
    /* Variables */
    $name = "Shua"; // Declaring a variable
    $age = 18;

    echo "$name is pretty awesome. <br>";
    $name = "Joshua"; // Update variable
    echo "Even though $name is just $age years old, he is pretty awesome.<br>";
    echo "<hr>";
    /* Data Types */
    $phrase = "This is a String Data Type.";
    $exampleInteger = 18; // can be negative
    $exampleFloat = 18.0; // can be negative, is different from "exampleInteger"
    $exampleBoolean = true; // or false
    null; // no value
    echo "<hr>";
    /* Working with Strings */
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
    echo "<br>";
    echo "<hr>";
    /* Working with Numbers */
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
    echo floor(2.9999); // always round down
    echo "<hr>";
  ?>

</body>
</html>