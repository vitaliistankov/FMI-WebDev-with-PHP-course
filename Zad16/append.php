<html>  <head>  <title> Append </title>  </head>
<body bgcolor=Lightblue>  <h3> Append </h3>

<?php
include "config.php";
if(isset($_POST['submit']))
{
  $sql= "INSERT INTO User (Code,Name,VidKlient,VidProduct,EdenichnaTsena, BroiProdukti) VALUES (" .
  (int)$_POST["Code"] . ",'" .
  $_POST["Name"] . "'," .
  (int)$_POST["VidKlient"] . "," .
  (int)$_POST["VidProduct"] . "," .
  (int)$_POST["EdenichnaTsena"] . "," .
  (int)$_POST["BroiProdukti"] . ")";
  $result=$conn->query($sql);
  if($result===TRUE) 
    echo "<font color='green'><b>Zapisat  e  dobaven    uspeshno!</b></font>";
    else  echo "<font color='red'><b>Zapisat  ne  e  dobaven  uspeshno!</b></font>";
}
?>
<!-- <form name = "f1" method="post">
  Vid na klienta:
    <input type="radio" name="user" value="1" checked="checked"> avans &nbsp;
    <input type="radio" name="user" value="2"> predplata &nbsp;
    <input type="radio" name="user" value="3"> konsignacia <br>
    <input type="submit" name="submit2" value="Izberete">
    <?php
		    if(isset($_POST['user']))
		       $help = $_POST['user'];
		       else $help="1";
    ?>
    </form> <p> -->
    <form name="f2" method="post">
	 Kod: <input type="text" size="6" name="Code"
	            value="<?php
$sql='select Code from User ORDER BY Code DESC';
$result=$conn->query($sql);

$res=$result->fetch_assoc();
echo $res['Code']+1;
?>" />

<!-- Общ брой продукти -->


<p>Ime: <input type="text" size="32" name="Name">
<p>Vid Klient: <input type="text" size="32" name="VidKlient">
<p>Vid Product: <input type="text" size="32" name="VidProduct">
<p>Edenichna Tsena: <input type="text" size="32" name="EdenichnaTsena">
<p>Broi producti: <input type="text" size="32" name="BroiProdukti">
	<p>
<input type="submit" name="submit" value="Dobavjane">
</form>
<?php
$conn->close();
?>
<p> <a href="index.html#menu"> menu => </a>
</body>  </html>
