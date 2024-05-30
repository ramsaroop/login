<?php
// include 'table.php';

// $servername="localhost";   
// $username="root";
// $password="";
// $dbname="login";
// $conn=new mysqli($servername,$username,$password,$dbname);
// if ($conn->connect_error) {
//     die("connection failed:". $conn->connect_error);
// }
// echo"connected successfully";




// /// check database if already exists

// $database_name = "login";
// $sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'login'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     echo "Database already exists.";
// } 
// else {
//    //create database 

// $sql = "CREATE DATABASE login";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
// }

// // create table
// $sql = "CREATE TABLE Login (
//   username VARCHAR(30), 
//   password VARCHAR(30)  
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table Login created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

//   $conn->close();
$conn=mysqli_connect("localhost","root","","login");
if (mysqli_connect_errno())
{
  echo"failed to connect";
}
?>