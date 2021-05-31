<html>
<head>
<meta charset="utf-8">
<title> Лихва </title>
</head>
<body bgcolor=lightgray>
	<?php
	if (isset($_POST['S'])) 
	{
		$ns = $_POST['ns'];
		$ks = $_POST['ks'];
		$gl = $_POST['gl'];
	?>
	<table border="4" bordercolor="black" cellspasing="0" cellpadding="13" width="22%">
				<caption><b> <big> Зададените дани са </big></b></caption>
				<tr> <td> Начална сума </td> <td> <?php echo $ns; ?> </tr>
					<tr> <td> Крайна сума </td> <td> <?php echo $ks; ?>  </tr>
						<tr> <td> Годишна лихва в % </td> <td> <?php echo $gl; ?> </tr>
						</table><p>
							<?php 
								$mes = 0; $ml = $gl / (12 * 100);
								do 
								{
									$mes++;
									$ns += $ns * $ml;
								} while ( $ns < $ks );
							if ($mes < 12) {
									echo "<p> Необходими са " . $mes . " месеца. ";
							else 
								{
									$god = $mes / 12 ; $god = floor ($god);
									$m = $mes % 12;
									echo "<p> Необходими са " . $god . " години и " . $m .  " месеца."; 
								}	
								$lv = round ($ns, 2);
								echo "<p> Достигната сума е " $lv . " лева.";		
								}
							?> 

							</body>
							</html>
	
