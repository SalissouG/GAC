<?php
require('connexion.php');

$sql = "SELECT count(*) as number FROM tickets
        where type LIKE 'sms%'
        or type LIKE 'envoi de sms%';";

$req = mysql_query($sql) or die("Error ". mysql_error());
$data = mysql_fetch_assoc($req);
echo 'La quantité totale de SMS envoyés par l\'ensemble des abonnés est: '.$data['number'].' </br>';

?>
