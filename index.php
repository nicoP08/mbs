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
            <div id="ci" class="intframe" style="display:inline-block">
            #Carte intéractive#
            </div>
            <div id="re" class="intframe" style="display:inline-block">
            #répertoire#
            </div>
            <div id="ri" class="intframe" style="display:inline-block">
            #Règlement intérieur#
            </div>
            <div id="cr" class="intframe" style="display:inline-block">
            #Charte Réseau#
            </div>
            <div id="tf" class="intframe" style="display:inline-block">
            #Tarifs France#
            </div>
            <div id="ti" class="intframe" style="display:inline-block">
            #Tarifs International#
            </div>
                    <?php
        if (isset($_SESSION['login'])) {
            echo '<div id="es" class="intframe" style="display:inline-block">
            #Espace suivis#
            </div>
            <div id="cg" class="intframe" style="display:inline-block">
            #Gestion Comptes#
            </div>
            <div id="cc" class="intframe" style="display:inline-block">
            #Création Comptes#
            </div>
            <div id="mi" class="intframe" style="display:inline-block">
            #Message Importants#
            </div>';

        };
        ?>

            <div>
            </div>
        </main>

        </div>

    <?php include "inc/footer.php"?>
</body>
<script src="js/mainint.js"></script>
</html>
