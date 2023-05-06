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
echo "Robiul Islam Robi!";
?>

<?php 
$color ="REd";
    echo "My favorite color" . $color . "<br>";
    echo "My favorite color" . $cOlor . "<br>";
    echo "My favorite color" . $COlor . "<br>";
?>

<?php 
$x=5 + 5;
echo $x;
?>

<?php

$text = "I Love PHP Coding";
$x = 50+100;
$y = 10-5;

echo $text; 
echo "<br>";
echo $x;
echo "<br>";
echo $y;

?>

<!-- global scope -->

<?php

$y = 5; 

function myTest(){
    
echo "<p>Variable x inside function is: $y</p>";
    }
myTest();

echo "<p>Variable x inside function is: $y</p>";
?>

<!-- global scope -->


<?php

$x = 5;
$y = 10;

function myText(){
    global $x, $y;
    $y = $x + $y;
}

myText();
echo $y;

?><br>

<!-- static scope -->
<?php

function myTeam(){
static $x= 0;
echo $x;
$x++;
}

myteam();
echo"<br>";
myteam();
echo"<br>";
myteam();
echo"<br>";
?>

<?php

echo "<h2> PHP LOVER! </h2>";
echo "Hellow world <br>";
echo "I Love Php <br>";
echo " my " ," name ", " is ", " robiul ";

?>

<?php

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2";
echo "study php at" . $txt2 . "<br>";
echo $x * $y;
?>

<?php

print "<h2>PHP is Fun</h2>";
print "hi all my firnd";
print "'my about to learn PHP!";
echo "<br>";



  class Man {
    public $name;
    public $age;
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
    public function message() {
      return "My man is a " . $this->name . " " . $this->age . "!";
    }
  }
  
  $myman = new Man("robi", "32");
  echo $myman -> message();
  echo "<br>";
  $myman = new Man("rahat", "70");
  echo $myman -> message();

  $num1 = 10;
  $num2 = 20;

  $sum = $num1 + $num2;

  echo $sum;
?>

<?php
$robi = "Robi";
$rahat = "Rahat";
 
echo $robi." " .$rahat;

?>
    
</body>
</html>