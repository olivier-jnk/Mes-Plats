<?php

session_start();

// traiter les données / fichiers.
// Systeme d'incrémentation si fichier avec le meme nom.

$folder_name = $_POST['doc_name'];
$first_folder_path = "./documents/{$folder_name}";

$i = 0;
while (file_exists($first_folder_path)) {
    echo "File exist !";
    $first_folder_path = $first_folder_path . $i;
    $i++;
}
// Si "jean" existe -> "jean1" creer, mais si "jean" et "jean1" existe et création de "jean" -> "jean12" créer !
// Revoir le code

// './documents/' . $folder_name
if (!mkdir($first_folder_path)){
    echo "Impossible de créer le répertoire";
}else{
    echo "Répertoire {$folder_name} créer avec succès";
}

// Créer un fichier et ecrire dedans.
// Stocker les différentes pj dans le dossier aproprié + creer un fichier txt et marquer des choses dedans avec les infos 
// récupérées.


$file_name = "file.txt";
$txt = "Test {$folder_name}";

$create = fopen($file_name, 'w');

if ($create === false) {
    die("Impossible d'ouvrir le fichier.");
}

if (fwrite($create, $txt) === false) {
    die("Impossible d'écrire dans le fichier.");
}

fclose($create);

$new_folder_name = "pièces-jointes";
$new_folder_path = $first_folder_path . "/" . $new_folder_name;

// $folder_path . 'pièces-jointes'
if (!mkdir($new_folder_path)){
    echo "Sous dossier pour les pièces-jointes créer !";
}else{
    echo "Sous dossier pour les pièces-jointes créer avec succès !";
}
