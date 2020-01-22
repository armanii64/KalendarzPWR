<?php
	session_start();
?>

<html>
<head>   
</head>
<body>

<div id="addEvent">

	<?php
		$rok1 = $_SESSION['currY'];
		$day=$_GET['day']-1;
		$month=$_GET['month'];
		$_SESSION['dzien']=$day;
		$_SESSION['miesiac']=$month;
		echo '<h2><b>Zaplanuj wydarzenie dla daty '.$day.'.'.$month.'.'.$rok1.':</b></h2><br><br>';
	?>




	<form method="post" action="adding.php">
		Ustal godzinę: <input type="time" name="godzina"><br><br>
		Wpisz nazwę wydarzenia: <input type="text" name="tytul"><br><br>
		Opisz wydarzenia: <input type="text" name="opis"><br><br>
		<input type="checkbox" name="rekurencja" value="1" > Cotygodniowe<br><br>
		<input  class="back" type="submit" name="submit" value="Dodaj wydarzenie"><br><br>

	</form>

	<br><br>
	
	<?php 
		echo '<a class="back" href="index.php?month='.$month.'">Powrót do kalendarza</a>';
	?>


</div>



</body>
</html>     