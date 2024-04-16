<?php require_once (__DIR__ . '../../settings/functions.php'); ?>
<?php require_once (__DIR__ . '../../settings/variables.php'); ?>
<?php session_start() ?>

<header>
    <h1>Header</h1>
    <a href="./article_create.php">Creer un article</a>
    <a href="./index.php">accueil</a>
    <?php if(!$_SESSION): ?>
        <a href="./account/auth.php">connexion</a>
    <?php else: ?>
        <a href="./account/profil.php"><?php echo $_SESSION['theUser'] ?></a>
    <?php endif; ?>
    <!-- Ajouter un possible reset de session. -->
    <a href="./docs_creator/doc_create.php">Document creator</a>
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