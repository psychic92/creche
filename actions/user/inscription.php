<?php
require_once('../database.php');

//Validation du formulaire
if(isset($_POST['sinscire'])){
    //Vérifier si l'utilisateur à bien compléter tout les champs
    if(!empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['password'])){

        //Les données de l'utilisateur
        $user_email = htmlspecialchars($_POST['email']);
        $user_nom = htmlspecialchars($_POST['nom']);
        $user_prenom = htmlspecialchars($_POST['prenom']);
        $user_password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $user_roles ="USER";

        

        //Vérifier si l'utilisateur existe déjà par rapport a l'email
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT email FROM users WHERE email = ?');
        $checkIfUserAlreadyExists->execute(array($user_email));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            //Insertion de l'utilisateur dans la BDD
            $insetUserOnWebsite = $bdd->prepare('INSERT INTO users(email, nom, prenom, mdp, roles) VALUES(?, ?, ?, ?, ?)');
            $insetUserOnWebsite->execute(array($user_email, $user_nom, $user_prenom, $user_password, $user_roles));

            $inscris = "Vous êtes inscris, vous pouvez vous connecter.";
            //Récupération des information sur l'utilisateur
             $getInfosOfThisUser = $bdd->prepare('SELECT id, email, nom, prenom FROM users WHERE email = ? AND nom = ? AND prenom = ?');
             $getInfosOfThisUser->execute(array($user_email, $user_nom, $user_prenom));
            
             $userInfos = $getInfosOfThisUser->fetch();

            // //Authentifier l'utilisateur sur le site grace aux variables globale $_SESSION
             $_SESSION['auth'] = true;
             $_SESSION['id'] = $userInfos['id'];
             $_SESSION['email'] = $userInfos['email'];
             $_SESSION['lastname'] = $userInfos['nom'];
             $_SESSION['firstname'] = $userInfos['prenom'];

            //Redirection vers la page d'acceuil
            header('location: index.php');

        }else{
            $erreurMsgInsc = "Cet email est déjà utilisé";
        }
    }else{
        $erreurMsgInsc = "Veuillez compléter tout les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('../../includes/head.php');?>
</head>
<body>
<div id="inscription">
            
            <form method="post">
                <input type="email" name="email" placeholder="Email" required> <br>
                <input type="text" name="nom" placeholder="Nom" required> <br>
                <input type="text" name="prenom" placeholder="Prenom" required> <br>
                <input type="password" pattern="[a-zA-Z0-9=@/*+-]{8,}" name="password" placeholder="Mot de passe" required> <br>
                <!--    <p style="color: white;font-weight:bold;font-size:16px;text-shadow: 0 0 10px black">Le mot de passe doit faire minimum 8 caractères<p>
                    <p style="color: white;font-weight:bold;font-size:16px;text-shadow: 0 0 10px black">Les caractères spéciaux autorisés sont = @ / * + -</p> -->
                <input type="submit" name="sinscire" value="S'inscrire">
            </form>
        </div>
        <!-- MOT DE PASSE OUBLIE -->
        <!-- <div id="motdepasseoublie">
            <span class="button" id="btnretour1">Retour</span>
            <form method="post">
                <input type="email" name="email" placeholder="Email"> <br>
                <input type="submit" name="mdpoublie" value="Renvoyer un mot de passe">
            </form>
        </div> -->
        <a href="../../index.php" >Retour</a>
    </div>
</body>
</html>