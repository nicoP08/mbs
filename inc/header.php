<header class="mainhead">
    <div class="pictbox">
    <img src="img/logo.png" alt="logo Etoile Champenoise" class="pictlogo">
    </div>
    <?php
    if(!isset($_SESSION['logconf'])){
    echo '<div class="formbox">
    <h2>CONNEXION</h2>

<form method="post" action="user.php">
  <input class="txtfield" type="text" placeholder="identifiant">
  <input class="txtfield" type="password" placeholder="mot de passe">
  
  <div class="btnframe">

      <input class="btnform" type="submit" name="connexion">
      <input class="btnform" type="reset" name="reset">
  </div>
    </div>';
    }
    ?>
</header>