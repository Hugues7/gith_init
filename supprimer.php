<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE FROM utilisateurs WHERE id ='".$_POST["idsuppression"]."'";

if ($conn->query($sql) == TRUE) {
    echo "Enregistrement supprimé avec succès!";
} 
else {
    echo "Erreur de connexion";
}

echo "</br><a href='index.php'>retour à la page d'accueil</a>";

$conn->close();
?> 