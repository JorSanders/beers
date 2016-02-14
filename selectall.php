<?php
include 'connect.php';

$sql = "SELECT * FROM belgisch_bier";
$result = mysqli_query($conn, $sql);

echo "<table border=\"1\">";
while(list($ID, $Naam, $Brouwer, $Type, $Gisting, $Kleur, $Alcoholperc)= mysqli_fetch_row($result)){
	
	echo "<tr>
	<td>$ID</td><td>$Naam</td><td>$Brouwer</td><td>$Type</td><td>$Gisting</td><td>$Kleur</td><td>$Alcoholperc</td>
	</tr>";
}
echo "</table>";

?>