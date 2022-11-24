<?php
    session_start();
    require_once('actions/database.php');

    $result1= mysqli_query($bdd,"SELECT id, titre, texte, nomAuteur, date, image FROM article ORDER BY id desc");

    $result= mysqli_query($bdd,"SELECT * FROM users ORDER BY nom");
    $getListMember = mysqli_fetch_array($result);

    require_once('actions/user/securityAction.php');

?>
<!DOCTYPE html>
<html lang="en">
    <body>
    <?php include('includes/headReserve.php')?>
<?php 
    include('includes/navbarConnectReserve.php');
    include('includes/bulles.php');
?>
    <h1 id="titre">Ici seront partagées les photos et videos prisent en crèche pour les parents.</h1>
    
    <div id="conteneurArticle">
    <?php 
    while($article = mysqli_fetch_array($result1)){
    ?>
        <div class="boite">
            <h1><?php echo $article['titre'];?></h1>
            <p><?= substr($article['texte'],0,70); echo ' ...'?></p>
            <a id="voirPlusButton" href="showArticle.php?id=<?=$article['id']?>">Voir plus ...</a>
            <hr>
            <h4><?= "Créer par"." ".$article['nomAuteur']." le"." ". $article['date'];?></h4>
            <?php if(isset($_SESSION['roles'])){
                if($_SESSION['roles'] == "MODERATEUR" || $_SESSION['roles'] == "ADMIN"){
                    ?>
                        <a class="editButton" href="editArticle.php?id=<?=$article['id']?>">Editer l'article</a> <br>
                        <a class="editButton" href="actions/article/deleteArticleAction.php?id=<?=$article['id']?>">Supprimer l'article</a>
                    <?php
                }
            }?>
        </div> 
    <?php } ;?>
    </div>
    <script src="scripts/scriptReserve.js"></script>
</body>
</html>