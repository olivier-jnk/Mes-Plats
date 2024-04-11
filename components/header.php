<?php require_once (__DIR__ . '../../settings/functions.php'); ?>
<?php require_once (__DIR__ . '../../settings/variables.php'); ?>

<header>
    <h1>Header</h1>
    <a href="./article_create.php">Creer un article</a>
    <a href="./index.php">accueil</a>
    <?php if($TheUser === 'none'): ?>
        <a href="./account/auth.php">connexion</a>
    <?php else: ?>
        <a href="#"><?php $TheUser ?></a>
    <?php endif; ?>
</header>

<style>
    header {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
        width: 100vw;
    }
</style>