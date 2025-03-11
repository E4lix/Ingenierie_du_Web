<?php
require_once("config.php");

// Récupérer les articles
$stmt = $pdo->query("SELECT * FROM Article");
$articles = $stmt->fetchAll();
?>

<?php
require_once("header.php");
?>

    <h2>Utilisateurs chargés (Asynchrone) :</h2>
    <ul id="utilisateurs"></ul>

    <h2>Logs d'exécution :</h2>
    <div id="output"></div>

    <script src="async.js"></script>

<?php 
require_once("footer.php");
?>
