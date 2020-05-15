<?php
?>

<html>
<head>
</head>
<?php 
	$wers = $_GET['id'];
?>
<body>

<center><font size="5">Koniec testu</font></center>
<br>

<?php
	$odpow1= $_POST['odp1'];
	$odpow2= $_POST['odp2'];
	$odpow3= $_POST['odp3'];
	$odpow4= $_POST['odp4'];
	$odpow5= $_POST['odp5'];
	$wynik = 0;

	if ($wers == 1){	
		if ($odpow1 == "B"){$wynik++;}
		if ($odpow2 == "B"){$wynik++;}
		if ($odpow3 == "A"){$wynik++;}
		if ($odpow4 == "B"){$wynik++;}
		if ($odpow5 == "C"){$wynik++;}
	}
	if ($wers == 2){
		if ($odpow1 == "C"){$wynik++;}
		if ($odpow2 == "A"){$wynik++;}
		if ($odpow3 == "A"){$wynik++;}
		if ($odpow4 == "A"){$wynik++;}
		if ($odpow5 == "B"){$wynik++;}
	}
	$proc = 100*$wynik/5;
	echo "<center><font size='5'>Twój wynik to <br> <font size='7'><B>$wynik/5 ($proc%)</B></font></center>";
	if($wynik == 5){echo "<center><font size='6'>Gratulacje!</font></center>";}
	if($wynik == 0){echo "<center><font size='4'>Słabiutko, poćwicz!</font></center>";}
	
?>

</body>
</html>