<?php
    include("../db/data.php");
    $filieres = getFilieres();
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
        <li><a class="link" href="/">acceuil</a></li>
        <li><a class="link" href="etudiants.php">listes des etudiants</a></li>
    </ul>
    <hr class="rule">
    </div>

    <main class="home-content">
        <h1 class="heading-big">Ajouter Etudiant</h1>
        <hr class="rule">
        <section class="form">
            <form id="form" action="add.php" method="post">
                <label>
                    <span>Entrez le code</span>
                    <input placeholder="code" type="text" id="code" name="code" required>
                    <span class="error"></span>
                </label>
                <label>
                    <span>Entrez le nom</span>
                    <input placeholder="nom" type="text" id="nom" name="nom" required>
                    <span class="error"></span>
                </label>
                <label>
                    <span>Entrez le prenom</span>
                    <input placeholder="prenom" type="text" id="prenom" name="prenom" required>
                    <span class="error"></span>
                </label>
                <label>
                    <span>Entrez la note</span>
                    <input placeholder="note" type="number" id="note" name="note" required min="0" max="20">
                    <span class="error"></span>
                </label>
                <label>
                    <span>choisie la filliere</span>
                    <select name="filliere" id="filliere">
                        <?php foreach($filieres as $f) {?>
                            <option value="<?= $f["codeF"] ?>"><?= $f["intituleF"] ?></option>
                        <?php }?>
                    </select>
                </label>
                <label>
                    <span>le mot de passe</span>
                    <input placeholder="mot de passe" type="password" id="password" name="password" required min="8">
                    <span class="error"></span>
                </label>
                <label>
                    <span>le sexe</span>
                    <div class="radio-group">
                        <label class="gender-container">
                            <span>homme</span>
                            <input type="radio" name="sexe" value="homme" checked>
                        </label>
                        <label class="gender-container">
                            <span>femme</span>
                            <input type="radio" name="sexe" value="femme">
                        </label>
                    </div>
                </label>
                <div class="checkbox-group">
                    <label class="checkbox-container">
                        <span>S1</span>
                        <input type="checkbox" class="semestreCheckbox" name="semestres[0]" value="S1">
                    </label>
                    <label class="checkbox-container">
                        <span>S2</span>
                        <input type="checkbox" class="semestreCheckbox" name="semestres[1]" value="S2">
                    </label>
                    <label class="checkbox-container">
                        <span>S3</span>
                        <input type="checkbox" class="semestreCheckbox" name="semestres[2]" value="S3">
                    </label>
                    <label class="checkbox-container">
                        <span>S4</span>
                        <input type="checkbox" class="semestreCheckbox" name="semestres[3]" value="S4">
                    </label>
                    <label class="checkbox-container">
                        <span>S5</span>
                        <input type="checkbox" class="semestreCheckbox" name="semestres[4]" value="S5">
                    </label>
                    <label class="checkbox-container">
                        <span>S6</span>
                        <input type="checkbox" class="semestreCheckbox" name="semestres[5]" value="S6">
                    </label>
                </div>
                <label class="text-area-container">
                    <span>Saisir Un commentaire</span>
                    <textarea id="commentaire" name="commentaire" cols="30" rows="10"></textarea>
                    <span class="error"></span>
                </label>
                <button class="btn" type="submit">Envoyer</button>
                <button class="btn btn-reset" type="reset">annuler</button>
            </form>
            </section>
            <a href="/" class="lien" style="display : block;width: 100%; text-align : center;">revenir a l'acceuil</a>
        <?php include("../components/footer.php") ?>
    </main>
</body>
</html>