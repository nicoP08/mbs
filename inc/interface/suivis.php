<?php
if (isset($_POST['token']) && $_POST['token'] == "suires"){
                $id = $_POST['name'];
                echo '<div id="esr" class="intframe" style="display:inline-block">
            
                <div class="fillframe">
                    <i class="txtbig">ESPACE SUIVIS</i>
                    <form method="POST" action="#" class="formframe">
                        <select class="select" name="name">';
                        $req = $dbh->prepare('SELECT * FROM user WHERE IDuser != 40 AND zip != 00000 ORDER BY zip ');
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
                        <input class="formbtn" type="submit" value="Nouv. Recherche">
                    </form>
                    <div class="resframe">';
                    $req = $dbh->prepare('SELECT * FROM user WHERE IDuser = "'.$id.'" ');
                    $req->execute();
                while ($donnees = $req->fetch()){
                    $var1 = $donnees['link'];
                    $var2 = $donnees['nom'];
                    echo '<br><p class="mid">(Cliquez ci-dessous si la redirection automatique ne fonctionne pas)</p><br>';
                    echo '<p class="mid"><a class="ralink" href="'.$var1.'" target="_blank">Lien tracking '.$var2.'</a><p><br>';
                    echo '<script language="javascript">
                    window.open("'.$var1.'", "_blank");
             </script>';
                        }
                    echo '</div>
                </div>';
            }
?>