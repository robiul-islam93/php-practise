<?php


$name = "";
$email = "";
$region = "";
$season = "";
$interests = "";
$participants = "";
$message = "";
$token = "";
$data = [];



//  addition is highly important
// lets go through each of the field and check theam

$errors = [];

// 0. token


if(empty($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    $errors[] = "Invalid token";
}

// 1. name -required, alphabets and spaces only

if(!empty($_POST['name'])){
    $name = $_POST['name'];
    if(ctype_alpha(str_replace(" ", " ", $name )) == false)
    $errors[] = "Name Should contain only alphabets and spaces";
}
else{
    $errors[] = "Name field cannot be empty";
}



// 2. email required, validate using filter_var() function

if(!empty($_POST['email'])){
    $email = $_POST['email'];
    if(filter_var($email,FILTER_VALIDATE_EMAIL) !== $email){
        $errors[] = "Email is not vaild";
    }
}
else{
    $errors[] = "Email can't be empty";
}



// 3. region - required, value should be from the list

if(!empty($_POST['region'])){

    $region = $_POST['region'];
    $allowed_regions = [" Asia ", " Oceania " ,  " Africa ", " North America ","Latin America "," Europe "];
    if(!in_array($region, $allowed_regions)){
        $errors[] = "Region not in list";
    }
}else{
    $errors = "select a region from the list";
}



// 4. season - not required, but must be in the list if selected

if(!empty($_POST['season'])){
    $season = $_POST['season'];
    $allowed_season = [" Summer " ," Winter " ," Spring " ,"Autumn  " ," Monson" ,];
    if(!in_array($season, $allowed_seasons)){
        $errors[]= "Invalid Season";
    }

}




// 5. Interest - not required, but must be in the list if selected

if(!empty($_POST['interests'])){
    $interests = $_POST['Interests']; //this is also array
    $interests_allowed = ["Photography " , " Trekking" ,"start-gazing " ," bird-watching" ,"camping " ,];

    foreach( $interests as $Interest){
        if(!in_array($interests, $Interests_allowed)){
            $errors[] = "This activity you selected is not our list";
            break;
        }
    }
}

// 6. participants - required, must be between 1 and 10

if(!empty($_POST['participants'])){
    $participants = (int) $_POST['participants'];
    if($participants < 1 || $participants > 10){
        $errors [] = "No. Of participants must 1-10 ";
    }
}
else{
    $errors[] = "Sepcify the no. of participants";
}

// 7. message - required, no html tags, js code, etc, just normal text

if(!empty($_POST['message'])) {
    //$message = htmlentities($_POST['message'], ENT_QUOTES, "UTF-8");
    //this is escaping, we'll do it while outputting
    $message = $_POST['message'];
}
else{
    $errors[] = "Tell about your requirements";
}

if($errors){
    var_dump($errors);
}
else{
    echo "All fields correct";
    $data = [
        "name" => $name,
        "email" => $email,
        "region" => $region,
        "season" => $season,
        "Interests" => implode(",", $Interest),
        "participants" => $participants,
        "message" => $message
    ];
    var_dump($data);
}
?>

