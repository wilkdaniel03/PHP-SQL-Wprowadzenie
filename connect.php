<?php

    $server = "mysql-wilkdaniel03.alwaysdata.net";
    $user = "218403";
    $password = "fajnabaza123";
    $dbname = "wilkdaniel03_www";

    $conn = @new mysqli($server, $user,$password,$dbname);

    if($conn->connect_errno){
        echo("Error ".$conn->connect_errno);
        exit();
    }

?>
