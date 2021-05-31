<?php
$conn = new mysqli("localhost","root","")
  or die("Ne stava vrazka sas sarvara???");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }
echo "<p>Connected successfully<p>";

$sql = "CREATE DATABASE Zad15";
if ($conn->query($sql) === TRUE) {
    echo "<p>Database created successfully";
} else { echo "<p>Error creating database: " . $conn->error; }

$conn = new mysqli("localhost","root","","Zad15"); // свързване със създадената БД
$sql =
"CREATE TABLE User ( ".
"Code INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,".
"Name VARCHAR(33) NOT NULL,".
"Kind INT(4) NOT NULL,".
"Sum DECIMAL(9,2) NOT NULL)";
if ($conn->query($sql) === TRUE) 
{   echo "<p>Table User created successfully"; }
else {  echo "<p>Error creating table: " . $conn->error;  }
$conn->close();
?>