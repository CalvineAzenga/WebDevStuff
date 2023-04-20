<?php
$servername="localhost";
$bBusername="root";
$dBPassword="";
$dBName="loginsystemweb";

$conn=mysqli_connect($servername, $dBusername, $dBPassword, $dBName);

if (!$conn) {
 die("Connection failed: ".mysqli_connect_error());

}
