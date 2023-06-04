<?php

include "cnx.php";

// function inset($value)
// {
//     if (!empty($value)) {
//         return true;
//     } else {
//         return false;
//     }
// }


// if(inset($_POST["nom"]) && inset($_POST["prenoms"]) && inset($_POST["numero"])  && inset($_POST["mail"])  && inset($_POST["gender"]) ){

//     $nom= $_POST["nom"];
//     $prenoms= $_POST["prenoms"];
//     $numero= $_POST["numero"];
//     $mail= $_POST["mail"];
//     $sexe= $_POST["gender"];

//     function mysqli_querry($value)
// {
//     if (!empty($value)) {
//         return true;
//     } else {
//         return false;
//     }
// }

//     $req= mysqli_querry($link, "INSERT INTO  user(nom, prenoms, numero, mail, sexe) VALUES ('$nom', '$prenoms', '$numero', '$mail', '$sexe') " );

//     if($req){

//         echo "inserction effectuer";
//     }else{

//         echo "erreur d'inserction";
//     }
// }



$t_nom= $_POST["nom"];
$t_prenoms= $_POST["prenoms"];
$t_numero= $_POST["numero"];
$t_mail= $_POST["mail"];
$t_specialite= $_POST["specialite"];
$t_sexe= $_POST["gender"];



$sql_r = "INSERT INTO  user(nom, prenoms, numero, mail, specialite, sexe) VALUES ('$t_nom', '$t_prenoms', '$t_numero', '$t_mail', '$t_specialite', '$t_sexe')";


if (mysqli_query($link, $sql_r)) {
    echo "Nouveau enregistrement créé avec succès";
} else {
    echo "Erreure trouvé";
}



// ?>
