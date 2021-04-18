<html> <head> <meta charset="utf-8">
<title> Пощенска банка  </title> </head> 
<body bgcolor=silver><h2>Пощенска банка</h2>
	<?php
	$nsum=$_POST['nsum'];
	if($nsum < 100)
	echo "Начална сума трябва да е по-голяма от 100 лева!";
	else
	{
		$per=$_POST['per'];
		if ($per !="3" && $per !="6") 
			echo "Периодът трябва да е 3 или 6 месеца!";
		else
		{
			switch ($per) 
			{
			case '3': if ($nsum <= 1000) $proz = 1.53;
					  elseif ($nsum <=3000) $proz = 2.22;
					  else $proz=3.15;
					  break;
			case '6': if ($nsum <= 1000) $proz = 2.54;
					  elseif ($nsum <=3000) $proz = 3.33;
					  else $proz=4.35;
			}
				$w = $nsum * $proz / 1200;
				$w = round($w,2);
				echo "<p> Лихва при начална сума " . $nsum . " лева";
				echo "<br> и период от " . $per . " месеца е " . $w . " лева."; 
		}
	} ?>

</body></html>