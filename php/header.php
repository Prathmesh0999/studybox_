<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "studybox";
$coon = "";

$coon = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if($coon){
    echo"you are connected" ;
}
else{
    echo "Could Not Connect!";
}