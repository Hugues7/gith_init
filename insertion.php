<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO utilisateurs VALUES (NULL,'".$_POST['prenom']."','".$_POST['nom']."', '".$_POST['email']."')";

if ($conn->query($sql) == TRUE) {
    echo "Nouvel enregistrement créé avec succès!";
} 
else {
    echo "Erreur de connexion";
}

echo "</br><a href='index.php'>retour à la page d'accueil</a>";

$conn->close();
?> 