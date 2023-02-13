<?php
for($i=1; $i<=$_GET['nb']; $i++){
    if(isset($_POST['sup'.$i])){
        include('connexion.php');
        $sqlQuery = "DELETE from adherent where id='".$_POST['id'.$i]."'";
        $sup = $db->prepare($sqlQuery);
        $sup->execute();
        header('location:adherent.php');
    }

    if(isset($_POST['mod'.$i])){
        echo "<form method='post' action='scriptModifierAdherent.php'>";
            echo "<table>";
                echo "<tr>";
                    echo "<td><input type='text' name='nom' value='".$_POST['nom'.$i]."'></td>";
                    echo "<td><input type='text' name='prenom' value='".$_POST['prenom'.$i]."'></td>";
                    echo "<td><input type='text' name='id' value='".$_POST['id'.$i]."'></td>";
                    echo "<td><button type='submit'>modifier</button></td>";
        
                "</tr>";
            "</table>";
        echo"</form>";
    }
}
  if(isset($_POST['ajouter'])){
  include('formulaire.html');}
?>