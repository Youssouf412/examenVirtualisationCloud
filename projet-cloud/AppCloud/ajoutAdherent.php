<?php
include('connexion.php');
$sqlQuery = 'INSERT INTO adherent (nom, prenom, email, motPasse, profil)
value (:nom, :prenom, :email, :motPasse, :profil)';
$inser = $db->prepare($sqlQuery);


    $inser->execute([
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'motPasse' => $_POST['motPasse'],
        'profil' => $_POST['profil']
    ]);
    header('location:formulaire.html');
?>
