<html> <head> <title> Tarsene </title> </head>
<body bgcolor=Lightblue>
<h2>Tarsene po vid </h2>

<?php
include "config.php";
$result=null;
if(isset($_POST['vid']))
  $sql="SELECT * FROM User WHERE Kind = " .(int)$_POST['vid']. " ORDER BY Kind ASC";
else
  $sql="SELECT * FROM User ORDER BY Kind ASC";
$result=$conn->query($sql);
if ($result->num_rows <= 0)
    echo "0 results";
else
{
  $zag=array("Kod","Ime","Vid","Suma");
?>

<table border="4" bordercolor="black" cellpadding="15" cellspacing="0" bgcolor="yellow">
<caption> <b> <big> Partneri ot izbran vid &nbsp; <?php echo $_POST['vid']; ?> </big></b></caption>
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
<td><?php echo $row["Kind"] ; ?></td>
<td><?php echo $row["Sum"] ; ?></td>
</tr>
<?php
}
}
?>
</table>
<?php
  $conn->close();
?> <p>
<a href="index.htm#Menu"> Menu=>> </a>
</body>  </html>
