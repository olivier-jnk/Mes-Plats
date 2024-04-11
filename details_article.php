<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php require_once (__DIR__ . '/settings/functions.php'); ?>
    <?php require_once (__DIR__ . '/settings/variables.php'); ?>

    <?php require_once (__DIR__ . '/components/header.php'); ?>
    <?php 
    if(isset($_GET['id'])){
        $articleId = $_GET['id'];
        echo $articleId;
    };
    ?>
    <?php foreach($recipes as $recipe): ?>
        <?php if($recipe['title'] === $articleId): ?>
            <h1><?php echo $recipe['title'] ?></h1>
            <img class="miniature" src="<?php echo $recipe['miniature']['image'] ?>"
                alt="<?php echo $recipe['miniature']['description'] ?>" />
            <p><?php echo $recipe['author'] ?></p>
            <?php foreach($recipe['content'] as $ctn): ?>
                <p><?php echo $ctn  ?></p>
            <?php endforeach ?> 
        <?php endif ?>
    <?php endforeach ?> 
    <!-- ajouter des images dans l'articles + mise en forme -->

    <?php require_once (__DIR__ . '/components/footer.php'); ?>
</body>
</html>