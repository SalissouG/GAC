<?php
require('connexion.php');
// Lecture du fichier .csv.
if (($handle = fopen("tickets_appels_201202.csv", "r")) !== FALSE) {
     while (($ligne = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $donees[] = $ligne;
      }
 fclose($handle);
}
  // Insertion des informations dans la base de données.
  for($i=3;$i<sizeof($donees); $i++)
  {
    $ligne = explode(";",$donees[$i][0]);
    $ligne[7] = addslashes($ligne[7]);

    // Adaptation du format de la date à celui de MySQL.
    $temp =  explode("/",$ligne[3]);
    $ligne_date = $temp[2].'-'.$temp[1].'-'.$temp[0];

    $sql ="INSERT INTO tickets(numeroAbonne,laDate,heure,dureeReel,dureeFacture,type)
    VALUES ('".$ligne[2]."','".$ligne_date."','".$ligne[4]."','".$ligne[5]."','".$ligne[6]."','".$ligne[7]."')";
    mysql_query($sql) or die("enchant_dict_get_error ". mysql_error());

  }

?>
