<?php
$my_name = "joshua";
$myName = "joshua";
echo "<br> my name is $my_name";
$my_name = "joshua";
echo"<br>";
var_dump($my_name);
$yearsOfExperience = 5; 
echo "<br>";
var_dump($yearsOfExperience);
$Height = 6.1;
echo  "<br>";
var_dump($Height);
$isMale = true;
var_dump ($isMale);
echo "<br>";

// array
$fullName =array("joshua", "ogwezi", "chuks");
var_dump($fullName);
echo "<br>";
echo "my first name is $fullName[0] and my surname is $fullName[2]";

// 28/10/2024
// null
$Nothing = null;
echo "<br>";
var_dump ($Nothing);
// constant
define("pi", 3.142);
echo "<br>";
echo "pi";
 echo "<br>";
var_dump(pi);

//const gravityAcceleration = 10;
define("gravityAcceleration", 20);
echo "<br>";
var_dump(gravityAcceleration);
echo "<br>";

//31/10/24
//operators
//arithmetic operators
//addition operators
$x = 10;
$y = 5;
echo "<br>";
echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;
echo "<br>";

//modulus operations
echo $x%$y;
echo "<br>";
echo $x ** $y;
echo "<br>";

//increment and decrement operator
$x++;
echo $x;
echo "<br>";

//1/11/24
//decrement operator
$x--;
echo $x;

//assignment operator
$a = 100;
$b = 50;

//addition assignment
$a += $b;
echo "<br>";
echo $a;

//subtraction assignment
$a -= $b;
echo "<br>";
echo $a;

// divisional assignment
$a /= $b;
echo "<br>";
echo $a;

// multiplication assignment
$a *= $b;
echo "<br>";
echo $a;

echo "<br>";
 
// logical operators are use to compel and combine words using a conditinal statement.
//Examples of logical operator are : AND(&&), OR (||), XOR , NOT(!)
 
if ($a == 100 && $b == 50) {
echo "we are good to go.";
}
echo "<br>";
if ($a == 100 || $b == 55) {
echo "we are good to go.";
}
echo "<br>";
if ($a == 100 xor $b == 55) {
echo "we are good to go.";
}
echo "<br>";
if (!($a == 101)) {
echo "we are good to go.";
}

echo "<br>";

// 07/11/24
// PHP CONDITIONAL STATEMENTS:
// There are four notable conditional statement:
// If statement.. 
// If... else statement..
// If... elesif... else statement.. 
// Switch statement..

// If statement: the if statement is one of the most important in PHP
// EXAMPLE: For Single IF.....

if (7>3) {
echo "Have a good day";
}
echo "<br>";

if (3<7) {
echo "My name is tikus";
}
echo "<br>";

//Example:
// variable declaration

$my_name = "tikus";

$present_time = date (format: "H:i");
echo "<br>";

echo "present_time: $present_time <br>";


if ($present_time >= 00.00 && $present_time <= 12.00)  {
     echo "<h3> Good morning, $my_name! </h3>";    
} 
elseif ($present_time >= 12.00 && $present_time <= 16.00 ) {   
    echo "<h3> Good Afternoon, $my_name! </h3>"; 
} 
elseif ($present_time >= 16.00 && $present_time <= 23.59) { 
    echo "<h3> Good Night, $my_name! </h3>";   

}

else {
    echo "<h3> Hello, $my_name! </h3>";
}
echo "<br>";

// 8/11/2024
// SWITCH STATEMENT:
//EXAMPLE__________
$today = date (format: "D");
echo "Today is: $today <br>";

switch ($today) {
case "Mon";
     echo "Hello everyday, it's Monday, Have a great week!";
     break;
case "Tue";
    echo "Hello everyday, it's Tuesday, Have a blessed week!";
    break;
case "Wed";
    echo "Hello everyday, it's Wednesday, Have a dancing week!";
    break;
case "Thur";
    echo "Hello everyday, it's Thursday, Have a splendid week!";
    break;
case "Fri";
    echo "Hello everyday, it's Friday, Have a bottle week!";
    break;
case "Sat";
    echo "Hello everyday, it's Saturday, Have a Restful week!";
    break;
case "Sun";
    echo "Hello everyday, it's Sunday, Have a Fabulous week!";
    break;
default:
    echo " Sorry, this is not a day in the week";
    break;
    } 
echo "<br>";
    // 11/11/2024
    // PHP LOOPS_____________

    $numbers = 1;
    echo $numbers."<br>";
    $numbers++;

    echo $numbers."<br>";
    $numbers++;

// While Loops:_________

$numbers = 1;
while ($numbers <= 10) {
    echo $numbers."<br>";
    $numbers++;
}

// Do While LOOPS:
 $numbers = 11;
 do{
    echo $numbers. "<br>";
    $numbers++;
 } while ($numbers <= 10);


 // FOR WHILE:

  for ($numbers = 1; $numbers <= 100; $numbers++) {
    echo $numbers."<br>";
  }

for ($numbers =1; $numbers <= 100; $numbers++)
    if($numbers % 3 == 0) {
        echo "Fizz.<br>";
        } else {
            echo $numbers."<br>";
            
        }

    // Create an app that print number 1 to 100, print Fizz for multiple of 3, abd Buzz for multiple of 5, print FIZZBUZZ for multipul of 15.

    for ($numbers =1; $numbers <= 100; $numbers++) {
       if ($numbers % 15 ==0) {
            echo "FizzBuzz <br>";
        } elseif ($numbers % 5 == 0) {
            echo "Buzz <br>";
        }
          elseif ($numbers % 3 == 0){
            echo "FIZZ <br>";
        }
            else {
          echo $numbers."<br>";
        }

          }

  // FOREACH:
//EXAMPLE 1:
  $cars =array("BMW", "TOYOTA", "FERARRI", "LEXUS");
  echo "i love $cars[0] <br>";
  echo "i love $cars[1] <br>";
  echo "i love $cars[2] <br>";
  echo "i love $cars[3] <br>";


   // EXAMPLE 2:
  $cars = array("BMW", "TOYATA", "FERARRI", "LEXUS");
  foreach($cars as $car) {
    echo "i love $cars[0] <br>";
  }

// 15/11/2024
// ARRAY:

$domesticAnimals = array("Dog", "Cat", "Goat", "Horse", "Cow");

$cities = ["Asaba", "Warri", "Ughelli", "Sapele", "Agbor"];
echo $domesticAnimals[2]."<br>";


//indexed array:
//count____
     echo count($domesticAnimals);

     echo "<br>";

//array_push___

array_push($cities, "Abraka", "Effurun", "Ozoro", "Patani");
var_dump($cities);

$cities[2] = "Okpanam";
echo "<br><br>";
var_dump($cities);

// Associative Array:
$phone = ["brand" => "sunsung", "model" => "utral", "year" => "2023", "color" => "black", "rom" => "256"];
echo "<br><br>";
var_dump($phone);

 $phone["model"] = "utral";
echo "<br>";
var_dump($phone);

// 18/112024
// Function: A function is a blockstatement that can be used repeatedly in a programm...

function greetMe() {
    echo "<br> good afternoon";
    }
    greetMe();




?>