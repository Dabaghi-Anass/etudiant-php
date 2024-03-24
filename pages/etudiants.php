<?php
    define('MOY_REUSSITE', 10);
    include("../db/data.php");
    function getListeParFiliere($filiere) {
        global $etudiantsFromDb;
        $students = [];
        foreach ($etudiantsFromDb as $etudiant) {
            if (strtolower($etudiant['filliere']) === strtolower($filiere) and $etudiant['note'] >= MOY_REUSSITE) {
                $students[] = $etudiant;
            }
        }
        return $students;
    }
    function getMax($notes){
        if(count($notes) == 0) return 0;
        return max($notes);
    }
    function getMention($note) {
        if ($note >= 16) {
            return 'Tres Bien';
        } elseif ($note >= 14) {
            return 'Bien';
        } elseif ($note >= 12) {
            return 'Assez Bien';
        } elseif ($note >= 10) {
            return 'Passable';
        } else {
            return 'Ajourné';
        }
    }$fillieres = ['SMI', 'SMP', 'SVI', 'BCG' ];
    function extractNotes($etudiants) {
        $notes = [];
        foreach ($etudiants as $etudiant) {
            $notes[] = $etudiant['note'];
        }
        return $notes;
    }
    //  lerp : Linear interpolation elle retourne une valeur entre a et b selon $t
    //  $t et une valeur entre 0 et 1
    // lerp(a,b,t) = a + (b - a) * t
    function hslLerp($a, $b, $t) {
        $hue= $a + $t * ($b - $a);
        return "hsl($hue , 100% , 45%)";
    }
    $filliere = strtoupper($_GET['filiere']);
    $etudiants = $etudiantsFromDb;
    if(!empty($filliere)){
        $etudiants = getListeParFiliere($filliere);
    }
    usort($etudiants, function($a, $b) {
        return $b['note'] - $a['note'];
    });
    //usort : trier la table bases sur un nombre
    //dans ce cas ces la difference des notes
    $notes = extractNotes($etudiants);
    $max_note = getMax($notes);
    $nombre_reussie = count($etudiants);
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
        <h1 class="heading-big">Liste des Etudiants De la filliere : <span class="emphasis"><?= empty($filliere) ? "tout les fillieres" : $filliere ?></span></h1>
        <hr class="rule">
        <div class="sub-header">
        <span class="">nombre des etudiants reussi : <span id="success-count" class="emphasis"><?= $nombre_reussie ?></span></span>
        <span class="">meilleure note : <span id="best-rate" class="emphasis"> <?= $max_note ?> </span></span>
        </div>
        <hr class="rule">
        <?php if (count($etudiants) == 0) { ?>
            <p class="empty-list">404 😃 Aucun etudiant trouvé</p>
        <?php } ?>
        <!--  data-hidden : pour cacher la table si il n'y a pas des etudiants (conditional rendring)-->
        <table class="etudiant-table" data-hidden="<?= count($etudiants) > 0 ? "true" : "false" ?>">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>note</th>
                    <th>mention</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="etudiants-list">
                <?php
                    foreach ($etudiants as $etudiant) {
                        $color = hslLerp(0, 140, $etudiant['note'] / 20);
                        $code = $etudiant['code'];
                        echo "<tr>";
                        echo "<td>{$etudiant['nom']}</td>";
                        echo "<td>{$etudiant['prenom']}</td>";
                        echo "<td class='grade-row'>{$etudiant['note']}</td>";
                        echo "<td> <span class='mention-row' style='--_bg:$color;'>" . getMention($etudiant['note']) . "</span></td>";
                        echo "<td><a class='lien' href='user_details.php?codeE=$code'>voir plus</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <a href="filieres.php" class="link">listes des filieres</a>
        <?php include("../components/footer.php") ?>
    </main>
</body>
</html>