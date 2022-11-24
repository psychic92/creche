<?php
    session_start();
    require('actions/user/securityAction.php');
    require('actions/user/listMember.php');
    // require('actions/article/publishArticleAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php require('includes/headReserve.php')?>
<body>
<?php 
    include('includes/navbarConnectReserve.php');

if(!isset($_SESSION['roles'])  == "ADMIN"){
    header('Location: accesReserve.php');
}elseif(isset($_SESSION['roles']) == "ADMIN"){
?>
    <div id="popup">
    
    <form method="post" action="./actions/article/publishArticleAction.php" enctype="multipart/form-data">
                    <?php if(isset($successMsgArticle)){echo '<p>'.$successMsgArticle.'</p>';}?>
                    <?php if(isset($erreurMsgArticle)){echo '<p style="text-align:center; position:absolute;left:50%;transform:translateX(-50%);top:4.5em">'.$erreurMsgArticle.'</p>';}?>
                    <input type="text" name="titre" placeholder="Titre"> <br>
                    <textarea name="texte" cols="60" rows="20" placeholder="Texte ..."></textarea> <br>
                    <input type="file" name="imageAjout" accept="image/png, image/jpeg" multiple>
                    <input type="submit" name="publier" value="Publier">
    </form>
    </div>
</body>

<?php } ?>