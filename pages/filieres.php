<?php include("../db/data.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filieres</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="../assets/icon.png">
    <script src="../scripts/script.js" defer></script>
</head>
<body>
    
    <?php include("../components/header.php") ?>
    <main class="home-content">
        <hr class="rule">
        <h1 class="heading-big" style="text-align: center;">
            Affichage Des Resultats
        </h1>
        <hr class="rule">
        <h3 style="padding : 1rem;">cliquez sur une filiére pour voir les résultats</h3>
        <div class="filieres">
            <?php
                foreach($filieres as $f){
                    $fCode = $f["codeF"];
                    $fName = $f["intituleF"];
                    $title= "$fCode ($fName)";
                    echo "<a href='etudiants.php?filiere=$fCode' title='$fName'>$title</a>";
                }
            ?>
            <a href='etudiants.php' title='toutes les filieres'>Toutes Les Filieres</a>;
        </div>
    </main>
    <?php include("../components/footer.php") ?>
</body>
</html>