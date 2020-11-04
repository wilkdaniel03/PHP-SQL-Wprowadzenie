<?php

    $server = "sql2.freemysqlhosting.net";
    $user = "sql2374443";
    $password = "aK4!cF6%";
    $dbname = "sql2374443";

    $conn = @new mysqli($server, $user,$password,$dbname);

    if($conn->connect_errno){
        echo("Error ".$conn->connect_errno);
        exit();
    }

?>