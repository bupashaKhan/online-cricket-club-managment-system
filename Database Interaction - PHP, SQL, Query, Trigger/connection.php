<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

$dbname = 'db_cricket';

$conn= mysqli_connect($hostname,$username,$password);
if(!$conn){
    die ("connection failed.$conn=>connect_error");


} else {
    echo 'Connection successful';
}

?>