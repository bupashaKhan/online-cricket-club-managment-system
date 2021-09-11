<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

$dbname = 'ccms';

$conn= mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
    die ("connection failed.$conn=>connect_error");


}
echo 'Connection successful';
?>