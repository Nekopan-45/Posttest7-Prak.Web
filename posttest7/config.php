<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "vtuber";

    $db = mysqli_connect($server, $username, $password, $db_name);
    
    if(!$db){
        die("Anda gagal");
    }
?>