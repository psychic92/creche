<?php
require ('actions/database.php');

if(isset($_POST['publier'])){
    if(!empty($_POST['titre']) AND !empty($_POST['texte'])){

        $newTitre = htmlspecialchars($_POST['titre']);
        $newTexte = nl2br(htmlspecialchars($_POST['texte']));

        $editArticleOnWebSite = $bdd->prepare('UPDATE article SET titre = ?, texte = ? WHERE id = ?');
        $editArticleOnWebSite->execute(array($newTitre, $newTexte, $idOfArticle));

        header('location: accesReserve.php');
    }else{
        $errorMsg = "Veuillez complèter tout les champs";
    }
}
?>