<?php
	session_start();
?>

<html>
<head>   
<link href="calendar.css" type="text/css" rel="stylesheet" />
<title>Kalendarz jakotako</title>
</head>
<body>

<br><br>
<h1>Oto wydarzenia na wybrany miesiąc:</h1>

<?php
	include 'calendar.php';
	$calendar = new Calendar();
	echo $calendar->show();
	$_SESSION['currY']=$calendar->_getYear();
	$_SESSION['miesiac']=$calendar->_getMonth();
?>


<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "calendar";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn -> query("SET NAMES 'utf8'");
	if ($conn -> connect_error) { die("Nie połączono z bazą danych: " . $conn -> connect_error);}
	if(isset($_GET['month']))
	{
		$mies=$_GET['month'];
		$sql = "SELECT id, dzien, miesiac, rok, godzina, tytul, opis FROM events WHERE miesiac=$mies ORDER BY dzien, godzina";
		$result = $conn -> query($sql);
		if ($result -> num_rows > 0)
		{
	 		while($row = $result -> fetch_assoc())
	 		{	
	 			echo '<div class=event1>';
	       		echo ' <b>'.$row["tytul"].'</b><br>Data: '.$row['dzien'].'.'.$row['miesiac'].'.'.$row['rok'].' godz. '.mb_substr($row['godzina'], 0, 5).'<br>Opis: '.$row['opis'].'<br><br><a class="button" href="delete.php?id='.$row['id'].'">Usuń wydarzenie</a></div>';
			}
		} else { echo "<h4>Nie masz zaplanowanych wydarzeń na ten miesiąc</h4>"; }

	}
	
?>
<br><br><br><br><br><br>
	<div id="exportBtn">
		     <input type="submit" name="export" value="Export" />
	</div>

</body>
</html>     


