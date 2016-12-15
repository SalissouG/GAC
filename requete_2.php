<?php
require('connexion.php');

$sql = "SELECT dureeFacture FROM tickets
        where type LIKE 'connexion%' and (heure< '8:00:00' or  heure >'18:00:00')
        ORDER BY dureeFacture DESC LIMIT 10;";

$req = mysql_query($sql) or die("Error ". mysql_error());

echo 'Le TOP 10 des volumes data facturés en dehors de la tranche horaire 8h00-
18h00, par abonné est:  </br>';
while($data = mysql_fetch_assoc($req))
{
echo $data['dureeFacture'].' </br>';
}

?>
