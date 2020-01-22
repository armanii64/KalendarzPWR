<?php
	session_start();
	$miesiac=$_SESSION['miesiac'];
	$rok = $_SESSION['currY'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "calendar";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn -> query("SET NAMES 'utf8'");
	
	//kasowanie
	
	$id = ''; 
	if( isset( $_GET['id']))
	{
    	$id = '"'.$_GET['id'].'"'; 
	} 
	$sql = "DELETE FROM events WHERE id=$id";
	if ($conn->query($sql) === TRUE)
	{
		header('Location: index.php?month='.$miesiac.'&year='.$rok);
		exit();
	} else {
   	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
?>