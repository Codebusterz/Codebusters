<?php

	if (isset($_POST["valider"])) {
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$pseudo= $_POST["pseudo"];
	$email = $_POST["email"];
	$mdp = sha1($_POST["mdp"]);
	$age = $_POST["age"];

	$bdd = mysqli_connect("localhost","root","","[projet]lolgames");
	$query = " INSERT INTO users (nom, prenom, pseudo, mdp, email, age) VALUES ('".$nom."','".$prenom."','".$pseudo."','".$mdp."','".$email."','".$age."'); ";
	$res = mysqli_query($bdd, $query) or die(mysql_error($bdd));

}

	include_once("inscription.html");
?>