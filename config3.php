<?php
 $hostname = "localhost";//'localhost';
$database = "shoppingapp";//'config';
$username ="root";//'root';
$password = "";//'password';

$con=mysqli_connect($hostname,$username,$password,$database);

$result = mysqli_query($con,"SELECT * FROM  `cart`");


?>