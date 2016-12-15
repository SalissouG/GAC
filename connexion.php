<?php
  $connexion = mysql_connect('localhost','root','');
  if(!$connexion)
  {
    echo 'Erreur connexion.'.mysql_error();
  }
  $selection = mysql_select_db('gacbdd' , $connexion );
  if(!$selection)
  {
    echo 'Erreur selection'.mysql_error();
  }
?>
