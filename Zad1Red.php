<html>
<head>
<meta charset="utf-8">
<title> ДДС </title>
</head>
<body bgcolor=silver>
<h2> Стока </h2>
<?php

$ime=$_POST['ime'];
$kol=$_POST['kol'];
$suma=$_POST['suma'];
$proz=$_POST['proz'];
$ez = $suma / ( $kol * ( 1 + $proz/100) );
$ez = round($ez,2);
//echo "Ед. цена без ДДС е " . $ez;

?> 
<table border="4" bordercolor="black" cellspacing="0" cellpadding="9" width="50%">
	<caption> <big><b> Изчисляване на еденична цена без ДДС</b></big></caption>
	<tr> <th> Име на стоката <th> <?php echo $ime; ?> </th>
		<tr> <th> Количество <th> <?php echo $kol; ?> </th>
			<tr> <th> Обща сума с ДДС <th> <?php echo $suma; ?> </th>
				<tr> <th> ДДС в % <th> <?php echo $proz; ?> </th>
					<tr> <th> Единична цена без ДДС в % <th> <?php echo $ez; ?> </th>

</table> </body> </html>
