<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "employee_db";
$port = 3306;

$conn = new mysqli($host,$username,$password,$dbname,$port);

if(!$conn){
    echo "Not connected";
}

?>