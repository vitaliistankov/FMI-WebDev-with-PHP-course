<?php
$conn = new mysqli("localhost","root","")
  or die("Ne stava vrazka sas sarvara???");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }
echo "<p>Connected successfully<p>";

$sql = "CREATE DATABASE Zad16";
if ($conn->query($sql) === TRUE) {
    echo "<p>Database created successfully";
} else { echo "<p>Error creating database: " . $conn->error; }

$conn = new mysqli("localhost","root","","Zad16"); // свързване със създадената БД
$sql =
"CREATE TABLE User ( ".
"Code INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,".
"Name VARCHAR(33) NOT NULL,".
"KodVidaKlient INT(4) NOT NULL,".
"KodProdukta INT(4) NOT NULL,".
"BroiProdukti INT(6) NOT NULL)";
if ($conn->query($sql) === TRUE) 
{   echo "<p>Table User created successfully"; }
else {  echo "<p>Error creating table: " . $conn->error;  }
$conn->close();
?>
