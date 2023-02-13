<?php
   try{
    $db = new PDO('mysql:host=localhost;dbname=ESTM;charset=utf8', 'root','');
    echo "connexion reussie";
   }
   catch(Exception $e)
   {
    die('Erreur de connection : '. $e->getMessage());
   }
?> 

