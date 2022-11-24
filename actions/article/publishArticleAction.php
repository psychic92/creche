<?php
session_start();
require_once('../database.php');

if(isset($_POST['publier'])){
    if(!empty($_POST['titre']) && !empty($_POST['texte'])){

        $article_titre = htmlspecialchars($_POST['titre']);
        $article_texte = nl2br(htmlspecialchars($_POST['texte']));
        $article_date = date('d/m/Y');
        $article_id_author = $_SESSION['id'];
        $article_pseudo_author = $_SESSION['firstname'];
        $new_img_name = 0;

            // echo "<pre>";
            // print_r($_FILES['imageAjout']);
            // echo "</pre>";

            $img_name = $_FILES['imageAjout']['name'];
            $img_size = $_FILES['imageAjout']['size'];
            $tmp_name = $_FILES['imageAjout']['tmp_name'];
            $error = $_FILES['imageAjout']['error'];

            if ($error === 0) {
                if ($img_size > 125000) {
                    echo "Désolé, le fichier est trop lourd";
                }else{
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    $allowed_exs = array("jpg", "jpeg", "png"); 
                
                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                    }else {
                        echo "Erreur";
                    }
                }
            }
            $insertArticleOnWebSite = $bdd->prepare('INSERT INTO article(titre, texte, date, idAuteur, nomAuteur,image)VALUES(?, ?, ?, ?, ?, ?)');
            $insertArticleOnWebSite->execute(array($article_titre, $article_texte, $article_date, $article_id_author, $article_pseudo_author, $new_img_name));
            header("Location: ../../accesReserve.php");
            $successMsgArticle = 'Votre article a bien été publiée sur le site.';
            }else{echo "Veuillez remplir les champs";}
        }
?>