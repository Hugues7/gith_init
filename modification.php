<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "UPDATE utilisateurs
        SET prenom = '".$_POST["prenom"]."', nom = '".$_POST["nom"]."',
		email = '".$_POST["email"]."' 
		WHERE id ='".$_POST["idmodification"]."'";

if ($conn->query($sql) == TRUE) {
    echo "Enregistrement mis à jour avec succès!";
} 
else {
    echo "Erreur de connexion";
}

echo "</br><a href='index.php'>retour à la page d'accueil</a>";

$conn->close();
?> 