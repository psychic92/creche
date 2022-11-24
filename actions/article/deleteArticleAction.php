<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('location:../../index.php');
}
    require_once '../database.php';

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $idOfTheArticle = $_GET['id'];

    // $checkIfArticleExists = $bdd->prepare("SELECT idAuteur FROM article WHERE id = ?");
    // $checkIfArticleExists->execute(array($idOfTheArticle));

    $result= mysqli_query($bdd,"SELECT idAuteur FROM article WHERE id = $idOfTheArticle");
            

    if($articleInfos=mysqli_num_rows($result) > 0){
        while($deleteThisArticle = mysqli_fetch_array($result)){
            if($userInfos['idAuteur'] == $_SESSION['id'] OR $_SESSION['roles'] == "ADMIN"){
                        $deleteThisArticle = $bdd->prepare('DELETE FROM article WHERE id = ?');
                        $deleteThisArticle->execute(array($idOfTheArticle));

                        header('location: ../../accesReserve.php');
                    }else{
                        header('location: ../../accesReserve.php');
                    }
                }        
    }else{
        header('location: ../../accesReserve.php');
    }
}
?>