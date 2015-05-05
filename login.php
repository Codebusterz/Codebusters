<?php

	$bdd = mysqli_connect("localhost","root","","[projet]lolgames");

	if(isset($_POST["login"]))
	{
		$pseudo= $_POST["pseudo"];
		$mdp = sha1($_POST["mdp"]);
	 
	    $query = "INSERT INTO login (pseudo, mdp) VALUES ('".$pseudo."','".$mdp."'); ";
	    $comp1 = "SELECT * FROM `login` natural join users";

		if ($comp1 == TRUE)
		{
			echo "connected!!!!!!!!!!!!!";
		}
		else
		{
			echo "looser";
		}
		mysqli_query($bdd,"truncate login");
	    $res = mysqli_query($bdd, $query) or die(mysql_error($bdd));
	}

	include_once("inscription.html");
?>
