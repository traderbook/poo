<?php

$host = '172.17.0.2'; // 'localhost'
$port = 3306;
$database = 'test';
$login = 'bibi'; // 'root';
$password = 'password'; // '';

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$database",
        $login,
        $password
    );
} catch (PDOException $e) {
//    var_dump($e->getMessage());
    var_dump("Vos identifiants de connexion à la base de données nes sont pas corrects.");
}


var_dump($pdo);