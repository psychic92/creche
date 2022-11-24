<?php
    session_start();
    require('actions/user/securityAction.php');
    require('actions/article/showAllArticlesAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php require('includes/headReserve.php')?>
<body>
<?php 
    include('includes/navbarConnectReserve.php');
    $article = $getAllArticle->fetch();

if(isset($_GET['id']) AND !empty($_GET['id'])){

$idOfArticle = $_GET['id'];

$checkIfArticleExists = $bdd->prepare('SELECT * FROM article WHERE id = ?');
$checkIfArticleExists->execute(array($idOfArticle));

if($checkIfArticleExists->rowCount() > 0){
    $articleInfos = $checkIfArticleExists->fetch();

    $showArticleTitre = $articleInfos['titre'];
    $showArticleTexte = $articleInfos['texte'];
    $showArticleImage = $articleInfos['image'];
    $showArticleCreateur = $articleInfos['nomAuteur'];
    $showArticleDate = $articleInfos['date'];
?>
    <div class="boiteShowArticle" style="background:rgb(180,180,180)">
            <h1><?php echo $showArticleTitre;?></h1>
            <a href="accesReserve.php">Retour</a>
            <p><?=$showArticleTexte;?></p>
            <?php if(!empty($showArticleImage)){?><img src="uploads/<?=$showArticleImage?>"><?php}else{?><?php } ?>
            <hr>
            <h4><?= "Créer par"." ".$showArticleCreateur." le"." ". $showArticleDate;?></h4>
    </div>
<?php }else{echo "<h1 style='margin-top:3em;'> Cet article n'a pas été trouvé ou n'existe pas.</h1>";} ?>
<?php }else{echo "<h1 style='margin-top:3em;'> Cet article n'a pas été trouvé ou n'existe pas.</h1>";} ?>