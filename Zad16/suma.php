<html> <head> <title> Suma </title> </head>
<body bgcolor=Lightblue>
<h2>Tarsene po Suma </h2>
<?php
include "config.php";
$result=null;
if(isset($_POST['max']))
  $sql="SELECT * FROM User WHERE NOT VidKlient = 3 AND EdenichnaTsena * BroiProdukti > " .(float)$_POST['max']. " ORDER BY BroiProdukti ASC";
$result=$conn->query($sql);
if ($result->num_rows <= 0)
    echo "0 results";
else
{
  $zag=array("Kod","Ime","VidKlient","VidProduct","EdenichnaTsena", "BroiProdukti");
?>

<table border="4" bordercolor="black" cellpadding="15" cellspacing="0" bgcolor="yellow"  width=50%>
<caption> <b> <big> Klienti, zaplatili nad <?php echo $_POST['max']; ?> leva: </big></b></caption>
<tr>
<?php
foreach($zag as $v) echo "<th bgcolor='lime'>" .$v. "</th>";
?>
</tr>

<?php
while($row = $result->fetch_assoc())
{ ?>
<tr>
<td><?php echo $row["Code"] ; ?></td>
<td><?php echo $row["Name"] ; ?></td>
<td><?php echo $row["VidKlient"] ; ?></td>
<td><?php echo $row["VidProduct"] ; ?></td>
<td><?php echo $row["EdenichnaTsena"] ; ?></td>
<td><?php echo $row["BroiProdukti"] ; ?></td>
</tr>
<?php
}
}
?>
</table> <p>
<?php  $conn->close();  ?> 
Legenda za vida klienta: 1 => avansovo zaplatil;  2 => predplatil 15% s akreditiv; 3 => poluchil na konsignacia (ne platil).<p>
Legenda za vida product: 1 => laptop;  2 => telefon; 3 => planshet. <p>
<a href="index.html#menu"> menu=> </a>
</body>  </html>
