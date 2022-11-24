<?php
session_start();
require('../database.php');

//Validation du formulaire
if(isset($_POST['connexion'])){
    //Vérifier si l'utilisateur à bien compléter tout les champs
    if(!empty($_POST['email']) AND !empty($_POST['password'])){

        //Les données de l'utilisateur
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);
        //Vérifier si l'utilisateur existe
        $sql ='SELECT * FROM users';

        if($result=mysqli_query($bdd,$sql)){
            //Récupérer les données de l'utilisateur
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                    if($row['email']==$user_email && password_verify($user_password,$row['mdp'])){
                        $_SESSION['auth'] = "ok";
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['lastname'] = $row['nom'];
                        $_SESSION['firstname'] = $row['prenom'];
                        $_SESSION["roles"] = $row['roles']; 
                        
        
                        //Redirection vers index.php
                        header('Location: ../../index.php');
                    } else{
                        $erreurMsgConn = "Email ou Mot de Passe incorrect";
                    }
                }
            }
    }else{
        $erreurMsgConn = "Veuillez compléter tout les champs.";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micro Crèche Pomme d'Api</title>
    <link rel="stylesheet" href="../../includes/style.css">
    <link rel="stylesheet" href="../../includes/styleBulles.css">
    <!-- <link rel="icon" type="image/png" href="projetFinal/images/apple.png"/> -->
</head>
<!-- projetFinal\images\apple.png -->
<body>
<?php 
        // include "../../includes/bulles.php";
       
    ?>
<div id="connexion">

    <form method="post">
        <input type="email" name="email" placeholder="Email" required> <br>
        <input type="password" pattern="[a-zA-Z0-9=@/*+-]{8,}" name="password" placeholder="Mot de passe" required> <br>
        <input type="submit" name="connexion" value="Se Connecter">
    </form><br>
    <!-- <span class="button" id="mdpoublie">Mot de passe oublié</span> <br> <br> -->
    <span class="button" id="sinscrire1"><a href="inscription.php" >Inscription</a></span> <br> <br>
    </div>
    <a href="../../index.php" >Retour</a>
</body>
</html>
