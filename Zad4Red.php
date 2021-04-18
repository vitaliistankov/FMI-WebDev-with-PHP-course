<html>
<head>
<meta charset="utf-8">
<title> Амортизация </title>
</head>
<body bgcolor=silver>
<h2> Амортизация </h2>
<?php

$name=$_POST['name'];
$value=$_POST['value'];
$year=$_POST['year'];
$percent=$_POST['percent'];
$tyear=date("Y");
$dif = $tyear - $year;


if ($dif >= 5) {
	$avalue = $value - $value * $percent / 100 ;
} else {
	$avalue = $value;
}

$value = round($avalue, 2)

?> 
<table border="4" bordercolor="black" cellspacing="0" cellpadding="9" width="50%">
	<caption> <big><b> Амортизация</b></big></caption>
	<tr> <th> Името на средството <th> <?php echo $name; ?> </th>
		<tr> <th> Стойност при закупуване <th> <?php echo $value; ?> </th>
			<tr> <th> Година на закупуване <th> <?php echo $year; ?> </th>
				<tr> <th> % за амортизация <th> <?php echo $percent; ?> </th>
					<tr> <th>  Стойност след проверка за амортизация <th> <?php echo $avalue; ?> </th>

</table>

?> 
<</body> </html>
