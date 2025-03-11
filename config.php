<?php

// Configuration de la base de données
$host = 'localhost'; // Adresse du serveur MariaDB
$dbname = 'TestDB'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur MariaDB
$password = ''; // Mot de passe MariaDB

try {
    // Connexion à la base de données avec PDO pour MariaDB
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// var_dump($pdo);

?>
