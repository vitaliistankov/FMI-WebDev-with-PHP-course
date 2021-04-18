<html>
<head>
<meta charset="utf-8">
<title> Средна скорост </title>
</head>
<body bgcolor=silver>
<h2> Средна скорост </h2>
<?php

$s=$_POST['s'];
$h1=$_POST['h1'];
$m1=$_POST['m1'];
$h2=$_POST['h2'];
$m2=$_POST['m2'];

if ($m2 < $m1) {
	$m2 += 60; $h2 --;
}

$m = $m2 - $m1;

$m /=60;
$t = $h2 - $h1;
$t += $m;
$v = $s / $t;
$v = round($v, 3);
echo "средната скорост е " . $v . " км/час.";

?> 
<</body> </html>
