<?php

    $server = "mysql-wilkdaniel03.alwaysdata.net";
    $user = "217185";
    $passoword = "Jarowilk9jw";
    $dbname = "wilkdaniel03_www";

    $conn = new mysqli($server, $user, $passoword, $dbname);

    if($conn->connect_errno){
        echo("Connection failed: ".$conn->connect_errno);
    }

    $sql = "SELECT * FROM pracownicy";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo("$sql");
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        while($row = $result->fetch_assoc()){
            echo("<tr>");
                echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
            echo("</tr>");
        }
        echo("</table");
    }

?>