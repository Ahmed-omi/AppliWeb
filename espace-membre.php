<?php

	session_start();

	if(!isset($_SESSION['pseudo'])){
		header("Refresh: 5; url=connexion.php");
		echo "Vous devez vous connecter pour accéder à l'espace membre.<br><br><i>Redirection en cours, vers la page de connexion...</i>";
		exit(0);
	}
	$Pseudo=$_SESSION['pseudo'];

	$mysqli=mysqli_connect('localhost','root','narbonne12','pseudo');
	if(!$mysqli) {
		echo "Erreur connexion BDD";
		exit(0);
	}

	$req=mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='$Pseudo'");
	$info=mysqli_fetch_assoc($req);

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport"    content="width=device-width, initial-scale=1.0">

		<title>Admin</title>

		<link rel="shortcut icon" href="assets/images/logo.png">

		<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css"
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/csss/style.css"


		<link rel="stylesheet" href="assets/css/main.css">
	</head>

	<body class="home">
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand" href="index.html">Play Cards</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li><a href="curd.php">CRUD</a></li>
						<li class="active"><a href="#">Member area</a></li>
						<li><a href="deconnexion.php">Disconnect</a></li>
					</ul>
				</div>
			</div>
		</div>


		<header id="head">
			<div class="container">
				<div class="row">
					<h1 class="lead">Welcome To The World of Mystry</h1>
					<h2 class="tagline">Try Your Luck</h2>
				</div>
			</div>
		</header>


		<div class="container text-center">
			<br> <br>
			<h2 class="thin">We Fall,We Raise but we Never Give up. Come try your luck cards are waiting for you</h2>
			<p class="text-muted">

			</p>
		</div>



			</section>
		</article>


		<section id="social">
			<div class="container">
				<div class="wrapper clearfix">
					<div class="addthis_toolbox addthis_default_style">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_button_linkedin_counter"></a>
						<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
					</div>
				</div>
			</div>
		</section>


			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-7 widget">
							<div class="widget-body">
								<p class="text-right">
									&copy; 2021 | Château de Cartes</p>
							</div>
						</div>
					</div>
				</div>
			</div>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="../../assets/js/vendor/popper.min.js"></script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<script src="../../assets/js/vendor/holder.min.js"></script>
		<script src="offcanvas.js"></script>


		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="assets/js/headroom.min.js"></script>
		<script src="assets/js/jQuery.headroom.min.js"></script>
		<script src="assets/js/template.js"></script>
	</body>
</html>
