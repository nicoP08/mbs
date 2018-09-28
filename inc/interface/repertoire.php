<?php
if (isset($_POST['token']) && $_POST['token'] == "repres"){
                $id = $_POST['name'];
                echo '<div id="rer" class="intframe" style="display:inline-block">
            
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
                    <input class="formbtn" type="submit" value="Nouv. Recherche">
                </form>
                    <div class="resframe2">';
                    $req = $dbh->prepare('SELECT * FROM user WHERE IDuser = "'.$id.'" ');
                    $req->execute();
                while ($donnees = $req->fetch()){
                    $var1 = $donnees['nom'];
                    $var2 = $donnees['Adresse1'];
                    $var3 = $donnees['Adresse2'];
                    $var4 = $donnees['zip'];
                    $var5 = $donnees['ville'];
                    $var6 = $donnees['tel'];
                    $var7 = $donnees['fax'];
                    $var8 = $donnees['email'];
                    if ($var2 == ''){
                        $var2 = "Non renseigné";
                    }
                    if ($var3 == ''){
                        $var3 = "Aucun";
                    }
                    if ($var4 == 00000){
                        $var4 = "Non renseigné";
                    }
                    if ($var5 == ''){
                        $var5 = "Non renseigné";
                    }
                    if ($var6 == ''){
                        $var6 = "Non renseigné";
                    }
                    if ($var7 == ''){
                        $var7 = "Non renseigné";
                    }
                    if ($var8 == ''){
                        $var8 = "Non renseigné";
                    }
                    echo '<p><span class="addrleft">Nom entreprise : </span><span class="addrright"> '.$var1.'</span></p>';
                    echo '<p><span class="addrleft">Adresse : </span><span class="addrright"> '.$var2.'</span></p>';
                    echo '<p><span class="addrleft">Complément d\'adresse : </span><span class="addrright"> '.$var3.'</span></p>';
                    echo '<p><span class="addrleft">Code Postal : </span><span class="addrright"> '.$var4.'</span></p>';
                    echo '<p><span class="addrleft">Ville : </span><span class="addrright"> '.$var5.'</span></p>';
                    echo '<p><span class="addrleft">Téléphone : </span><span class="addrright"> '.$var6.'</span></p>';
                    echo '<p><span class="addrleft">Fax : </span><span class="addrright"> '.$var7.'</span></p>';
                    echo '<p><span class="addrleft">Email : </span><span class="addrright"> '.$var8.'</span></p>';
                        }
                    echo '</div>
                </div>';
            }

?>