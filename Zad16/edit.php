<html> <head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<title> Promenjane </title> </head>
<body bgcolor=Lightblue>
<h3> Promenjane na danni </h3>
<?php
include "config.php";
if(isset($_GET['edit']) && $_GET['edit'])
{
$sql="SELECT * FROM User WHERE Code=" . (int)$_GET['edit'];
$result=$conn->query($sql);
$row=$result->fetch_assoc();
?>
<form method="post" action="edit.php">
<table cellpadding="8">
<tr>
<td> Kod: </td>
<td> <input type="hidden" size="6" name="Code"
value="<?php echo $row['Code']; ?>" /></td></tr>
<tr>
<td> Ime: </td>
<td><input type="text" size="32" name="Name"
value="<?php echo $row['Name']; ?>" /></td></tr>
<tr>
<td> VidKlient (1=avansovo zaplatil; 2=predplatil 15% s akreditiv; 3=poluchil na konsignacia (ne platil)): </td>
<td><input type="text" size="8" name="VidKlient"
value="<?php echo $row['VidKlient']; ?>" /></td></tr>
<tr>
<td> VidProduct (1=laptop; 2=telefon; 3=planshet): </td>
<td><input type="text" size="8" name="VidProduct"
value="<?php echo $row['VidProduct']; ?>" /></td></tr>
<tr>
<td> EdenichnaTsena </td>
<td><input type="text" size="8" name="EdenichnaTsena"
value="<?php echo $row['EdenichnaTsena']; ?>" /></td></tr>
<tr>
<td> BroiProdukti </td>
<td><input type="text" size="8" name="BroiProdukti"
value="<?php echo $row['BroiProdukti']; ?>" /></td></tr>
</table><p>
<input type="submit" name="submit" value="Promeni">
</form>
<?php
} else {
if(isset($_POST['submit']))
{
  $sql="UPDATE User SET 
  Name=' " . $_POST['Name'] . " ',
  VidKlient=" .(int) $_POST['VidKlient'] . ", 
  VidProduct=" .(int) $_POST['VidProduct'] . ", 
  EdenichnaTsena=" .(int) $_POST['EdenichnaTsena'] . ",
  BroiProdukti=" .(int) $_POST['BroiProdukti'] . "
  WHERE Code=" . (int) $_POST['Code'];
  $result=$conn->query($sql);
}
  $result=$conn->query("SELECT * FROM User ORDER BY Name ASC");
  
if ($result->num_rows <= 0)
    echo "0 results";
  else
  {
    $zag=array("Kod","Ime","VidKlient","VidProduct","EdenichnaTsena", "BroiProdukti", "Promjana");
  ?>
  <table border="4" bordercolor="black" cellpadding="15" cellspacing="0" bgcolor="yellow">
  <tr>
  <?php
    foreach($zag as $v) echo "<th bgcolor='lime'>" .$v. "</th>";
  ?>
  </tr>
<?php
 while($row = $result->fetch_assoc())
    {
 ?>
 <tr bgcolor=yellow>;
 <td> <?php echo $row["Code"] ?> </td>
 <td> <?php echo $row["Name"] ?> </td>
 <td> <?php echo $row["VidKlient"] ?> </td>
 <td> <?php echo $row["VidProduct"] ?> </td>
 <td> <?php echo $row["EdenichnaTsena"] ?> </td>
 <td> <?php echo $row["BroiProdukti"] ?> </td>
 <td align=center> <a href="edit.php?edit=<?php echo $row['Code']; ?>"> Promeni </a> </td>
 </tr>
 <?php
 }
 }
 }
?>
</table>
<?php   $conn->close();  ?>
<p> <a href="index.html#menu"> Menu => </a>
</body> </html>
  <!-- <a href="index.html#menu>"> Menu => -->