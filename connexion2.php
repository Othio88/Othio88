<?php
$host= "localhost";
$user = "root";
$pass = "root";
$base = "gestion_produit";
$con = mysqli_connect($host,$user,$pass,$base)
or die("Erreur de connexion".mysqli_connect_errno($con));
//echo "connexion reussie";

?>