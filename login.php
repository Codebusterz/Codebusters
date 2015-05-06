<?php
	
	$bdd = mysqli_connect("localhost","root","","[projet]lolgames");

	if(isset($_POST["login"]))
	{
		$pseudo= $_POST["pseudo"];
		$mdp = sha1($_POST["mdp"]);
	 
		// Vérification des identifiants
		$req = $bdd->query('SELECT mdp FROM users WHERE pseudo = "'.$pseudo.'"');;
		$resultat = $req->fetch_array();
		$req->free();

		if (count($resultat) < 1)
		{
		    echo 'Mauvais identifiant ou mot de passe !';
		}
		elseif ($resultat['mdp'] == $mdp)
		{
			session_start();
		    $_SESSION['pseudo'] = $pseudo;
		    echo 'Vous êtes connecté !';
		}
	}

	include_once("inscription.html");
?>
