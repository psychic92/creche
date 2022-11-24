<div id="popup">
            <span id="fermer">Fermer</span>

            <?php if(isset($successMsgArticle)){echo '<p>'.$successMsgArticle.'</p>';}?>
            <?php if(isset($erreurMsgArticle)){echo '<p>'.$erreurMsgArticle.'</p>';}?>
            
        <form method="post">
                        <input type="text" name="titre" placeholder="Titre"> <br>
                        <textarea name="sousTitre" cols="20" rows="10" placeholder="Sous Titre"></textarea> <br>
                        <textarea name="texte" cols="20" rows="20" placeholder="Texte ..."></textarea> <br>
                        <input type="submit" name="publier" value="Publier">
        </form>
    </div>