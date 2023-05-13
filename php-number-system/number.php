<?php
$number = 12;  //desimal number
$nmbr = 012; // octal number
$oc = 070;
$hnumber = 0x4D;

echo "<h1>Discussion on different number systems</h1>";
echo "<h3>This number is decimal, bainary, octal and hexadecimal number</h3/";
echo "<br>";
printf("The Number Is %d and %d %d", $number, $nmbr, $hnumber);
echo "<br>";
printf (" 12 binary number = %b", $nmbr);
echo "<br>";
printf ("octhal number %d", $oc);
echo "<br>";
printf (" The equvirent of %d = %o", 40437, 40437);
echo "<br>";
printf (" octal number %o = %d", 020000, 020000);
echo "<br>";
$nm = 125;
$mn = 25;
$mn *= 2;
$numb = 21;
$number =200;
$txt = "Robiul";
echo $mn;
echo "<br>";
echo "Hi Friend My sister %s Age and %s my age", $number, $mn;
echo "<br>";
printf( "Hi Friend My Sister %s Age and My Age %s", $number, $mn);
echo "<br>";
printf( 'Hi Friend My Sister %2$s Age and My Age %1$s', $number, $mn);
echo "<br>";
echo"<br>";
//varable shopping

$snm= "sagon hossain";
$ranm= "rahat";
$rnm= "robiul islam";
echo "<h1>The magic of the printf function</h1>";
echo "<br>";
printf ('my first name %3$s %2$s %1$s', $snm, $ranm, $rnm);
echo "<br>";
printf('The binary equivelent of %1$d %1$b' , 12);
echo "<br>";

$fltnm = 52.155;
printf("%.2f", $fltnm);
echo "<br>";

$fnm = 21.4215;
printf("%09.3f", $fnm);
echo "<br>";
$ronm = "Robiul";
$rahnm = "Rahat";

$output = sprintf("my name is %s %s", $rahnm, $ronm);

echo strtoupper ($output);


