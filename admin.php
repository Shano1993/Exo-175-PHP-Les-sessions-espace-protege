<?php
session_start();

$_SESSION['username'] = 'Shano';
$_SESSION['password'] = 'azerty001';

if ($_POST['username'] !== $_SESSION['username'] || $_POST['password'] !== $_SESSION['password']) {
    header('Location: /index.php?error=0');
}
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Espace Admin</title>
</head>
<body>
    <h1>Espace administation</h1>
    <p id="name"><?= 'Bienvenue ' . $_SESSION['username'] ?></p>
</body>
</html>


