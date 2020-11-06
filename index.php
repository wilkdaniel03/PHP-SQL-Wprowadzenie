<html>
<head>
    <title>Daniel Wilk 2Ti</title>
    <link rel=stylesheet href="style.css">
    <meta charset="utf-8">
</head>
<body>
    <strong><a href="https://github.com/wilkdaniel03/PHP-SQL-Wprowadzenie">Link do mojego githuba</a></strong>
    <div class="nav">
        <a class="nav-link" href="pracownicy.php">Pracownicy - wstęp</a>
        <a class="nav-link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    </div>
</body>
</html>
<?php

    function wszystko($nr,$sql){
        require("connect.php");

        echo("<b><br/><br/>Tabelka nr ".$nr."</b>");
        echo("<b><br/><br/>".$sql."</b>");
        $result = $conn->query($sql);

        echo("<br/><br/><table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        while($row = $result->fetch_assoc()){
            echo("<tr>");
                echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td");
            echo("</tr>");
        }
        echo("</table>");
    }

    function srednia($nr,$sql){
        require("connect.php");

        echo("<b><br/>Tabelka nr ".$nr."</b>");
        echo("<b><br/><br/>".$sql."</b>");
        $result = $conn->query($sql);

        echo("<br/><br/><table border=1>");
        echo("<th>Dzial</th>");
        echo("<th>Srednia zarobkow</th>");
        while($row = $result->fetch_assoc()){
            echo("<tr>");
                echo("<td>".$row['dzial']."</td><td>".$row['avg(zarobki)']."</td>");
            echo("</tr>");
        }
        echo("</table>");
    }

    function suma($nr,$sql){
        require("connect.php");

        echo("<b><br/>Tabelka nr ".$nr."</b>");
        echo("<b><br/><br/>".$sql."</b>");
        $result = $conn->query($sql);

        echo("<br/><br/><table border=1>");
        echo("<th>Dzial</th>");
        echo("<th>Suma zarobkow</th>");
        while($row = $result->fetch_assoc()){
            echo("<tr>");
                echo("<td>".$row['dzial']."</td><td>".$row['sum(zarobki)']."</td>");
            echo("</tr>");
        }
        echo("</table>");
    }

    wszystko(1,"SELECT * FROM pracownicy");
    wszystko(2,"SELECT * FROM pracownicy WHERE imie like '%a'");

    srednia(3,"SELECT avg(zarobki),dzial FROM pracownicy GROUP BY dzial");
    srednia(4,"SELECT avg(zarobki),dzial FROM pracownicy WHERE imie NOT LIKE '%a' GROUP BY dzial");
    srednia(5,"SELECT avg(zarobki),dzial FROM pracownicy WHERE zarobki < 35 GROUP BY dzial");

    suma(6,"SELECT sum(zarobki),dzial FROM pracownicy GROUP BY dzial");
    suma(7,"SELECT sum(zarobki),dzial FROM pracownicy WHERE imie LIKE '%a' GROUP BY dzial");
    suma(8,"SELECT sum(zarobki),dzial FROM pracownicy WHERE zarobki > 40 GROUP BY dzial");

?>
