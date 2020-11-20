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


$imie = $_POST['imie'];
$dzial = $_POST['dzial'];
$zarobki = $_POST['zarobki'];
$data_urodzenia = $_POST['urodziny'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Pracownik (null, $_POST['name'], dzial, zarobki) 
       VALUES (null, 1, 2, 3, 4);

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
