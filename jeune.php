<?php 
$_visiteur="root";
$_mdp="";
$_db="emploi";
$_SERVER="localhost";



$_link=mysqli_connect($_SERVER, $_visiteur,$_mdp,$_db);

if($_link)
{
   // echo"connexion etablie";
}
else
{
    die(mysqli_connect_error());
}










?>