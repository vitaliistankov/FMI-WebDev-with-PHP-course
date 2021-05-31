<html> <head> <title> Vsi4ki danni </title> </head>
<body bgcolor=lightgreen>
<h2> Vsi4ki danni </h2>
<table border=4 bordercolor=black cellspacing=0
  cellpadding=9 width=66%>
<caption><big><b>Proizvodstvena firma MLADOST</b></big></caption>
<tr  bgcolor=cyan> <th> Kod <th> Ime <th> Vid Klient <th> Vid Product <th> Edenichna Tsena <th> Broi produkti </tr>
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
    "<td>" . $row["VidKlient"] .
    "<td>" . $row["VidProduct"] .
    "<td>" . $row["EdenichnaTsena"]. 
    "<td>" . $row["BroiProdukti"];                          }
} else echo "0 results";
$conn->close();  ?>
</table> <p>
Legenda za vida klienta: 1 => avansovo zaplatil;  2 => predplatil 15% s akreditiv; 3 => poluchil na konsignacia (ne platil).<p>
Legenda za vida product: 1 => laptop;  2 => telefon; 3 => planshet.
<p> <a href="index.html#menu>"> Menu =>  </a>
</body> </html>