<?php
//global scope
$var = 5;
$var1 = "Hello Andy";
echo $var. "<br>".$var1;

// //local scope
function myfunction(){
    global $var; // use keyword "global" inside function to access variables which created outside function.
    static $a=10;
    echo $a."<br>";
    echo $var;
}

// calling function called myfunction()
myfunction();
// global $a;

/* $_SERVER['SCRIPT_FILENAME]  The absolute pathname of the origin PHP file, including the filename
 $_SERVER['DOCUMENT_ROOT'] the absolute path to the web server's document root. No trailing slash. */
 $host = $_SERVER['DOCUMENT_ROOT'];
 echo $host;

$name = "Andy";
echo "<br>".'$name'."."."$name";

?>