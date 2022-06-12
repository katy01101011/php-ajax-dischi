<?php
    $genre = $_GET["genre"];
    include_once __DIR__ . "/database.php";
    $database_json = json_encode($database);
    header("Content-Type: application/json");
    echo $database_json;
