<nav class="mainnav">
    <div class="menu">
        <div class="ring">
        </div>
        <div class="rubrique">
            Carte Intéractive
        </div>
    </div>
    <div class="menu">
        <div class="ring">
        </div>
        <div class="rubrique">
            Répertoire
        </div>
    </div>
    <div href="reglements.php" class="menu" id="regle0">
        <div class="ring">
        </div>
        <div class="rubrique">
            Réglements
        </div>
</div>
<div class="menu" style="display:none" id="regle1">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Réglement Intérieur
        </div>
    </div>
    <div class="menu" style="display:none" id="regle2">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Charte réseau
        </div>
    </div>
    <div href="tarifs.php" class="menu" id="tarif0">
        <div class="ring">
        </div>
        <div class="rubrique">
            Tarifs
        </div>
    </div>
    <div class="menu" style="display:none" id="tarif1">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Envois en France
        </div>
    </div>
    <div class="menu" style="display:none" id="tarif2">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Envois à l'étranger
        </div>
    </div>
    <?php
    if(isset($_SESSION['login'])){
    echo '<div class="menu">
        <div class="ring">
        </div>
        <div class="rubrique">
            Espace Suivis
        </div>
    </div>';
        $req = $dbh->prepare('SELECT type FROM login WHERE login = ?');
        $req->execute(array($_SESSION['login']));
            while ($donnees = $req->fetch()){
        $var =  $donnees['type'];
        }
        if ($var == 2){
    echo '<div class="menu" style="display:flex" id="adm1">
        <div class="ring">
        </div>
        <div class="rubrique">
            Gestion Administrateur
        </div>
    </div>
    <div class="menu" style="display:none" id="adm2">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Gestion Comptes
        </div>
    </div>
    <div class="menu" style="display:none" id="adm3">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Création Comptes
        </div>
    </div>
    <div class="menu" style="display:none" id="adm4">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Gestion des messages importants
        </div>
    </div>';
    }
    echo '<a href="logout.php" class="menu">
        <div class="ring">
        </div>
        <div class="rubrique">
            Déconnexion
        </div>
    </a>';
    }
    ?>
</nav>