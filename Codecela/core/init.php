<?php
$servername="localhost";
$username="root";
$password="";
$database="codesela";
$db=mysqli_connect($servername,$username,$password,$database);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 ?>
