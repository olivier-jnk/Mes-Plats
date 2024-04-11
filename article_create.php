<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article de cuisine</title>
</head>
<body>
    <?php require_once (__DIR__ . '/components/header.php'); ?>

    <h1>Ajouter un article de cuisine</h1>
    <form action="article_create_submit.php" method="post" enctype="multipart/form-data">
        <label for="titre">Titre :</label><br>
        <input type="text" id="titre" name="titre" required><br><br>
        
        <label for="image">Image :</label><br>
        <input type="file" id="image" name="image" required><br><br>
        
        <label for="contenu">Contenu :</label><br>
        <textarea id="contenu" name="contenu" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Ajouter l'article">
    </form>
</body>
</html>
