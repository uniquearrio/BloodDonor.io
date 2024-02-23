<?php

$servername="localhost";
$uname="root";
$pass="arrio";
$db="secyear";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

?>