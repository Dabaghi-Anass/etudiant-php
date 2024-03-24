<?php
    $etudiant = [
        "code" => $_POST["code"],
        "nom" => $_POST["nom"],
        "prenom" => $_POST["prenom"],
        "note" => $_POST["note"],
        "filliere" => $_POST["filliere"],
        "password" => $_POST["password"],
        "sexe" => $_POST["sexe"],
        "commentaire" => $_POST["commentaire"],
        "semestres" => $_POST["semestres"]
    ];
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
    <style>
        .infos{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            gap: 1rem;
        }
        .links{
            margin-block: 1rem;
        }
        p{
            font-size: 1.1rem;
        }
    </style>
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
        <main class="home-content">
            <div class="infos">
                <h1>bonjour <?= $etudiant["nom"] . " " . $etudiant["prenom"] ?></h1>
            <h3>vous etes inscrit avec succes</h3>
            <h3>code: <?= $etudiant["code"] ?></h3>
            <h3>note: <?= $etudiant["note"] ?></h3>
            <h3>filliere: <?= $etudiant["filliere"] ?></h3>
            <h3>sexe: <?= $etudiant["sexe"] ?></h3>
            <h3>semestres: <?= implode(" , " , $etudiant["semestres"]) ?></h3>
            <h3>mot de passe: <?= $etudiant["password"] ?></h3>
            <h3>commentaire</h3>
            <p><?= $etudiant["commentaire"] ?? "N/A"?></p>
            </div>
            <div class="infos envs">
                <!-- server envirenment variables -->
                <h1>server envirenment variables</h1>
                <h3>HTTP_HOST: <?= $_SERVER["HTTP_HOST"] ?></h3>
                <h3>SERVER_NAME: <?= $_SERVER["SERVER_NAME"] ?></h3>
                <h3>Navigateur <?= $_SERVER["HTTP_USER_AGENT"] ?></h3>
                <h3>vous etes dans: <?= $_SERVER["HTTP_REFERER"] ?></h3>
                <h3>PHP_SELF: <?= $_SERVER["PHP_SELF"] ?></h3>
                <h3>SERVER_PORT: <?= $_SERVER["SERVER_PORT"] ?></h3>
                <h3>a la ligne: <?= __LINE__?></h3>
                <h3>a la repertoire: <?= __DIR__?></h3>
                <h3>os: <?= PHP_OS ?></h3>
                <h3>version php: <?= PHP_VERSION ?></h3>
            </div>
            <hr class="rule">
            <div class="links">
                <a href="javascript:history.go(-1)">revenir au formule</a>
            <a href="/">revenir a l'acceuil </a>
            </div>
            <hr class="rule">
            <div class="links">
                <a href="filieres.php">listes des filliere</a>
            <a href="etudiants.php">listes des etudiants</a>
            <a href="ajouter.php">ajouter un etudiant</a>
            </div>
            <hr class="rule">
        </main>
    </div>
    <?php include("../components/footer.php") ?>
</body>
</html>