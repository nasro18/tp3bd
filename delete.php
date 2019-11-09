
<?php
require 'connexion.php';
                $rep= 'DELETE FROM etudiante WHERE id="'.$_GET['id'].'"';
                 if ($bd->query($rep) == TRUE){
       echo "suppression succès  " ;
       }
       header ('Location:index1.php');
       ?>
