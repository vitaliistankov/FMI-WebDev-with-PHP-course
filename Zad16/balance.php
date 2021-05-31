<html> <head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<title> Balance </title> </head>
<body bgcolor=lightgreen>
<h3> Balans </h3>
<table border=4 bordercolor=black cellspacing=0 cellpadding=15 width=50%>
<caption><big><b> Balans </b></big></caption>
<tr bgcolor=cyan> <th> Kod <th> Ime
<th> VidKlient <th> VidProduct <th> EdenichnaTsena <th> BroiProdukti </tr> 

<?php
include "config.php";
$sum=0;
$avansPaySum=0;
$sobranaSum=0;
$prepaySum=0;
$ochakvSum=0;

$sql="SELECT * FROM User";
$result=$conn->query($sql);
if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    echo "<tr bgcolor=yellow>\n";
    echo "<td>". $row["Code"].
    "<td>" . $row["Name"].
    "<td>" . $row["VidKlient"].
    "<td>" . $row["VidProduct"].
    "<td>" . $row["EdenichnaTsena"].
    "<td>" . $row["BroiProdukti"];
    /*"<td>" . $row["Sobrana suma"].
    "<td>" . $row["Suma ot predplata"].
    "<td>" . $row["Ochakvana suma"];*/
    $sum+=$row["BroiProdukti"] * $row["EdenichnaTsena"];
    if($row["VidKlient"]==1)
	  $avansPaySum+=$row["BroiProdukti"] * $row["EdenichnaTsena"];
    if($row["VidKlient"]==2)
    $prepaySum+=$row["EdenichnaTsena"] * 0.15 * $row["BroiProdukti"];

    $sobranaSum = $prepaySum+$avansPaySum;
    $ochakvSum=$sum-$sobranaSum;
    
    /*$sobranaSum+=$row["BroiProdukti"] * $row["EdenichnaTsena"];*/

	/*else $s-=$row["Suma produkti"];*/
	echo "</tr>\n";
  }
} else echo "0 results";
$conn->close();

$sum=round($sum,2);
echo "<tr bgcolor=yellow>";
echo "<th colspan=5> Suma ot obsh broi prod:";
echo "<th colspan=5>" . $sum . "</tr>\n";

$sobranaSum=round($sobranaSum,2);
echo "<tr bgcolor=yellow>";
echo "<th colspan=5> Sobrana suma:";
echo "<th colspan=5>" . $sobranaSum . "</tr>\n";

$ochakvSum=round($ochakvSum,2);
echo "<tr bgcolor=yellow>";
echo "<th colspan=5> Ochakvana suma:";
echo "<th colspan=5>" . $ochakvSum . "</tr>\n";

$prepaySum=round($prepaySum,2);
echo "<tr bgcolor=yellow>";
echo "<th colspan=5> Predoplata:";
echo "<th colspan=5>" . $prepaySum . "</tr>\n";

?>
</table>  <p>
Legenda za vida klienta: 1 => avansovo zaplatil;  2 => predplatil 15% s akreditiv; 3 => poluchil na konsignacia (ne platil).<p>
Legenda za vida product: 1 => laptop;  2 => telefon; 3 => planshet. 
<p> <a href="index.html#menu>"> menu =>  </a>
</body> </html>

