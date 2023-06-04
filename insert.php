<?php

include "cnx.php";


$t_nom= $_POST["nom"];
$t_prenoms= $_POST["prenoms"];
$t_numero= $_POST["numero"];
$t_mail= $_POST["mail"];
$t_specialite = $_POST["specialite"];
$t_sexe= $_POST["gender"];



$sql_r = "INSERT INTO  user(nom, prenoms, numero, mail, Specialite, sexe) VALUES ('$t_nom', '$t_prenoms', '$t_numero', '$t_mail', '$t_specialite' '$t_sexe')";


if (mysqli_query($link, $sql_r)) {
    echo "Nouveau enregistrement créé avec succès";
} else {
    echo "Erreure trouvé";
}



// ?>
