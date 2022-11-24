<nav id="nav">
    <ul>
        <li><span id="fermerSidebar">FERMER</span></li>
        <li><a href="#"></a></li>
        <li><a href="#presentation"></a></li>
        <li><a href="#objectif"></a></li>
        <li><a href="#horraire"></a></li>
        <li><a href="#emploi"></a></li>
        <li><a href='#contact'></a></li>
        <?php if(isset($_SESSION['auth'])):?>
            <li style='display:none'><a id='connecter'></a></li>
        <?php endif;?>

        <li><a style="border-left:3px solid black;padding-left: .7em;">Bonjour '<?php .$_SESSION['firstname'] .?>'</a></li>
        <li><a href="accesReserve.php">Accés parents</a></li>
        <li><a href="actions/user/logoutAction.php"><img src="images/logout.png" alt="Se déconnecter" title="Se Déconnecter"></a></li>
    </ul>
</nav>