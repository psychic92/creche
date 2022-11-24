<?php
if(!isset($_SESSION['auth'])){
    $_SESSION['auth']="ko";
}
?>

<nav id="nav">
        <span id="fermerSidebar">FERMER</span>
        <a href="#"></a>
        <a href="#skipC"></a>
        <a href="#objectif"></a>
        <a href="#horraire"></a>
        <a href="#emploi"></a>
        <a href='#contact'></a>

        <?php if($_SESSION['auth']=="ok"):?>
            <a href="editAccount.php">Mon compte</a>
            <a href="accesReserve.php">Accés parents</a>            
            <a href="actions/user/logoutAction.php"><img src="images/logout.png" alt="Se déconnecter" title="Se Déconnecter"></a>
            <?php if($_SESSION['roles']=="ADMIN"):?>
                <a href="#">Admin</a>
            <?php endif;?>
        <?php else:?>
            <a href ="actions/user/inscription.php" >inscription</a>
            <a href="actions/user/loginAction.php">Connexion</a> 
        <?php endif;?>
        <br>
</nav>
    <?php if(isset($erreurMsgConn)){echo '<p class="msgErreurPopUp" style="display:block">'.$erreurMsgConn.'</p>';};?>
    <?php if(isset($erreurMsgInsc)){echo '<p class="msgErreurPopUp">'.$erreurMsgInsc.'</p>';};?>