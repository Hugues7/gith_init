<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM utilisateurs WHERE email ='".$_POST["email_selection"]."'";

$result = $conn->query($sql);

echo "<table border='2'>
		<tr>
			<td><strong>id</strong></td>
			<td><strong>Prenom</strong></td>
			<td><strong>Nom</strong></td>
			<td><strong>Email</strong></td>
		</tr>";

if ($result->num_rows > 0) {
	for($i=1;$i<=$result->num_rows;$i++){
		$row = $result->fetch_assoc();
		
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["prenom"]."</td>";
		echo "<td>".$row["nom"]."</td>";
		echo "<td>".$row["email"]."</td>";
		echo"</tr>";
	}
}
else {
	echo "0 resultats";
}

echo "</table>
</br>
<a href='index.php'>retour à la page d'accueil</a>";

$conn->close();
?> 