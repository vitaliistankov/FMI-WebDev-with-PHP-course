<html> <head> <title> Sortirane </title> </head>
<body bgcolor=Lightblue>
<h2> Sortirane po izbrana kolona </h2>
<table border="4" bordercolor="black" cellpadding="15" cellspacing="0" bgcolor="lightgreen" width=50%>
<caption> <b> <big> Za sortirane kliknete v ime na kolona </big> </b> </caption>
<tr>
<th bgcolor="yellow"> <a href="sort.php?vid=Code"> Kod </a> </th>
<th bgcolor="lime"> <a href="sort.php?vid=Name"> Ime </a> </th>
<th bgcolor="silver"> <a href="sort.php?vid=Kind"> Vid </a> </th>
<th bgcolor="lightblue"> <a href="sort.php?vid=Sum"> Suma </a> </th>
</tr>

<?php
if( isset($_REQUEST['vid']) && $_REQUEST['vid'] != "")
   $vid = $_REQUEST['vid'];
else $vid="Code";
$vid=urlencode($vid);
echo "<a href='sort.php?vid=$vid'>";
include "config.php";
$sql="SELECT * FROM User ORDER BY " . $vid . " ASC";
$result=$conn->query($sql);
if ($result->num_rows <= 0)
    echo "0 results";
else
  {
?>
</tr>

<?php
while($row = $result->fetch_assoc())
{
?>
<tr>
<td align=center><?php echo $row["Code"] ?> </td>
<td><?php echo $row["Name"] ?></td>
<td><?php echo $row["Kind"] ?></td>
<td><?php echo $row["Sum"] ?></td>
</tr>

<?php
}
}
$conn->close();
?>
</table> <p>
<a href="index.htm#menu"> Menu =>> </a>
</body> </html>
