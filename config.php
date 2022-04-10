<?php


    $db_name = 'dip5';
    $db_host = 'localhost:3306';
    $db_user = 'root';
    $db_password = '';
    try {
        ini_set('display_errors', 0);
        $pdo = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;
    } catch (PDOException $e) {
        header("Location:cadastro_failed.php");
    }


