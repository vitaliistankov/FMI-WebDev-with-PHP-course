<?php
include "config.php";
$sql= "INSERT INTO User(Code,Name,KodVidaSuma,KodProdukta, BroiProdukti) VALUES ".
"(1,'Hotel Maritza',1,1,10),".
"(2,'Banka BAKB',2,2,15),".
"(3,'Shop Produkti',3,3,20)";
if ($conn->query($sql) === TRUE)
   {     echo "<p>Tabliza User e popalnena s 3 zapisa uspe6no";  }
else {  echo "<p>Error insert table: " . $conn->error; }
$conn->close();
?>