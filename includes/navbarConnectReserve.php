<nav>
    <ul>
        <li><a href="index.php">Accueil du site</a></li>
        <li id="connecter">
            <?php echo '<a>Bonjour ' .$_SESSION['firstname'] .'</a>';?>
        </li>
        <?php
            if(isset ($_SESSION["auth"])){
                if( $_SESSION['roles'] == "USER" OR $_SESSION["roles"] == "MODERATEUR" OR $_SESSION["roles"] == "ADMIN"){
                        echo "<li><a href=accesReserve.php>Accès parents</a></li>";
                        echo "<li><a href=editAccount.php>Mon compte</a></li>";
                    }
                if($_SESSION['roles'] == "MODERATEUR" OR $_SESSION['roles'] == "ADMIN"){
                    ?>
                        <li><a href="creerArticle.php">Créer article</a></li>
                        <?php}
                            if($_SESSION['roles'] == "ADMIN"){
                                ?>
                                <li><a href="listeMembres.php">Liste membres</a></li>
                <?php } 
                
            }
        ?>
        <li><a href="actions/user/logoutAction.php"><img src="images/logout.png" alt="Se déconnecter" title="Se Déconnecter"></a></li>
    </ul>
</nav>