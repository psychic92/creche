<?php
session_start();
    require('actions/user/securityAction.php');
    require('actions/database.php')
?>
<!DOCTYPE html>
<html lang="en">
<?php include "includes/headReserve.php"?>
<body>
<?php 
    include ('includes/navbarConnectReserve.php');
    if(isset($_SESSION['roles']) == "ADMIN"){

    $getListMember = $bdd->prepare("SELECT * FROM users WHERE id != 4 ORDER BY nom ");
    $getListMember->execute(array());
        
        if(isset($_GET["accesParentAutorise"]) AND !empty($_GET['accesParentAutorise'])){

            $poster = (int) $_GET['accesParentAutorise'];

            $updatePoster = $bdd->prepare('UPDATE users SET accesParent = 1 where id = ?');
            $updatePoster->execute(array($poster));
            header('location: listeMembres.php');
        }

        if(isset($_GET["accesParentRevoque"]) AND !empty($_GET['accesParentRevoque'])){

            $poster = (int) $_GET['accesParentRevoque'];

            $updatePoster = $bdd->prepare('UPDATE users SET roles = "USER" where id = ?');
            $updatePoster->execute(array($poster));
            header('location: listeMembres.php');
        }

        if(isset($_GET["posterAutorise"]) AND !empty($_GET['posterAutorise'])){

            $poster = (int) $_GET['posterAutorise'];

            $updatePoster = $bdd->prepare('UPDATE users SET roles = "MODERATEUR" where id = ?');
            $updatePoster->execute(array($poster));
            header('location: listeMembres.php');
        }

        if(isset($_GET["posterRevoque"]) AND !empty($_GET['posterRevoque'])){

            $poster = (int) $_GET['posterRevoque'];

            $updatePoster = $bdd->prepare('UPDATE users SET roles = "MODERATEUR" where id = ?');
            $updatePoster->execute(array($poster));
            header('location: listeMembres.php');
        }

        if(isset($_GET["admAutorise"]) AND !empty($_GET['admAutorise'])){

            $autorise = (int) $_GET['admAutorise'];
        
            $updatePoster = $bdd->prepare('UPDATE users SET roles = "ADMIN" where id = ?');
            $updatePoster->execute(array($autorise));
            header('location: listeMembres.php');
            }
        
        if(isset($_GET["admRevoque"]) AND !empty($_GET['admRevoque'])){
        
            $autorise = (int) $_GET['admRevoque'];
        
            $updatePoster = $bdd->prepare('UPDATE users SET adm = 0 where id = ?');
            $updatePoster->execute(array($autorise));
            header('location: listeMembres.php');
            }

        if(isset($_GET['supprimer'])){
            $suppression =  (int) $_GET['supprimer'];

            $suprimerUtilisateur = $bdd->prepare('DELETE FROM users where id = ?');
            $suprimerUtilisateur->execute(array($suppression));
            header('location: listeMembres.php');
        }
    ?>
    <h1 id="titre">Liste des membres</h1>

    <div class="gridMembre" id="gridHaut">
        <p>Nom des utilisateurs</p>
        <p>Accés au blog</p>
        <p>Autorisé à poster des articles</p>
        <p>Autorisé à modifier les accès</p> 
        <div>
            <span style="background:green;padding:.2em .5em;color:white">Autoriser</span>
            <span style="background:red;padding:.2em .5em;color:white">Non Autoriser</span>
        </div>
    </div>
        <hr>
    <?php
        while($members = $getListMember->fetch()){
            ?>
            <div class="gridMembre">
            <h3><?= $members['nom']." ". $members['prenom']?></h3>
        <?php 

            if($members['roles'] == "USER"){
                ?><a style="background-color: red;color:white;" href="listeMembres.php?accesParentAutorise=<?= $members['id'] ?>">Autoriser</a><?php
            }else{
                ?><a style="background-color: green;color:white;" href="listeMembres.php?accesParentRevoque=<?= $members['id']?>">Révoquer</a><?php
            }

            if($members['roles'] == "MODERATEUR"){
                ?><a style="background-color: red;color:white;" href="listeMembres.php?posterAutorise=<?= $members['id'] ?>">Autoriser</a><?php
            }else{
                ?><a style="background-color: green;color:white;" href="listeMembres.php?posterRevoque=<?= $members['id']?>">Révoquer</a><?php
            }

            if($members['roles'] == "ADMIN"){
                ?><a style="background-color: red;color:white;" href="listeMembres.php?admAutorise=<?= $members['id'] ?>">Autoriser</a><?php
            }else{
                ?><a style="background-color: green;color:white;" href="listeMembres.php?admRevoque=<?= $members['id'] ?>">Révoquer</a><?php
            }
            ?>
            <a style="background-color: red;color:white;font-weight:bold" href="listeMembres.php?supprimer=<?= $members['id']?>">Supprimer le compte</a><?php
        ?> </div> <hr> <?php }

    
    }else{header('location: accesReserve.php');} ?>
</body>
</html>