<html> <head> <meta charset="utf-8">
<title> АЛЕКСАНДРА ТУР ПЛОВДИВ </title> </head>
<body bgcolor="lightgray">
<h2> АЛЕКСАНДРА ТУР ПЛОВДИВ </h2> 
<h3>ЗАЯВКА ЗА КРУИЗ</h3>
<?php
$ime=$_POST['ime'];
$tel=$_POST['tel'];
if (isset($POST["R1"])) $vk=$POST["R1"]; else $vk="вътрешна";
if (isset($_POST["C1"])) $drinks="да"; else $drinks = "не";
if (isset($_POST["C2"])) $com="да"; else $com = "не";
if (isset($_POST["C3"])) $bre="да"; else $bre = "не";

$n=$_POST["R1"]
switch ($vk) {
	case '1': $z=50; break;
	case '2': $z=70; break;
	case '3': $z=100; break;
	case '4': $z=150; break;

}



//$p=$_POST["s2"];
/*switch ($p) {
	case '1':$vk = "вътрешна"; break;
	case '2':$vk = "с прозорец"; break;
	case '3':$vk = "c балкон"; break;
	case '4':$vk = "апартамент"; break;
	
}*/
?>
<table border="4" bordercolor = "black" sellspacing=0 cellpadding="9">
<caption> <big> <b> Заявени дани </b> </big> </caption>
<tr> <th> Име </th> <th><?php echo $ime; ?> </tr>
<tr> <th> Телефон </th> <th><?php echo $tel ?> </tr>
<tr> <th> Вид каюта </th><th><?php echo $vk; ?> </tr>
<tr> <th> Пакет напитки </th><th><?php echo $drinks; ?> </tr>
<tr> <th> Комуникации </th><th><?php echo $com; ?> </tr>
<tr> <th> Закуска в каютата </th><th><?php echo $bre; ?> </tr>
<tr> <th> Продолжителност </th><th><?php echo $p; ?> </tr>
</table>
<?php
$p=$_POST["s1"];
switch ($p)
{
	case '5':$br = 5; break;
	case '7':$br = 7; break;
	case '11':$br = 11; break;
	
}



$s = $br * $z;
if ( $drinks == "да") $s += $z + 100;
if ($com == "да") $s += $z + 50;
if ($bre == "да") $s += $z + 30;
echo "<p> <big> <b> Крайната цена е " . $s . " евро.";
?> </body> </html>

