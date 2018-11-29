<?php
// use test
//CREATE TABLE users (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL
//);

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

// Permet ajouter un nouvel utilisateur en BDD
//    $pdo->exec("INSERT INTO users (firstname, lastname) VALUES ('jane', 'die')");
//    var_dump($pdo->lastInsertId());

// Permet de selectionner les valeurs en BDD
//    $stm = $pdo->query('SELECT * FROM users');
//    var_dump($stm);
// Permet de parcourir les lignes une par une
//    while ($user = $stm->fetch()) {
//        var_dump($user['firstname']);
//    }

//    $user = $stm->fetchObject();
//    var_dump($user->firstname);

// Permet de selection un utilisateur par son lastname
    $stm = $pdo->query('SELECT id FROM users WHERE lastname="die" LIMIT 1');
    $userDie = $stm->fetchObject();

    var_dump($userDie);
    $id = $userDie->id;
// Permet de mettre à jour le lastname par son id
    $pdo->exec("UPDATE users SET lastname = 'Doe' WHERE id = $id");

} catch (PDOException $e) {
//    var_dump($e->getMessage());
    var_dump("Vos identifiants de connexion à la base de données nes sont pas corrects.");
} finally {
    $pdo = null;
}

