<?php
require_once("header.php");
?>

<?php
require_once("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $desc = $_POST['Desc'];
    $prixUnit = $_POST['PrixUnit'];
    $categorie = $_POST['Categorie'];

    // Préparer et exécuter la requête d'insertion
    $stmt = $pdo->prepare("INSERT INTO Article (`Desc`, PrixUnit, Categorie) VALUES (:desc, :prixUnit, :categorie)");
    $stmt->execute([
        ':desc' => $desc,
        ':prixUnit' => $prixUnit,
        ':categorie' => $categorie
    ]);

    // Confirmation de l'ajout
    echo "Article ajouté avec succès !";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Article</title>
</head>
<body>
    <h1>Ajouter un Article</h1>

    <form action="" method="POST">
        <label for="Desc">Description :</label>
        <input type="text" id="Desc" name="Desc" required><br><br>

        <label for="PrixUnit">Prix Unitaire :</label>
        <input type="number" id="PrixUnit" name="PrixUnit" step="0.01" required><br><br>

        <label for="Categorie">Catégorie :</label>
        <input type="text" id="Categorie" name="Categorie" required><br><br>

        <button type="submit">Ajouter l'Article</button>
    </form>

<?php
require_once("footer.php");
?>
