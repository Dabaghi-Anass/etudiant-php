<?php
    include("../db/data.php");
    $filieres = getFilieres();
    $etudiant = getEtudiantByCode($_GET['codeE']);
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
                    <input value="<?= $etudiant["code"]?>" placeholder="code" type="text" id="code" name="code" required>
                    <span class="error"></span>
                </label>
                <label>
                    <span>Entrez le nom</span>
                    <input value="<?= $etudiant["nom"]?>" placeholder="nom" type="text" id="nom" name="nom" required>
                    <span class="error"></span>
                </label>
                <label>
                    <span>Entrez le prenom</span>
                    <input value="<?= $etudiant["prenom"]?>" placeholder="prenom" type="text" id="prenom" name="prenom" required>
                    <span class="error"></span>
                </label>
                <label>
                    <span>Entrez la note</span>
                    <input value="<?= $etudiant["note"]?>" placeholder="note" type="number" id="note" name="note" required min="0" max="20">
                    <span class="error"></span>
                </label>
                <label>
                    <span>choisie la filliere</span>
                    <select name="filliere" id="filliere">
                        <?php foreach($filieres as $f) {?>
                            <option value="<?= $f["codeF"] ?>"><?= $f["intituleF"]?></option>
                        <?php }?>
                    </select>
                </label>
                <label>
                    <span>le mot de passe</span>
                    <input value="<?= $etudiant["password"]?>" placeholder="mot de passe" type="password" id="password" name="password" required min="8">
                    <span class="error"></span>
                </label>
                <label>
                    <span>le sexe</span>
                    <div class="radio-group">
                        <label class="gender-container">
                            <span>homme</span>
                            <input type="radio" name="sexe" value="homme" <?= $etudiant["sexe"] === "homme" ? "checked" : "" ?> >
                        </label>
                        <label class="gender-container">
                            <span>femme</span>
                            <input type="radio" name="sexe" value="femme" <?= $etudiant["sexe"] === "femme" ?"checked" : "" ?>>
                        </label>
                    </div>
                </label>
                <div class="checkbox-group">
                    <?php
                        $semestres = ["S1","S2","S3","S4","S5","S6"];
                        $i = 0;
                        foreach($etudiant["semestres"] as $semestre){
                            $semestres = array_filter($semestres, function($s) use ($semestre){
                                return $s !== $semestre;
                            });
                            echo "<label class='checkbox-container'>";
                            echo "<span>$semestre</span>";
                            echo "<input type='checkbox' class='semestreCheckbox' name='semestres[$i]' value='$semestre' checked>";
                            echo "</label>";
                            $i = $i+1;
                        }
                        foreach($semestres as $semestre){
                            echo "<label class='checkbox-container'>";
                            echo "<span>$semestre</span>";
                            echo "<input type='checkbox' class='semestreCheckbox' name='semestres[$i]' value='$semestre'>";
                            echo "</label>";
                            $i = $i+1;
                        }
                    ?>
                </div>
                <label class="text-area-container">
                    <span>Saisir Un commentaire</span>
                    <textarea id="commentaire" name="commentaire" cols="30" rows="10">
                        <?= $etudiant["commentaire"]?>
                    </textarea>
                    <span class="error"></span>
                </label>
                <button class="btn" type="submit">Modifier</button>
            </form>
            </section>
            <a href="/" class="lien" style="display : block;width: 100%; text-align : center;">revenir a l'acceuil</a>
        <?php include("../components/footer.php") ?>
    </main>
</body>
</html>