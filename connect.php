<?php

    $server = "mysql-wilkdaniel03.alwaysdata.net";
    $user = "217185";
    $passoword = "Jarowilk9jw";
    $dbname = "wilkdaniel03_www";

    $conn = new mysqli($server, $user, $passoword, $dbname);

    if($conn->connect_errno){
        echo("Connection failed: ".$conn->connect_errno);
    }

?>