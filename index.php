<?php
error_reporting(E_ERROR | E_PARSE);
$con1=mysqli_connect('localhost','root','','customer');
if(!$con1){
    die('connection error'.mysqli_connect_error());
}
$con_ph=mysqli_connect('localhost','root','','pharmacy');
if(!$con_ph){
    die('connection error'.mysqli_connect_error());
}
$con_ad=mysqli_connect('localhost','root','','adminl');
if(!$con_ad){
    die('connection error'.mysqli_connect_error());
}

error_reporting(E_ERROR | E_PARSE);
$con=mysqli_connect('localhost','root','','hospital');
if(!$con){
    die('connection error'.mysqli_connect_error());
}


?>