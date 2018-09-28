<?php include "inc/co.php"?>
<?php
        if (!isset($_SESSION['login']) && isset($_POST['login'])) {
    $id = $_POST['login'];
    $pass = $_POST['password'];
    $passha = hash('sha256', $pass);

            $req = $dbh->prepare('SELECT login FROM login WHERE login = ?');
            $req->execute(array($id));
        while ($donnees = $req->fetch()){
            $var =  $donnees['login'];
        }

        if($var != $id || $id == ""){
            $err1 = 1;
            $req->closeCursor();
        } else {
            $req->closeCursor();
            $err1 = 0;
            $req2 = $dbh->prepare('SELECT islocked FROM login WHERE login = ?');
            $req2->execute(array($id));
                while ($donnees = $req2->fetch()){
                    $var2 =  $donnees['islocked'];
        }}
         if($var2 == 1){
             $err2 = 1;
             $req2->closeCursor();
        } else {
             $err2 = 0;
             $req3 = $dbh->prepare('SELECT mdp FROM login WHERE login = ?');
             $req3->execute(array($id));
                 while ($donnees = $req3->fetch()){
                     $var3 =  $donnees['mdp'];

         }
        }
        if($var3 != $passha){
            $err3 = 1;
            $req3->closeCursor();
        } else {
            $err3 = 0;
            $_SESSION['login'] = $id;
            $req3->closeCursor();
        }
        }
            ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Etoile Champenoise</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Etoile Champenoise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
    <?php include "inc/header.php"?>
    <div class="bodyframe">

        <?php include "inc/nav.php"?>
        <main class="mainframe">

            <?php
                    $current = date('Y-m-d H:i:s');
					$req = $dbh->prepare('SELECT * FROM important WHERE isvalid = 1 ');
					$req->execute();
				while ($donnees = $req->fetch()){
                    $var1 = $donnees['message'];
                    $var2 = $donnees['dateend'];
                        if (strtotime($current) < strtotime($var2)){
                            echo '<div class="warning defileParent">
                            <span class="warningtxt defile" data-text="'.$var1.'">'.$var1.'</span>
                            </div><br>';
                        }
                }

                if ($err1 == 1){
                    echo "ERREUR : ID non valide";
                }
                if ($err2 == 1){
                    echo "ERREUR : Votre compte a été suspendu. Veuillez contacter un administrateur via le menu contact.";
                }
                if ($err3 == 1){
                    echo "ERREUR : Votre mot de passe est erroné";
                }
        ?>
        <?php
                if (isset($_SESSION['login'])) {
            echo'<div id="ci" class="intframe" style="display:none">
            <div class="fillframe">
                    <i class="txtbig">CARTE INTERACTIVE</i>
                    <img class="mid buildpict" src="img/build.png" alt="Page en construction"></img>
            </div>
            </div>
            <div id="re" class="intframe" style="display:none">
                <div class="fillframe">
                <i class="txtbig">REPERTOIRE</i>
                <form method="POST" action="#" class="formframe">
                    <select class="select" name="name">';
					$req = $dbh->prepare('SELECT * FROM user ORDER BY nom ');
					$req->execute();
				while ($donnees = $req->fetch()){
                    $var1 = $donnees['IDuser'];
                    $var2 = $donnees['nom'];
                    echo '<option value="'.$var1.'">'.$var2.'</option>';
                        }
                    echo '</select>
                    <input type="hidden" name="token" value="repres">
                    <input class="formbtn" type="submit" value="RECHERCHE">
                </form>
            </div>

            </div>
            <div id="ri" class="intframe" style="display:none">
            <div class="fillframe">
                    <i class="txtbig">REGLEMENT INTERIEUR</i>
            </div>
            </div>
            <div id="cr" class="intframe" style="display:none">
            <div class="fillframe">
                    <i class="txtbig">CHARTE RESEAU</i>
            </div>
            </div>
            <div id="ta" class="intframe" style="display:none">
            <div class="fillframe">
                    <i class="txtbig">TARIFS</i>
            </div>
            </div>';
            echo '<div id="es" class="intframe" style="display:none">
            
            <div class="fillframe">
                <i class="txtbig">ESPACE SUIVIS</i>
                <form method="POST" action="#" class="formframe">
                    <select class="select" name="name">';
					$req = $dbh->prepare('SELECT * FROM user WHERE IDuser != 40  AND zip != 00000 ORDER BY zip ');
					$req->execute();
				while ($donnees = $req->fetch()){
                    $var1 = $donnees['IDuser'];
                    $var2 = $donnees['nom'];
                    $var3 = $donnees['zip'];
                    $dep =  substr ( $var3 , 0 , 2);
                    echo '<option value="'.$var1.'">'.$var2.'('.$dep.')</option>';
                        }
                    echo '</select>
                    <input type="hidden" name="token" value="suires">
                    <input class="formbtn" type="submit" value="RECHERCHE">
                </form>
            </div>

            </div>
            <div id="gc" class="intframe" style="display:none">
            <i class="txtbig">INTERFACE DE GESTION DE COMPTES</i>
            <div class="fillframer">

                    <div class="col">
                    <i class="txtbig">Création d\'un nouveau compte</i>
                    <form method="POST" action="#" class="formframe">
                    <label for="cptname" class="txtmed">Nom compte (50 caractères max) : </label><br>
                    <input type="text" name="cptname" class="select" maxlength="50" required><br>
                    <label for="cptpass" class="txtmed">Mot de passe (50 caractères max) : </label><br>
                    <input type="password" name="cptpass" class="select" maxlength="50" required><br>
                    <label for="cpttype" class="txtmed">Type de Compte : </label><br>
                    <select class="select" name="cpttype">
                            <option value="1" selected="selected">Utilisateur</option>
                            <option value="2">Administrateur</option>
                       </select>
                    <input type="hidden" name="token" value="crecpt"><br>
                    <input type="submit" class="formbtn2" value="CREER">
                    </form><br><br><br>
                    </div>
                    <div class="col">
                    <i class="txtbig margin2">Comptes actifs</i>
                    <div class="messline mar2">
                    <div class="txtline3">NOM DU COMPTE</div>
                    <div class="dateline">TYPE DE COMPTE</div>
                    <div class="dateline">COMPTE BLOQUE</div>
                    <div class="suppline">  </div>
                    <div class="suppline">  </div>
                    </div>';
                    $req = $dbh->prepare('SELECT * FROM login');
					$req->execute();
				while ($donnees = $req->fetch()){
                    $var0 = $donnees['IDlogin'];
                    $var1 = $donnees['login'];
                    $var2 = $donnees['islocked'];
                    $var3 = $donnees['type'];

if ($var2 == 0){
    $var2 = "Non";
} else {
    $var2 = "Oui";
}

if ($var3 == 1){
    $var3 = "User";
} else {
    $var3 = "Admin";
}

                            echo '<div class="messline">
                            <div class="txtline4">'.$var1.'</div>
                            <div class="dateline2">'.$var3.'</div>
                            <div class="dateline2">'.$var2.'</div>
                            <div class="suppline2"> <form method="POST" action="#">
                            <input type="hidden" name="token" value="moduse">
                            <input type="hidden" name="IDm" value="'.$var0.'">
                            <input type="submit" class="suppbtn" value="MODIFIER">
                            </form> </div>
                            <div class="suppline2"> ';
                            if ($var0 == 1){
                                echo'Non supprimable';
                            } else {
                            echo '<form method="POST" action="#">
                            <input type="hidden" name="token" value="supuse">
                            <input type="hidden" name="ID" value="'.$var0.'">
                            <input type="submit" class="suppbtn" value="SUPPRIMER">
                            </form>'; }
                            echo '</div>
                            </div>';
                    }
                    echo'</div>
            </div>
            </div>
            <div id="cc" class="intframe" style="display:none">
            <div class="fillframe">
                    <i class="txtbig">MESSAGES PRE-DEFINIS</i>
                    <img class="mid buildpict" src="img/build.png" alt="Page en construction"></img>
            </div>
            </div>
            <div id="mi" class="intframe" style="display:none">
            <div class="fillframe">
                    <i class="txtbig">INTERFACE DE GESTION DES MESSAGES</i>
                    <div class="fillframe2">
                    <i class="txtbig">Nouveau message</i>
                    <form method="POST" action="#" class="formframe">
                    <label for="messtxt" class="txtmed" required>Message (250 caractères max) : </label><br>
                    <input type="text" name="messtxt" class="select" maxlength="250"><br>
                    <label for="messdate" class="txtmed" required>Date de péremption : </label>
                    <input type="date" name="messdate" class="select"><br>
                    <input type="hidden" name="token" value="mesres"><br>
                    <input type="submit" class="formbtn2" value="ENVOYER">
                    </form><br>
                    </div>
                    <div class="fillframe2">
                    <i class="txtbig">Messages en cours</i>';
                    echo '<div class="messline mar2">
                    <div class="txtline">MESSAGES AFFICHES</div>
                    <div class="dateline">DATE DE FIN</div>
                    <div class="suppline">  </div>
                    </div>';
                    $current = date('Y-m-d H:i:s');
					$req = $dbh->prepare('SELECT * FROM important WHERE isvalid = 1 ');
					$req->execute();
				while ($donnees = $req->fetch()){
                    $var1 = $donnees['message'];
                    $var2 = $donnees['dateend'];
                    $var3 = $donnees['IDmess'];
                        if (strtotime($current) < strtotime($var2)){
                            echo '<div class="messline">
                            <div class="txtline2">'.$var1.'</div>
                            <div class="dateline2">'.$var2.'</div>
                            <div class="suppline2"> <form method="POST" action="#">
                            <input type="hidden" name="token" value="messup">
                            <input type="hidden" name="ID" value="'.$var3.'">
                            <input type="submit" class="suppbtn" value="SUPPRIMER">
                            </form> </div>
                            </div>';
                        }
                }
                    echo'</div>

            </div>
            </div>';?>

<?php include "inc/interface/suivis.php" ?>

<?php include "inc/interface/repertoire.php"?>

<?php include "inc/interface/nmessage.php"?>

<?php include "inc/interface/smessage.php"?>

<?php include "inc/interface/createuser.php"?>

<?php include "inc/interface/supuser.php"?>

<?php include "inc/interface/moduser.php"?>

<?php include "inc/interface/valuser.php"?>

<?php
    };
        ?>

            <div>
            </div>
        </main>

        </div>

    <?php include "inc/footer.php"?>
</body>
<?php
if (isset($_POST['token']) && $_POST['token'] == "suires"){
        echo '<script src="js/suires.js"></script>';
    } else if (isset($_POST['token']) && $_POST['token'] == "repres"){
        echo '<script src="js/repres.js"></script>';
    } else if (isset($_POST['token']) && $_POST['token'] == "mesres"){
        echo '<script src="js/mesres.js"></script>';
    } else if (isset($_POST['token']) && $_POST['token'] == "crecpt"){
        echo '<script src="js/crecpt.js"></script>';
    } else if (isset($_POST['token']) && $_POST['token'] == "supuse"){
        echo '<script src="js/supuse.js"></script>';
    } else if (isset($_POST['token']) && $_POST['token'] == "moduse"){
        echo '<script src="js/moduse.js"></script>';
    } else if (isset($_POST['token']) && $_POST['token'] == "messup"){
        echo '<script src="js/supres.js"></script>';
    } else if (isset($_POST['token']) && $_POST['token'] == "modval"){
        echo '<script src="js/modval.js"></script>';
    }else {
        echo '<script src="js/mainint.js"></script>';
    }
?>
</html>
