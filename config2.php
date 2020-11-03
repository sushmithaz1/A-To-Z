<?php
$hostname = "localhost";//'localhost';
$database = "shoppingapp";//'config';
$username ="root";//'root';
$password = "";//'password';

$con=mysqli_connect($hostname,$username,$password,$database);
if(!$con){
    die("connection failed:" . mysqli_connect_error());
}
?>
