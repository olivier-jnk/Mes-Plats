<?php

session_start();

// traiter les données et creer les dossiers / fichiers en fonction.

// Faire le systeme d'incrémentation pour faire en sorte que le nouveau dossier ne puisse pas avoir le nom d'un autre.

// $folder_name = $_POST['doc_name'];
$folder_name = $_POST['doc_name'];
$first_folder_path = "./documents/{$folder_name}";

// './documents/' . $folder_name
if (!mkdir($first_folder_path)){
    echo "Impossible de créer le répertoire";
}else{
    echo "Répertoire {$folder_name} créer avec succès";
}

// Créer un fichier et ecrire dedans.
// Créer un autre dossier stockant les PJs'

$new_folder_name = "pièces-jointes";
$new_folder_path = $first_folder_path . "/" . $new_folder_name;

// $folder_path . 'pièces-jointes'
if (!mkdir($new_folder_path)){
    echo "Sous dossier pour les pièces-jointes créer !";
}else{
    echo "Sous dossier pour les pièces-jointes créer avec succès !";
}

// mini-pause Encore 5min puis push et recap ggDoc, puis ciao.
//-> ca passe drolement vite quand je suis à fond dans mon code.