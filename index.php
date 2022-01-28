<?php
session_start();
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Espace Connexion</title>
</head>
<body>

    <h1>Bienvenue sur Monsite.com</h1>

    <h2>Veuillez vous connecter pour accéder au menu d'administration</h2>
    <form action="admin.php" method="post">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="connexion" value="Connexion">
    </form>

</body>
</html>

<?php
if (isset($_GET['error'])) {
    echo "<p>Le nom d'utilisateur ou le mot de passe est incorrect !</p>";
}
