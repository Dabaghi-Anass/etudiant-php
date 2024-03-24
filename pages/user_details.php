<?php
    $etudiantId = $_GET['codeE'];
    include("../db/data.php");
    $filieres = getFilieres();
    $etudiant =getEtudiantByCode($etudiantId);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Etudiants</title>
    <link rel="icon" href="../assets/icon.png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/etudiant.css">
    <script src="../scripts/etudiant.js" defer></script>
    <script src="../scripts/script.js" defer></script>

</head>
<body>
    <?php include("../components/header.php") ?>
    <div style="padding-inline : var(--inline-padding)">
    <hr class="rule">
    <ul class="links">
        <li><a class="link" href="../index.php">acceuil</a></li>
        <li><a class="link" href="ajouter.php">Ajouter un etudiant</a></li>
    </ul>
    <hr class="rule">
    </div>

    <main class="home-content">
        <h1 class="heading-big">details d'etudiant: <?= $etudiant['code'] ?></h1>
        <hr class="rule">
        <?php
            if(empty($etudiant)) echo "<h1 class='empty-list'>aucun etudiant n'est trouvé</h1>";
        ?>
        <div class="etudiant-details">
            <h3><strong>Nom:</strong> <?= $etudiant['nom']; ?></h3>
            <h3><strong>Prenom:</strong> <?= $etudiant['prenom']; ?></h3>
            <h3><strong>Note:</strong> <?= $etudiant['note']; ?></h3>
            <h3><strong>Filiere:</strong> <?= $etudiant['filliere']; ?></h3>
        </div>
        <div class="liens">
            <a href="javascript:history.go(-1)" class="back-link">retour</a>
            <a href="modifier.php?codeE=<?=$etudiant["code"]?>" class="back-link">modifier</a>
            <a href="supprimer.php?codeE=<?=$etudiant["code"]?>" class="back-link">supprimer</a>
        </div>
        <?php include("../components/footer.php") ?>
    </main>
</body>
</html>