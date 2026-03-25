<?php

    function conexion(){

    $host = "host=dpg-d71v6pnkijhs73cu5af0-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=test_y18t";
    $user = "user=test_y18t_user";
    $password = "password=vSxIt5grv54Io5ok8fcMCrDHExML3dKd";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
}
?>