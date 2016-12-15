<?php
require('connexion.php');

$sql = "SELECT sum(dureeReel) as duree FROM tickets
        where  laDate >= '2012/02/15'
        and type LIKE 'appel%';";

$req = mysql_query($sql) or die("Error ". mysql_error());
$data = mysql_fetch_assoc($req);
echo 'La durée totale réelle des appels effectués après le 15/02/2012 (inclus) est: '.$data['duree'].'. </br>';
?>
