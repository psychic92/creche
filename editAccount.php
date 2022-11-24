<?php
    session_start();
    if(!isset($_SESSION['auth'])){
        header('Location: index.php');
    };
    require('actions/database.php');

?>
<!DOCTYPE html>
<html lang="fr">
<?php 
    require('includes/headReserve.php');
?>
<body>
    <?php 
    include "includes/navbarConnectReserve.php";

    if(isset($_POST['modifNom'])){
        if(isset($_POST['changeNomSubmit'])){
            $newLastName = htmlspecialchars($_POST['modifNom']);
            
            $changeLastName = $bdd->prepare('UPDATE users SET nom = ? WHERE id = ?');
            $changeLastName -> execute(array($newLastName, $_SESSION["id"]));
            
            $_SESSION['lastname'] = $newLastName;
            header("location: editAccount.php");
            }
        }

    if(isset($_POST['modifPrenom'])){
        if(isset($_POST['changePrenomSubmit'])){
            $newFirstname = htmlspecialchars($_POST['modifPrenom']);
            
            $changeLastName = $bdd->prepare('UPDATE users SET prenom = ? WHERE id = ?');
            $changeLastName -> execute(array($newFirstname, $_SESSION["id"]));
            
            $_SESSION['firstname'] = $newFirstname;
            header("location: editAccount.php");
            }
    }

    /*if(isset($_POST['modifEmail'])){
        if(isset($_POST['changeEmailSubmit'])){
            $newEmail = htmlspecialchars($_POST['modifEmail']);
            
            $changeLastName = $bdd->prepare('UPDATE users SET email = ? WHERE id = ?');
            $changeLastName -> execute(array($newEmail, $_SESSION["id"]));
            
            $_SESSION['email'] = $newEmail;
            header("location: editAccount.php");
            } 
    }   */

    /*if(isset($_POST['modifMdp'])){
        if(isset($_POST['changeMdpSubmit'])){
            $newMdp = htmlspecialchars($_POST['modifMdp']);
            $hashMdp = password_hash($newMdp,PASSWORD_DEFAULT);
            
            $changeLastName = $bdd->prepare('UPDATE users SET mdp = ? WHERE id = ?');
            $changeLastName -> execute(array($hashMdp, $_SESSION["id"]));
            
            header("location: editAccount.php");
            }
    } */

    if(isset($_GET['supprimer'])){
            $suppression =  (int) $_GET['supprimer'];

            $suprimerUtilisateur = $bdd->prepare('DELETE FROM users where id = ?');
            $suprimerUtilisateur->execute(array($suppression));
            header('location: index.php');
            session_destroy();
        }
?>
    <section>
        
    <!-- NOM -->
        <?php if(!isset($_POST['modifNom'])){?>
            <form method="POST">
                <span>Nom:<?= " ", $_SESSION["lastname"]?> 
                <input type="submit" name="modifNom" value="Modifier"></input>
                </span>    
            </form>
            <?php }else{?>
                <form method="POST">
                    <span>Nom : 
                    <input type="text" name="modifNom" value="<?php echo $_SESSION['lastname'] ?>" required></input>
                    <label style="cursor:pointer;">
                        <img class="cancel" src="images/valid.svg" alt="Valider" title="Valider">
                        <input style="display:none;" type="submit" name="changeNomSubmit" value="Modifier">
                    </label>
                    <a href="editAccount.php"><img class="cancel" src="images/cancel.svg" alt="Annuler" title="Annuler"></a>
                    </span>
                </form>
            <?php } ?>

    <!-- PRENOM -->
            <?php if(!isset($_POST['modifPrenom'])){?>
            <form method="POST">
                <span>Prénom:<?= " ", $_SESSION["firstname"]?> 
                <input type="submit" name="modifPrenom" value="Modifier"></input>
                </span>    
            </form>
            <?php }else{?>
                <form method="POST">
                    <span>Prénom : 
                    <input type="text" name="modifPrenom" value="<?php echo $_SESSION["firstname"]?>" required></input>
                    <label style="cursor:pointer;">
                            <img class="cancel" src="images/valid.svg" alt="Valider" title="Valider">
                            <input style="display:none;" type="submit" name="changePrenomSubmit" value="Modifier">
                    </label>
                    <a href="editAccount.php"><img class="cancel" src="images/cancel.svg" alt="Annuler" title="Annuler"></img></a>
                    </span>
                </form>
            <?php } ?>

    <!-- EMAIL -->
            <!-- <?php if(!isset($_POST['modifEmail'])){?>
            <form method="POST" action="">
                <span>Email:<?= " ", $_SESSION["email"]?> 
                <input type="submit" name="modifEmail" value="Modifier"><?php if(isset($_POST["email"])){echo '<p>'.$msg.'</p>';}?></input>
                </span>    
            </form>
            <?php }else{?>
                <form method="POST" action="">
                    <span>Email : 
                    <input type="mail" name="modifEmail" value="<?php echo $_SESSION["email"]?>" required></input>
                    <label style="cursor:pointer;">
                            <img class="cancel" src="images/valid.svg" alt="Valider" title="Valider">
                            <input style="display:none;" type="submit" name="changeEmailSubmit" value="Modifier">
                    </label>
                    <a href="editAccount.php"><img class="cancel" src="images/cancel.svg" alt="Annuler" title="Annuler"></img></a>
                    </span>
                </form>
            <?php } ?>  -->
            
    <!-- MOT DE PASSE -->
            <?php if(!isset($_POST['modifMdp'])){?>
            <form method="POST" action="">
                <span>Mot de passe:
                <input type="submit" name="modifMdp" value="Modifier"></input>
                </span>    
            </form>
            <?php }else{?>
                <form method="POST" action="">
                    <span>Mot de passe : 
                        <input type="password" pattern="[a-zA-Z0-9=@/*+-]{8,}" name="modifMdp" required></input>
                        <label style="cursor:pointer;">
                            <img class="cancel" src="images/valid.svg" alt="Valider" title="Valider">
                            <input style="display:none;" type="submit" name="changeMdpSubmit" value="Modifier">
                        </label>
                        <a href="editAccount.php"><img class="cancel" src="images/cancel.svg" alt="Annuler" title="Annuler"></img></a>
                        <p style="color: white;font-weight:bold;font-size:16px;text-shadow: 0 0 10px black">Le mot de passe doit faire minimum 8 caractères<p>
                        <p style="color: white;font-weight:bold;font-size:16px;text-shadow: 0 0 10px black">Les caractères spéciaux autorisés sont = @ / * + -</p>
                    </span>
                </form>
            <?php } ?>

    </section> <br>
    <a id="suppBtn" href="editAccount.php?supprimer=<?= $_SESSION['id']?>">Supprimer mon compte</a>

    
</body>
</html>

