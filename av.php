<?php
include 'config.php'; //includes config.php for connection
$name= $_POST['name']; //'name' passed from aaa.html
$pass=$_POST['pass']; //'pass' passed from aaa,html
$r="insert into aa values('$name','$pass')"; //query initialized to $r
$run=mysqli_query($conn,$r); //run query ($conn from config.php)
if($run)
    echo "success";
else
    echo "no";
?>