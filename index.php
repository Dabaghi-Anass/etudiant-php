<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiants</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="icon" href="./assets/icon.png">
    <script src="./scripts/script.js" defer></script>
</head>
<body>
    
    <?php include("./components/header.php") ?>
    <main class="home-content">
        <h1 class="heading-big">Gestion des Etudiants</h1>
        <hr class="rule">
        <p>Bienvenue dans la page d'acceuil de notre application Web. Vous pouvez gérer d'une manière très aisée la base de données des étudiants. En accédant à la liste, vous pouvez
            voir le détail d'un étudiant et le modifier ou le supprimer.
            A partir du menu, vous pouvez ajouter un nouveau étudiant ou afficher toute la liste. Testez !!</p>
        <hr class="rule">
        <h2 class="heading-small">Menu</h2>
        <ul>
            <li><a class="link" href="index.php">acceuil</a></li>
            <li><a class="link" href="pages/ajouter.php">Ajouter un etudiant</a></li>
            <li><a class="link" href="pages/filieres.php">les fillieres</a></li>
        </ul>
        <hr class="rule">
    </main>
    <?php include("./components/footer.php") ?>
</body>
</html>