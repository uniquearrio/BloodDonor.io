<?php

$servername="localhost";
$uname="root";
$pass="";
$db="secyear";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM blood";
                $query = $conn->query($sql);

                echo "<h2>".$query->num_rows." ပုလင်း</h2>";
?>