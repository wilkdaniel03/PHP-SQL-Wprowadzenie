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

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$imie = $_POST['imie'];
$dzial = $_POST['dzial'];
$zarobki = $_POST['zarobki'];
$data_urodzenia = $_POST['urodziny'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Pracownik (null, $_POST['name'], dzial, zarobki) 
       VALUES (null, $imie, $dzial, $zarobki, $data_urodzenia);

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
