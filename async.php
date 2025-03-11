<?php
require_once("config.php");

// Récupérer les articles
$stmt = $pdo->query("SELECT * FROM Article");
$articles = $stmt->fetchAll();
?>

<?php
require_once("header.php");
?>

    <h1>Liste des utilisateurs</h1>
        <ul id="utilisateurs"></ul>

    <script src="async.js"></script>

<?php 
require_once("footer.php");
?>
