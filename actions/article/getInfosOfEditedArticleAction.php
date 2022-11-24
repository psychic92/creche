<?php
require ('actions/database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfArticle = $_GET['id'];

    $checkIfArticleExists = $bdd->prepare('SELECT * FROM article WHERE id = ?');
    $checkIfArticleExists->execute(array($idOfArticle));

    if($checkIfArticleExists->rowCount() > 0){
        $articleInfos = $checkIfArticleExists->fetch();

        if($articleInfos['idAuteur'] == $_SESSION['id'] OR $_SESSION['adm'] == 1){
            $articleTitre = $articleInfos['titre'];
            $articleTexte = $articleInfos['texte'];

            $articleTexte = str_replace("<br />","",$articleTexte);
        }else{
            $errorMsg = "Vous ne pouvez pas modifier cet article ou cet article n'existe pas";
        }
    }else{
        $errorMsg = "Vous ne pouvez pas modifier cet article ou cet article n'existe pas";
    }
}else{
    $errorMsg = "Vous ne pouvez pas modifier cet article ou cet article n'existe pas";
}
?>