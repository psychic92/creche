<?php
    require("actions/database.php");

$getListMember = $bdd->prepare("SELECT * FROM users ORDER BY nom");
$getListMember->execute(array());
?>