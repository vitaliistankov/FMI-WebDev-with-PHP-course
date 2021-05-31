<html> <head> <meta charset="utf-8">
<title> Хотел "Рай"  </title> </head>
<body bgcolor="lightgray">
<h2> Хотел "Рай"  </h2> 
<h3>Заявка за нощувки</h3>
<?php
$ime=$_POST['ime'];
$email=$_POST['email'];
if (isset($_POST["R1"])) $fp=$_POST["R1"]; else $fp="в брой";
if (isset($_POST["C1"])) $din="да"; else $din = "не";
if (isset($_POST["C2"])) $spa="да"; else $spa = "не";
if (isset($_POST["C3"])) $exc="да"; else $exc = "не";
$n=$_POST["s1"];
$st=$_POST["s2"];
switch ($st) {
	case "1":$vid = "единична стая"; break;
	case "2":$vid = "стая с две легла"; break;
	case "3":$vid = "апартамент"; break;
	
}
?>
<table border="4" bordercolor = "black" sellspacing=0 cellpadding="9">
<caption> <big> <b> Заявени дани </b> </big> </caption>
<tr> <th> Име </th> <th><?php echo $ime; ?> </tr>
<tr> <th> E-mail </th> <th><?php echo $email ?> </tr>
<tr> <th> Форма на плащане </th><th><?php echo $fp; ?> </tr>
<tr> <th> Вечеря </th><th><?php echo $din; ?> </tr>
<tr> <th> СПА </th><th><?php echo $spa; ?></tr>
<tr> <th> Екскурзия </th><th><?php echo $exc; ?> </tr>
<tr> <th> Брой нощувки </th><th><?php echo $n; ?> </tr>
<tr> <th> Вид на стаята </th><th><?php echo $vid; ?> </tr>
</table>
<?php
switch ($n)
{
	case '3': $br=3; break;
	case '5': $br=5; break;
	case '7': $br=7; break;
	case '30': $br=30; break;	
}

switch ($st) 
{ 
	case '1': $z=100; break;
	case '2': $z=180; break;
	case '3': $z=250; break;
}

$s = $br * $z;
if ( $din == "да") $s += $br * 20;
if ( $spa == "да") $s += 40;
if ( $exc == "да") $s += 60;
echo "<p> <big> <b> Крайната цена е " . $s . " лева.";
?> </body> </html>


