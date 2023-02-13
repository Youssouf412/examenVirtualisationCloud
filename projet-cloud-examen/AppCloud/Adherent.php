<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Adherent</title>

    <?php
include('connexion.php');
$sqlQuery = 'SELECT * FROM adherent';
$Adste = $db ->prepare($sqlQuery); 
$Adste->execute();
$tabAss = $Adste->fetchAll();

$taille=count($tabAss);
?> 

</head>
<body>
   <form action= <?php echo"'scriptAdherent.php?nb=".$taille."'";?> method="POST">
   <table align='center' border='1'>
    <tr>
        <td>Nom</td><td>Prenom</td><td></td><td></td><td></td>
    </tr>
        <?php
            $i=0;
            foreach($tabAss as $adhe){
                $i++;
                echo "<tr>";
                echo "<td><input size='20' readonly value='".$adhe['nom']."'name='nom".$i."'></td>";
                echo "<td><input size='20' readonly value='".$adhe['prenom']."'name='prenom".$i."'>
                <input hidden value='".$adhe['id']."' name='id".$i."'></td>";
                echo "<td><button type='submit' name='sup".$i."'>Supprimer</button></td>";
                echo "<td><button type='submit' name='mod".$i."'>Modifier</button></td>";
                echo "<td><button type='submit' name='detail".$i."'>Afficher Details</button></td>";
                echo "</tr>";
            }
            ?> 

        <tr>
            <td><button type='submit' name='ajouter'>AJOUTER ADHERENT </button></td>
        </tr>
         
   </table> 
   </form>
   <?php echo "'scriptAdherent.php?nb=".$taille."'"; ?> 

 
</body>
</html>