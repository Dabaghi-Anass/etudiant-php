<?php
    $fillieres = ['SMI', 'SMP', 'SVI', 'BCG'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Etudiants</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/ajouteretudiant.css">
    <link rel="icon" href="../assets/icon.png">
    <script src="../scripts/form.js" defer></script>
    <script src="../scripts/script.js" defer></script>

</head>
<body>
    <?php include("../components/header.php") ?>
    <div style="padding-inline : var(--inline-padding)">
    <hr class="rule">
    <ul class="links">
        <li><a class="link" href="../index.php">acceuil</a></li>
        <li><a class="link" href="etudiants.php?filliere=SMI">listes des etudiants</a></li>
    </ul>
    <hr class="rule">
    </div>

    <main class="home-content">
        <h1 class="heading-big">Ajouter Etudiant</h1>
        <hr class="rule">
        <section class="form">
            <form id="form">
                <label>
                    <span>Entrez le code</span>
                    <input placeholder="code" type="text" id="code" required>
                </label>
                <label>
                    <span>Entrez le nom</span>
                    <input placeholder="nom" type="text" id="nom" required>
                </label>
                <label>
                    <span>Entrez le prenom</span>
                    <input placeholder="prenom" type="text" id="prenom" required>
                </label>
                <label>
                    <span>Entrez la note</span>
                    <input placeholder="note" type="number" id="note" required min="0" max="20">
                </label>
                <label>
                    <span>choisie la filliere</span>
                    <select name="filliere" id="filliere">
                        <?php foreach($fillieres as $f) {?>
                            <option value="<?= $f ?>"><?= $f ?></option>
                        <?php }?>
                    </select>
                </label>
                <button class="btn">ajouter</button>
                <button class="btn btn-reset" type="reset">annuler</button>
            </form>
            <div id="error" class="errors">
                
            </div>
        </section>
    </main>
    <?php include("../components/footer.php") ?>
</body>
</html>