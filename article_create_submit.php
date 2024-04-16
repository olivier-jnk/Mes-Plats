
<?php

require_once (__DIR__ . '/settings/functions.php'); 
require_once (__DIR__ . '/settings/variables.php');

if(isset($_POST["submit"])){
    // Infliger un meilleur traitement.
    $titre = $_POST["titre"];
    $contenu = $_POST["contenu"];
    $image = $_FILES["image"]["name"];
    $rImg = './content/uploads/' . $image;

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0){
        if ($_FILES['image']['size'] > 1000000) {
            echo "L'envoi n'a pas pu être effectué, erreur ou image trop volumineuse";
            return;
        };
        $fileInfo = pathinfo($_FILES['image']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
        if (!in_array($extension, $allowedExtensions)) {
            echo "L'envoi n'a pas pu être envoyé car l'image n'es pas dans le bon format. Les formats 
            autorisés sont les suivants" . $allowedExtensions;
        }
        $path = __DIR__ . '/content/uploads/';
        if (!is_dir($path)) {
            echo "L'envoi n'a pu put etre effectué, car le dossier 'uploads' et manquant";
            return;
        }
        move_uploaded_file($_FILES['image']['tmp_name'], $path . basename($_FILES['image']['name']));
    };

    $newArticle = [
        "title" => $titre,
        "miniature" => [
            "image" => $rImg,
            "description" => $image
        ],
        "content" => $contenu,
    ];

    // Ajouter l'article au tableau global
    // array_push prend en premier paramètre l'array et en secon, ce qu'il push dedans.
    array_push($recipes, $newArticle);

    echo "<h2>Articles ajoutés :</h2>";
    echo "<ul>";
    foreach($recipes as $recipe){
        echo "<strong>Image :</strong> " . $recipe["miniature"]["image"] . "<br>";
        echo "<li><strong>Titre :</strong> " . $recipe["title"] . "<br>";
        foreach($recipe['content'] as $ctn ){
            echo $ctn;
        }
    }
    echo "</ul>";

    // Faire en sorte que l'ajout de l'article soit persistant (sessions ?) et ajouter plus de personnalisation notamment au niveau du contenu.
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

