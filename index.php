<?php session_start(); ?>
<?php unset($_SESSION) ?>
<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8"/>
			<title>Accueil Fast & Furious</title>
			<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
			<link rel="icon" href="/favicon.ico" type="image/x-icon">
			<link rel="stylesheet" href="A_css_principal_faf.css">
			<link rel="stylesheet" href="A_css_tablette_principal.css" media= "(min-width:379px) and (max-width:1059px)">
        	<link rel="stylesheet" href="A_css_smartphone_faf.css" media= "(max-width:379px)">
         	<!-- <link rel="stylesheet" href="A_css_pc_faf.css" media= "(min-width:800px) and (max-width:1280px)"> -->
		</head>

	<body>
		<header>
			<div id="menu-accordeon">
				<ul>
					<li><a href="index.php" title="Page d'accueil">Accueil</a></li>
					<li><a href="#" title="Acteurs">Acteurs</a>
						<ul>
							<li><a href="A_php_acteursff1.php">Fast 1</a></li>
							<li><a href="A_php_acteursff2.php">Fast 2</a></li>
							<li><a href="A_php_acteursff3.php">Fast 3</a></li>
							<li><a href="A_php_acteursff4.php">Fast 4</a></li>
							<li><a href="A_php_acteursff5.php">Fast 5</a></li>
							<li><a href="A_php_acteursff6.php">Fast 6</a></li>
							<li><a href="A_php_acteursff7.php">Fast 7</a></li>
							<li><a href="A_php_acteursff8.php">Fast 8</a></li>
						</ul>
					</li>
					<li><a href="#" title="Tous les Fast and Furious">Saga</a>
						<ul>
							<li><a href="A_php_sagaff1.php">Fast 1</a></li>
							<li><a href="A_php_sagaff2.php">Fast 2</a></li>
							<li><a href="A_php_sagaff3.php">Fast 3</a></li>
							<li><a href="A_php_sagaff4.php">Fast 4</a></li>
							<li><a href="A_php_sagaff5.php">Fast 5</a></li>
							<li><a href="A_php_sagaff6.php">Fast 6</a></li>
							<li><a href="A_php_sagaff7.php">Fast 7</a></li>
							<li><a href="A_php_sagaff8.php">Fast 8</a></li>
						</ul>
					</li>
					<li><a href="partage.php" title="Partage">Partage</a></li>
					<?php if($_SESSION){ ?>
					<li><a href="logout.php">Déconnexion</a></li>
					<?php }else{ ?>
					<li><a href="login.php" title="Connecte-toi">Connexion</a></li>
					<a href="signin.php" class="button" title="Inscris-toi">Inscription<a>
					<?php }; ?>
				</ul>
			</div>
		</header>

		<main>
			<section>
				<p id="une">A la Une</p>
				<aside>
					<img id="affiche_fast8"src="img\Accueil\affiche_fast8.jpg">
					<img id="affiche_fast8_2"src="img\Accueil\affiche_fast8_2.jpg">
					<iframe id="baaccueil" width="640" height="360" src="https://www.youtube.com/embed/JwMKRevYa_M" frameborder=""allowfullscreen></iframe>
				</aside>
					<p id="wordkey">Suspense Thriller Action Courses-poursuites Voiture Tunning</p>
					<iframe id="bonusvideo" width="640" height="360" src="https://www.youtube.com/embed/qSkGFKjXm7M" frameborder="0" allowfullscreen></iframe>
			</section>
		</main>	
				
		<footer>
			<aside>
				<img id="logofooter" src="img\Accueil\logo_faf_footer.png">
				<img id="universal_logo2" src="img\Accueil\universal_logo2.png" width="9%">
			</aside>
				<div id="menufooter">
					<ul>
						<li><a href="index.php" title="Page d'accueil">Accueil</a></li>
						<li><a href="#" title="Acteurs">Acteurs</a>
							<ul>
								<li><a href="A_php_acteursff1.php">Fast 1</a></li>
								<li><a href="A_php_acteursff2.php">Fast 2</a></li>
								<li><a href="A_php_acteursff3.php">Fast 3</a></li>
								<li><a href="A_php_acteursff4.php">Fast 4</a></li>
								<li><a href="A_php_acteursff5.php">Fast 5</a></li>
								<li><a href="A_php_acteursff6.php">Fast 6</a></li>
								<li><a href="A_php_acteursff7.php">Fast 7</a></li>
								<li><a href="A_php_acteursff8.php">Fast 8</a></li>
							</ul>
						</li>
						<li><a href="#" title="Tous les Fast and Furious">Saga</a>
							<ul>
								<li><a href="A_php_sagaff1.php">Fast 1</a></li>
								<li><a href="A_php_sagaff2.php">Fast 2</a></li>
								<li><a href="A_php_sagaff3.php">Fast 3</a></li>
								<li><a href="A_php_sagaff4.php">Fast 4</a></li>
								<li><a href="A_php_sagaff5.php">Fast 5</a></li>
								<li><a href="A_php_sagaff6.php">Fast 6</a></li>
								<li><a href="A_php_sagaff7.php">Fast 7</a></li>
								<li><a href="A_php_sagaff8.php">Fast 8</a></li>
							</ul>
						</li>
						<li><a href="partage.php" title="Partage">Partage</a></li>
						<?php if($_SESSION){ ?>
						<li><a href="logout.php">Déconnexion</a></li>
						<?php }else{ ?>
						<li><a href="login.php" title="Connecte-toi">Connexion</a></li>
						<a href="signin.php" class="button" title="Inscris-toi">Inscription</a>
						<?php }; ?>
	
						<div id="legende">
				          		<a title="legende">Fast and Furious |</a>
				          		<span> &copy; 2017 | </span>
				          		<a title="mentions légales">Mentions légales |</a>
			           	</div>
					</ul>

				</div>
		</footer>
	</body>
</html>