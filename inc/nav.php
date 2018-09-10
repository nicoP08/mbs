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
    <a href="reglements.php" class="menu">
        <div class="ring">
        </div>
        <div class="rubrique">
            Réglements
        </div>
</a>
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
    <a href="tarifs.php" class="menu">
        <div class="ring">
        </div>
        <div class="rubrique">
            Tarifs
        </div>
    </a>
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
    <div class="menu">
        <div class="ring">
        </div>
        <div class="rubrique">
            Espace Suivis
        </div>
    </div>
    <?php
    if(isset($_SESSION['logconf'])){
    echo '<div class="menu">
        <div class="ring">
        </div>
        <div class="rubrique">
            Espace Personnel
        </div>
    </div>
    <div class="menu" style="display:none">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Détails Compte
        </div>
    </div>
    <div class="menu" style="display:none">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Gestion Compte
        </div>
    </div>
    <div class="menu" style="display:none">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Gestion Administrateur
        </div>
    </div>
    <div class="menu" style="display:none">
        <div class="ring3">
        </div>
        <div class="rubrique3">
            Gestion Comptes
        </div>
    </div>
    <div class="menu" style="display:none">
        <div class="ring3">
        </div>
        <div class="rubrique3">
            Création Comptes
        </div>
    </div>
    <div class="menu" style="display:none">
        <div class="ring3">
        </div>
        <div class="rubrique3">
            Gestion des messages importants
        </div>
    </div>
    <div class="menu" style="display:none">
        <div class="ring2">
        </div>
        <div class="rubrique2">
            Déconnexion
        </div>
    </div>';
    }
    ?>
</nav>