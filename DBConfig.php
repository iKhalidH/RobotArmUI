<?php 
$host="localhost";
$username = "root"; 
$password="";
$dbname="smartmethods";

$conn=mysqli_connect($host,$username,$password,$dbname);

if(! $conn ) {
   die('Could not connect: ' . mysql_error());
}?>