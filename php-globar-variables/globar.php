
<?php

//PHP Global Variables - Superglobals

$x = 20;
$y = 30;

function addition(){
    $GLOBALS ['z'] = $GLOBALS ['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo "<br>";
echo "<br>";




echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER ['SERVER_NAME'];
echo "<br>";
echo $_SERVER ['HTTP_HOST'];
echo "<br>";
echo $_SERVER ['HTTP_REFERER'];
echo "<br>";
echo $_SERVER ['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER ['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_PORT'];
echo "<br>";
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
?>
<br><br>

<html>
<body>

<form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">

Name : <input type="text" name= "fnmae">
<input type="submit">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // collect value of input field
    $name = htmlspecialchars($_REQUEST["fnmae"]);
    if (empty($name)){
        echo "Name Is Empty";
    }else{
        echo $name;
    }
}

?>

</body>
</html>
