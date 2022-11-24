<?php
require('actions/database.php');

$getAllArticle = $bdd->prepare('SELECT id, titre, texte, nomAuteur, date, image FROM article ORDER BY id desc');
$getAllArticle->execute(array());

?>