<?php

include_once "function.php";

echo"<h1> PHP Functions </h1>";

echo "<br>";
familyname("Robiul","2004<br>");
familyname("Rahat","2004<br>");
familyname("Sagor","2004<br>");

echo "<br>";

setheight(50);
echo "<br>";
setheight(150);
echo "<br>";
setheight(250);
echo "<br>";
setheight(350);

$x = 12;

if (isEven($x)){
    echo "$x is a even number";
}else {
    echo "$x is a odd number";
}

$foodname = "Pizza";
$itemnumber = "2 Dish";

serve($foodname , $itemnumber);
echo sum(10,20,30);
echo sumnumber( 5,10,20,30,20,25,);