<?php

    function ilosc ($q,$sql){

        $server = "localhost";
        $user = "root";
        $password = "";
        $dbname = "www";

        $conn = new mysqli($server,$user,$password,$dbname);
        $result = $conn->query($sql);

        echo("<h1>Zadanie. $q</h1>");
        echo("<h4>$sql</h4>");
        echo("<table border=1>");
        echo("<th>Ilosc pracownikow</th>");
        echo("<th>Dzial</th>");

        while($row = $result->fetch_assoc()){
            echo("<tr>");
                echo("<td>".$row['count(imie)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        }
        echo("</table>");
    }

    function srednia ($q,$sql){

        $server = "localhost";
        $user = "root";
        $password = "";
        $dbname = "www";

        $conn = new mysqli($server,$user,$password,$dbname);
        $result = $conn->query($sql);

        echo("<h1>Zadanie. $q</h1>");
        echo("<h4>$sql</h4>");
        echo("<table border=1>");
        echo("<th>Srednia zarobkow</th>");
        echo("<th>Dzial</th>");

        while($row = $result->fetch_assoc()){
            echo("<tr>");
                echo("<td>".$row['avg(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        }
        echo("</table>");
    }

    function suma ($q,$sql){

        $server = "localhost";
        $user = "root";
        $password = "";
        $dbname = "www";

        $conn = new mysqli($server,$user,$password,$dbname);
        $result = $conn->query($sql);

        echo("<h1>Zadanie. $q</h1>");
        echo("<h4>$sql</h4>");
        echo("<table border=1>");
        echo("<th>Suma zarobkow</th>");
        echo("<th>Dzial</th>");

        while($row = $result->fetch_assoc()){
            echo("<tr>");
                echo("<td>".$row['sum(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        }
        echo("</table>");
    }

    ilosc (1,"SELECT count(imie),nazwa_dzial FROM pracownicy,organizacja WHERE dzial=id_org GROUP BY dzial");

    srednia (2,"SELECT avg(zarobki),nazwa_dzial FROM pracownicy,organizacja WHERE dzial=id_org AND imie LIKE '%a' GROUP BY dzial");
    srednia (3,"SELECT avg(zarobki),nazwa_dzial FROM pracownicy,organizacja WHERE dzial=id_org AND imie NOT LIKE '%a' GROUP BY dzial");

    suma (4,"SELECT sum(zarobki),nazwa_dzial FROM pracownicy,organizacja WHERE dzial=id_org GROUP BY dzial");
    suma (5,"SELECT sum(zarobki),nazwa_dzial FROM pracownicy,organizacja WHERE dzial=id_org AND imie LIKE '%a' GROUP BY dzial");
    suma (6,"SELECT sum(zarobki),nazwa_dzial FROM pracownicy,organizacja WHERE dzial=id_org AND imie NOT LIKE '%a' GROUP BY dzial");

?>