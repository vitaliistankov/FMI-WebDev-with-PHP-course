<?php
include "config.php";
$sql= "INSERT INTO User(Code,Name,Kind,Sum) VALUES ".
"(1,'Hotel Maritza',1,222.22),".
"(2,'Banka BAKB',2,111.11)";
if ($conn->query($sql) === TRUE)
   {     echo "<p>Tabliza User e popalnena s 2 zapisa uspe6no";  }
else {  echo "<p>Error insert table: " . $conn->error; }
$conn->close();
?>
	