<?php
if(isset($_POST['submitMailto'])){
    if
        (
            !empty($_POST['emailMailto']) AND
            !empty($_POST['nomMailto']) AND
            !empty($_POST['prenomMailto']) AND
            !empty($_POST['objetMailto']) AND
            !empty($_POST['messageMailto'])
        ){
            $mail = htmlspecialchars($_POST['emailMailto']);
            $nom = htmlspecialchars($_POST['nomMailto']);
            $prenom = htmlspecialchars($_POST['prenomMailto']);
            $objet = htmlspecialchars($_POST['objetMailto']);
            $message = htmlspecialchars(nl2br($_POST['messageMailto']));

            $destinataire = "dylanmaertens.pro@protonmail.com";
            $messageMail = "Ce message a été envoyé depuis le formulaire de la crèche
            Nom : ".$nom."
            Prénom : ".$prenom."
            Email : ".$mail;

            //$mail = mail($destinataire, $objet, $messageMail,"From:contact@exemple.fr\r\nReply-to:". $mail) ;
            
            if($mail){
                $msgmailto = "Message envoyé";
                header('location: index.php#contact');
            }
    }else{
            $msgmailto ="Veuillez remplir les champs";
        }
    }

?>