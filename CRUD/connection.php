<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "CRUD_DB";


$conn = new mysqli($severname,$username,$password,$database);

if ($conn->connect_error){
    die("connection failed". $conn->connect_error);
}
?>