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
    <main>
        <h1>Bienvenue</h1>
        <section>
            <h2>Recipes</h2>
            <ul class="recipes">
                <?php foreach ($recipes as $recipe): ?>
                    <li onclick="console.log(<?php echo $recipe['title'] ?>)">
                        <a href="details_article.php?id=<?php echo urlencode($recipe['title']); ?>">
                            <img class="miniature" src="<?php echo $recipe['miniature']['image'] ?>"
                                alt="<?php echo $recipe['miniature']['description'] ?>" />
                            <h3><?php echo $recipe['title'] ?></h3>
                            <p><?php echo $recipe['description'] ?></p>
                            <?php echo $recipe['author'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
    <?php require_once (__DIR__ . '/components/footer.php'); ?>
</body>

</html>

<style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    main {
        max-width: 40vw;
        min-width: 40vw;
        margin: 2%;
    }

    ul.recipes {
        display: flex;
        gap: 5%;
        flex-wrap: wrap;
        list-style-type: none;
    }

    ul.recipes li {
        margin-bottom: 5%;
    }

    ul.recipes img {
        max-width: 5vw;
        max-height: 5vw;
    }
</style>

<!-- Utiliser Sass et/ou tailwind + React ??? -->
<!-- Revoir les différents modes d'appel de classe css element.element ou element .element + nth-shild, ... -->