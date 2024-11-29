<?php
$y = 22;

function myfunction() {
    echo $GLOBALS ['y'];
}
 myfunction();

 echo "<br>";

 function myfunctions() {
    echo $y;
}

myfunctions();

echo "<br>";

//Super GLOBAL TO BE CONSIDER__________
// $GLOBAL
// $_SERVER
// $_POST
// $_GET


echo $_SERVER['PHP_SELF'];

echo "<br>";
echo "<br>";

echo $_SERVER['SERVER_NAME'];

echo "<br>";
echo "<br>";

// Different between Single quots and Double qoutes______
$z = "MARY";
echo "HELLO $z";

echo "<br>";
echo "<br>";

echo 'HELLO $z';

echo "<br>";
echo "<br>";


?>

<form action ="<?php echo $_SERVER['PHP_SELF'] ?>"
method="POST" >

<input type="text" placeholder="FIRST NAME" name="fname">
<br><br>

<input type="text" placeholder="LAST NAME" name="lname">
<br><br>
<button type="sumbit">sumit</button>

</form>

<?php

$first_name =$last_name ="";
// initialise varibles to empty string

if ($_SERVER['REQUEST_METHOD'] == 'POST')
// checking if form is submitted via POST method
$first_name = htmlspecialchars ( $_POST['fname']);
// $_POST['fname] holds form data of a form that used post method
// htmlspecialchars help to prevent malicious codes

$last_name = $_POST['lname'];

echo "<h2> GOOD AFTERNOON $first_name $last_name </
h2>";

// <SCRIpt>malicious code displayed as plan text</SCRIpt>

// the htmlspecialchars is a check to prevent harmful chars for entering the fold field.











?>