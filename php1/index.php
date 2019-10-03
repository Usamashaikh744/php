<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Introduction</title>
    <link rel= "text/css" type= "stylesheet" href="style.css">


</head>
<body>
    <h1>This is the sum of two numbers</h1>
    <?php
    $place = "Karachi";
    echo 4 + 8; ?>
    <p> This Is The Paragraph </p>
    <?php echo (2 + 6) * 2 ?>
     <!-- BODMAS (BRACKETS, POWERS, DIVISION, MULTIPLICATION, ADDITION, SUBTRACTION -->

<h5> My Favourite Place is <?php echo $place; ?> </h5>
<hr>

</body>


</html>




<?php

$name = "Khair";
echo $name;

    echo "Hello World! <br>";
    echo "<h1> This is a headig</h1>";
    echo  "<p> This is a Paragraph</p>";
    echo 4+5;




    $name = "Usama";
    echo "<h1>" . $name . "</h1>";
    echo $name; 

    // concatination is used to join two or more things together

    echo "<h2>My Name is: " . $name . "</h2>" . "<p>My Full name is " . $name . "Shaikh </p>";
    echo "My name is $name <br>";
    $name = "Usaid";
    $name = "Saad";
    echo "My name is $name";

    echo "<h1>Hello World </h1>";
    echo "<p>This is a paragraph in php</p>";
    
?>

<!-- functions
functions names can be defined in two ways:
1. camelCase, 2. sanke_case -->

<?php

function myFirstFunction(){
    // we will write thefunction defination here 
    echo "Hi my name is usama<br>";
    echo "I am a web developer<br>";
    // print is the alternate of echo 
    print "My hobby  is arts and crafts<br>";

    return;

    echo "This Class is amazing";
}

function multiOfTwoNum($num1 , $num2){
  $result = $num1 * $num2;
  echo "This Is a Number $result";
}

echo multiOfTwoNum(2,2) . "<br>";

function subOfTwoNum($num1 , $num2){
    $result = $num1 - $num2;
    echo "This Is a Number $result";
  }
  
  echo subOfTwoNum(2,2) . "<br>";

  function divOfTwoNum($num1 , $num2){
    $result = $num1 / $num2;
    echo "This Is a Number $result";
  }
  
  echo divOfTwoNum(2,2) . "<br>";
// This is about me

echo "<h1>This is about me</h1>";
echo myFirstFunction();

// Variables
$name = "Khair";
$myfullname = $name . "Un Nisa<br>";
echo $myfullname;
// this will print Khair un nisa 


// escape sequence
// My wordpress classes are going amazing print krna ha 
echo "My \"wordpress\" classes are going amazing<br>";
// 2nd method
echo 'My "wordpress" classes are going amazing<br>';



// Built in php functions
// 1. strrev()
$reverse = "Hello World!";
echo $reverse . "<br>";
echo strrev($reverse) . "<br>";
$reverse = "!dlrow olleH";
echo $reverse . "<br>";
echo strrev($reverse);

// 2. strtouppercase()
$uppercase = "this text is in upper case";
echo $uppercase . "<br>";
echo strtoupper($uppercase);

// 3.strtolower
echo strtolower($uppercase) . "<br>";

// 4.rand()
// rand(min-value,max-value)
echo rand(1,20) . "<br>";

// 5. gettype()
$string = "Usama";
$integer = 1;

echo gettype($string) . "<br>";
echo gettype($integer) . "<br>";

// 6. str_repeat()
$repeat = "I ate Biryani Today";
echo str_repeat("$repeat <br>", 20);

// 7. var_dump()
echo var_dump(1234) . "<br>";
echo var_dump(12.75) . "<br>";

// If satemet

$num = 10;
$num2 = 4;

if($num <  $num2){
    echo "You Are Awesome!";

} else {
    echo "You Are Badtameez<br>";
}

// switch statement
$color = "blue";
switch ($color) {
    case "red":
    echo "Your Favourite color is red";
    break;

    case "green":
    echo "Your Favourite color is green";
    break;

    case "violet":
    echo "Your Favourite color is violet";
    break;

    default:
    echo "Soory We Are Unable To Find";

}
// 1. if
// There Are Four Conditional Statements
$if = true;
if ($if){
    echo "<br> This Is an if statement";
}

// 2. if..else
$if_else = 10;
if ($if_else <= 10){
    echo "<br> This Is an if..else statement";
} else{
    echo "<br> This Is a false if..else statement";
}

// 3.If...Elseif...Else
$fav_food = "5";
if($fav_food > 10){
    echo "I Love Biryani";
} elseif($fav_food > 5){
    echo "I Love Fries";
} else{
    echo "<br>I Hate This Kind Of Food";
}

?>

