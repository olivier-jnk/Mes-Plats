<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once (__DIR__ . '../../settings/functions.php'); ?>
    <?php require_once (__DIR__ . '../../settings/variables.php'); ?>

    <h1>Se connecter</h1>
    <form action="#" method="post" >
        <input type="text" name="name" id="name" placeholder="nom" >
        <input type="password" name="password" id="password" placeholder="mot de passe">
        <button type="submit">Connexion</button>
    </form>
    <a href="../settings/functions.php"></a>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $password = htmlspecialchars($_POST["password"]);

    // Validation du nom d'utilisateur et du mot de passe
    if (strlen($name) < 2 || strlen($password) < 8) {
        echo "Nom d'utilisateur ou mot de passe invalide.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    }

    foreach($users as $user ){
        if ($user['username'] === $name && $user['password'] === $password){
            echo "Bienvenue" . $user['username'];
            $TheUser['username'] = $user['username'];
            echo 'print var TheUser' . $TheUser['username'];
        }
    }
    

}


?>