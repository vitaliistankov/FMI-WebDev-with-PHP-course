<html> <head> <title> Vsi4ki danni </title> </head>
<body bgcolor=lightgreen>
<h2> Vsi4ki danni </h2>
<table border=4 bordercolor=black cellspacing=0
  cellpadding=9 width=66%>
<caption><big><b>Softuerna firma USPEH</b></big></caption>
<tr  bgcolor=cyan> <th> Kod <th> Ime <th> Vid <th> Suma </tr>
<?php
include "config.php";
$sql="SELECT * FROM User ORDER BY CODE";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{   // output data of each row
  while($row = $result->fetch_assoc())    {
    echo "<tr bgcolor=yellow>\n";
    echo "<td>". $row["Code"] .
    "<td>" . $row["Name"] .
    "<td>" . $row["Kind"] .
    "<td>" . $row["Sum"];                           }
} else echo "0 results";
$conn->close();  ?>
</table> <p>
Legenda za vida: 1 => vzemane;  2 => zadaljenie.
<p> <a href="index.htm#menu>"> Menu =>  </a>
</body> </html>
