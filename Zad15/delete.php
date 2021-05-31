<html> <head> <title> Iztrivane </title> </head>
<body bgcolor=Lightblue>
<h3> Iztrivane na danni </h3>

<?php
include "config.php";
if(isset($_GET['del']))
{
  $sql="DELETE FROM User WHERE Code=" .(int)$_GET['del'];
  $result=$conn->query($sql);
}
$sql="SELECT * FROM User ORDER BY Name ASC";
$result=$conn->query($sql);
if ($result->num_rows <= 0)
    echo "0 results";
else
{
  $zag=array("Kod","Ime","Vid","Suma","<font color=red>Iztrivane</font>");
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
 <td> <?php echo $row["Code"]; ?> </td>
 <td> <?php echo $row["Name"]; ?> </td>
 <td> <?php echo $row["Kind"]; ?> </td>
 <td> <?php echo $row["Sum"]; ?> </td>
 <td align=center> <a href="delete.php?del=<?php echo $row['Code']; ?>"> Iztrij </a> </td>
 </tr>
 <?php
 }
 }
 $conn->close();
?>
</table>
<p> <a href="index.htm#Menu"> Menu =>> </a>
</body> </html>
