<!DOCTYPE html>
<!-- Created by CodeBusters Team [Axel GASTINE, Thibaud Boquet, Quentin Zmiro, Michael Fernandez] -->
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>LoL Games</title>
</head>
<body>
	<header>
		<a href="?p=index"><img src="logololgames.jpg" alt="logo" id="logo"></a>
	</header>
	<nav>
		<ul>
			<li><a href="?p=index">Accueil</a></li>
			<li><a href="?p=news">News</a></li>
			<li><a href="?p=articles">Articles</a></li>
			<li><a href="?p=azerty">404</a></li>
			<li><a href="?p=login">Compte</a></li>
		</ul>
	</nav>

	<div id="mainBlock">
		<?php
			if(isset($_GET["p"]) && !empty($_GET["p"]))
			{	
				if(file_exists('pages/'.$_GET["p"].'.php'))
				{
					include('pages/'.$_GET["p"].'.php');
				}
				else
				{
					include('pages/404.php');
				}
			}
			else
			{
				include('pages/index.html');
			}
		?>
	</div>

	<footer>
		<em>Created by CodeBusters Team<h6>Axel, Thibaud, Quentin, Michael</h6></em>
	</footer>
</body>
</html>
