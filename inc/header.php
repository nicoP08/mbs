<header class="mainhead">
    <div class="pictbox">
    <img src="img/logo.png" alt="logo Etoile Champenoise" class="pictlogo">
    </div>
    <?php
    if(!isset($_SESSION['login'])){
    echo '<div class="formbox">
    <h2>CONNEXION</h2>

<form method="post" action="#">
  <input class="txtfield" name="login" type="text" placeholder="identifiant" required>
  <input class="txtfield" name="password" type="password" placeholder="mot de passe" required>
  
  <div class="btnframe">

      <input class="btnform" type="submit" name="connexion">
      <input class="btnform" type="reset" name="reset">
  </div>
    </div>';
    }
    ?>
</header>