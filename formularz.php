<?php

echo("jestes na formularz.php");
echo("</br>");
echo("<h3>Imie</h3>");
echo($_POST["imie"]);
echo("</br>");
echo("<h3>Dzial</h3>");
echo($_POST["dzial"]);
echo("</br>");
echo("<h3>Zarobki</h3>");
echo($_POST["zarobki"]);
echo("</br>");
echo("<h3>Data urodzenia</h3>");
echo($_POST["urodziny"]);
echo("</br>");

$server = "mysql-wilkdaniel03.alwaysdata.net";
$user = "218403";
$password = "fajnabaza123";
$dbname = "wilkdaniel03_www";

$conn = new mysqli($server, $user, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "INSERT INTO Pracownik (null, name, dzial,zarobki,data_urodzenia)
	      VALUES (
					null, 
					$_POST['name'], 
					$_POST['dzial'], 
					$_POST['zarobki'],
					$_POST['data_urodzenia']
				";

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
?>
