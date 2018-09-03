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
    <?php include "inc/nav.php"?>

        <main class="mainframe">

          <h2>CONNEXION</h2>

          <form method="post" action="user.php">
            <input class="txtfield" type="text" placeholder="identifiant">
            <input class="txtfield" type="password" placeholder="mot de passe">
            
            <div class="btnframe">

                <input class="btnform" type="submit" name="connexion">
                <input class="btnform" type="reset" name="reset">
            </div>

          </form>

        </main>

    <?php include "inc/footer.php"?>
</body>

</html>
