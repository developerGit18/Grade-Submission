<?php
    $DB_host = "localhost";
    $DB_user = "root";
    $DB_pass = "";
    $DB_name = "vvsudb";

    try{
        $DB_con = new PDO("mysql:host=".$DB_host.";charset=utf8;dbname=".$DB_name,$DB_user, $DB_pass);
        $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    session_start();
?>