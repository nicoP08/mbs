<?php include "inc/co.php"?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Espace utilisateur</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Etoile Champenoise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/user.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>

            <?php
    $id = $_POST['login'];
    $pass= $_POST['password'];

        if (!isset($_SESSION['login'])) {
            $req = $dbh->prepare('SELECT nom FROM user WHERE nom = ?');
            $req->execute(array($id));
        while ($donnees = $req->fetch()){
            $var =  $donnees['nom'];
        }

        if($var != $id || $id == ""){
            echo "ERREUR : ID non valide";
            $req->closeCursor();
        } else {
            $req->closeCursor();
            $req2 = $dbh->prepare('SELECT islocked FROM user WHERE nom = ?');
            $req2->execute(array($id));
                while ($donnees = $req2->fetch()){
                    $var2 =  $donnees['islocked'];
        }}
         if($var2 == 1){
             echo "ERREUR : Votre compte a été suspendu. Veuillez contacter un administrateur via le menu contact.";
             $req2->closeCursor();
        } else {
             $req2->closeCursor();
             $req3 = $dbh->prepare('SELECT clef FROM user WHERE nom = ?');
             $req3->execute(array($id));
                 while ($donnees = $req3->fetch()){
                     $var3 =  $donnees['clef'];

         }
        }
        if($var3 != $pass){
            echo "ERREUR : Votre mot de passe est erroné";
            $req3->closeCursor();
        } else {
            $_SESSION['login'] = $id;
            $req3->closeCursor();
        }
        }
            ?>

    <?php include "inc/header.php"?>
    <div class="bodyframe">
        <?php include "inc/nav.php"?>

        <main class="mainframe">
        <?php
        if (isset($_SESSION['login'])) {
            echo '<div id="ri" class="ruleframe" style="display:block">
            #Put Rules 1 Here#
            </div>
            <div id="ri" class="ruleframe" style="display:block">
            #Put Rules 1 Here#
            </div>
            <div id="ri" class="ruleframe" style="display:block">
            #Put Rules 1 Here#
            </div>
            <div id="ri" class="ruleframe" style="display:block">
            #Put Rules 1 Here#
            </div>
            <div id="ri" class="ruleframe" style="display:block">
            #Put Rules 1 Here#
            </div>
            <div id="ri" class="ruleframe" style="display:block">
            #Put Rules 1 Here#
            </div>';

        };
        ?>
        </main>

        </div>

    <?php include "inc/footer.php"?>
</body>
<script src="js/intuser.js"></script>
</html>

