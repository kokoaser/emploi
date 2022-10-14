<?php

include "jeune.php";

if(isset($_post["nom"]) && isset($_post["prenom"]) && isset($_post["phone"]) && isset($_post["number"]) && isset($_post["demande"]) && isset($_post["date"]) && isset($_post["gender"]))

{
    $_nom=$_post["nom"];
    $_prenom=$_post["prenom"];
    $_contact=$_post["phone"];
    $_AEJ=$_post["number"];
    $_motif=$_post["demande"];
    $_date=$_post["date"];
    $_sexe=$_post["gender"];
    $_req= mysqli_query($_link, "insert into visiteur(nom,prenom, contact, AEJ, motif, date, sexe) value ('$_nom', '$_prenom', '$_contact', '$_AEJ', '$_motif', '$_date', '$_sexe')");


if($_req)

{
    echo "insertion effectuée";
}
else
{
    echo "erreur d'insertion";
}
 }



?>