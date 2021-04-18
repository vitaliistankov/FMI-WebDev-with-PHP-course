<html>
<head>
<meta charset="utf-8">
<title> Доставка </title>
</head>
<body bgcolor=silver>

<?php

$name1=$_POST['name1'];
$n=$_POST['n'];
$m=$_POST['m'];
$name2=$_POST['name2'];
$email=$_POST['e-mail'];
?>

<table border="4" bordercolor = "black" cellspacing="0" cellpadding="9">
	<caption> <big> <b> Начални дани </b> </big> </caption>
	<tr> <th> Име на продукта <th> <?php echo $name1; ?> </th>
		<tr> <th> Наличен брой материали <th> <?php echo $n; ?> </th>
			<tr> <th> Минимален брой материали <th> <?php echo $m; ?> </th>
				<tr> <th> Името на доставчик <th> <?php echo $name2; ?> </th>
					<tr> <th>  Email на доставчик  <th> <?php echo $email; ?> </th>
					</table> <p>
						<?php 
						if( $n < $m) 
						{
							$k = $m - $n;
							echo "Заявка за доставка на материали за" . $name1 . "до <p>";
							echo"<form>";
							echo "Имне на доставчика: <input type='text' name='" . $name2 . "' value = '" . $name2 . "'> <p>";
								echo "E-mail на доставчика: <input type='text' name='" . $email . "' value = '" . $email . "'> <p>";
									echo "Име на материала: <input type='text' name='" . $name1 . "' value = '" . $name1 . "'> <p>";
										echo "Брой за доставка: <input type='text' name='count' value = '" . $k . "'> <p>";

							echo "</form>"; 	
					}
					else echo "Нфма нужда от доставка";
					?>
