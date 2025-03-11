<?php
require_once("config.php");

// Récupérer les articles
$stmt = $pdo->query("SELECT * FROM Article");
$articles = $stmt->fetchAll();
?>

<?php
require_once("header.php");
?>
<head>
    <style>
        /* Tableau */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
            color: #333;
        }

        /* En-têtes du tableau */
        th {
            background-color:rgb(43, 43, 43);
            color: white;
        }

        /* Lignes du tableau */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Articles</h1>
    <table border="1">
        <tr>
            <th>NumArt</th>
            <th>Description</th>
            <th>PrixUnit</th>
            <th>Catégorie</th>
        </tr>
        <?php foreach ($articles as $article): ?>
        <tr>
            <td><?= $article['NumArt'] ?></td>
            <td><?= $article['Desc'] ?></td>
            <td><?= $article['PrixUnit'] ?> €</td>
            <td><?= $article['Categorie'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

<?php 
require_once("footer.php");
?>

