

<h1>PHP Arrays</h1><br>
<h4>PHP Indexed arrays</h4><br>
<?php  

$car = array("BMW", "Toyota", "Honda", "BMW", "Toyota", "Honda");
echo "I Like " . $car[0] . " , " . $car[1] . " And " . $car[2] ."," . $car[3] . " , " . $car[4] . " And " . $car[5] . " . ";

?>


<br><br><br>

<!DOCTYPE html>
<html>
<body>
    <h4>PHP Associative Arrays</h4>
    <?php 
    // $age = array ("Robiul" => "23" , "Rahat" => "21", "Sagor" => "25");
    // foreach($age as $x => $x_value){
    //     echo " my name " .$x. " age " .$x_value;
    //     echo "<br>";
    // }
    // echo "<br>";

    $name_age = array ("Robiul Islam" => "22", "Rahat MAlitha" => "22", "Sagor Hossain" => "25");
    foreach($name_age as $name => $age){
        echo " My Name Is " . $name  . "  Age:  " . $age;
        echo"<br>";
    }

    ?>

 <h4>PHP Multidimensional Arrays</h4>

    <?php

    $placename = array(
        array("pabna","california"," Bro")   
    );

    echo " I Hate " .$placename[0][0].  " , And I Love " .$placename[0][1] .  $placename[0][2].  ". ";
    echo "<br>";
    echo "<br>";
    echo "<br>";



    $student_name = [
        "Robiul islam",
        "Rahat Malitha",
        "Sagor Hossain",
        "Rasel",
        "Rahul",
        "Monir",
        "Rabbi"
    ];

    $student_name[2] = "Imtiaz Vai";
    
    $n = count($student_name);
    for($i=0; $i < $n; $i++){
        echo $student_name[$i];
        echo "<br>";
    }

    $student = array_shift($student_name);
  //  echo $student;
    echo "<br>" ;

    $n = count($student_name);
    for($i=0; $i < $n; $i++){
        echo $student_name[$i];
        echo "<br>";
    }



    $student_name[] ="Apple";
    array_push($student_name," DELL");

    $student = array_unshift($student_name);
    $student = array_push($student_name);
    // echo $student;
    echo"<br>";



    $n = count($student_name);
    for($i=0; $i < $n; $i++){
        echo $student_name[$i];
        echo "<br>";
    }


    








    