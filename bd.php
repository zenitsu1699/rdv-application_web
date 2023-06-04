<?php
include "cnx.php";

include "insert.php";

// Retrieve data from the user table
$result = mysqli_query($link, "SELECT * FROM user");

// Display the data in an HTML table
echo "<table>";
echo "<tr><th>Nom</th><th>Prénoms</th><th>Numéro</th><th>Email</th><th>Sexe</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["nom"] . "</td><td>" . $row["prenoms"] . "</td><td>" . $row["numero"] . "</td><td>" . $row["mail"] . "</td><td>" . $row["sexe"] . "</td></tr>";
}
echo "</table>";

mysqli_close($link);
?>
