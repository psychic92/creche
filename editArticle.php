<?php
    session_start();
    require_once('actions/database.php');

    if(isset($_GET['id']) AND !empty($_GET['id'])){

            $idOfArticle = $_GET['id'];

            $result= mysqli_query($bdd,"SELECT * FROM article WHERE id = $idOfArticle");
            

            if($articleInfos=mysqli_num_rows($result) > 0){
            while($articleInfos = mysqli_fetch_array($result)){
                    if($articleInfos['idAuteur'] == $_SESSION['id'] OR $_SESSION['roles'] == "ADMIN"){
                                $articleTitre = $articleInfos['titre'];
                                $articleTexte = $articleInfos['texte'];

                                $articleTexte = str_replace("<br />","",$articleTexte);
                            }else{
                                $errorMsg = "Vous ne pouvez pas modifier cet article ou cet article n'existe pas";
                            }
                        }   
            }else{
            $errorMsg = "Vous ne pouvez pas modifier cet article ou cet article n'existe pas";
        }
    }
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
<!DOCTYPE html>
<html lang="en">
<?php include('includes/headReserve.php')?>
<body>
<?php include ('includes/navbarConnectReserve.php');?>

    <div id="formEdit">
            <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>
    <?php if(isset($articleTexte)){ ?>
            <form method="post">
                        <input type="text" name="titre" placeholder="Titre" value="<?=$articleTitre?>"> <br>
                        <textarea name="texte" cols="20" rows="13" placeholder="Texte ..."><?=$articleTexte?></textarea> <br>
                        <input type="submit" name="publier" value="Modifier">
            </form>
    <?php } ?> 
    </div>
</body>
</html>