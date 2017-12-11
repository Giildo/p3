<!DOCTYPE html>
<html lang="Fr">
<head>
	<title>Festival de Films en Plein Air</title>
	<meta charset="utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,0);">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#jojotique_menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand" id="a_top">Festival de Films en Plein Air</a>
			</div>
			<div class="collapse navbar-collapse" id="jojotique_menu">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#actualites">Actualités</a></li>
					<li><a href="#presentation_festival">Le festival</a></li>
					<li><a href="#presentation_film">La programmation</a></li>
					<li><a href="#footer">Nous connaitre</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<header id="header" class="row">
			<div>
				<h1>Festival du Film de Plein Air de Monceau</h1>
				<h2>Du 5 au 8 août de 18h à minuit</h2>
			</div>
			<img src="images/image_couverture.jpg" class="col-xs-12" />
		</header>

		<section id="actualites" class="row">
			<h2 class="col-xs-12">Actualités</h2>
			<div class="col-xs-12">
				<div class="row">
					<h3 class="col-xs-12">Mise en ligne des films</h3>
					<h4 class="col-xs-12">10/12/2017 - 21h02</h4>
					<p class="col-xs-12">La liste des films vient d'être mise en ligne. Vous pouvez la consulter en vous rendant sur l'onglet <a href="#presentation_film" id="a_actualites">"La programmation "</a>.</p>
				</div>
				<div class="row">
					<h3 class="col-xs-12">Ouverture des inscriptions en ligne</h3>
					<h4 class="col-xs-12">05/12/2017 - 17h42</h4>
					<p class="col-xs-12">Le module d'inscription pour les projections a été mis en ligne. Les projections sont ouvertes à tous, mais il est important de s'inscrire en amont afin que nous puissions estimer le nombre de personnes présentes.</p>
				</div>
				<div class="row">
					<h3 class="col-xs-12">Autorisation pour le Parc Monceau</h3>
					<h4 class="col-xs-12">01/12/2017 - 18h30</h4>
					<p class="col-xs-12">La mairie nous a donné les autorisations nécessaires pour la projection des films. Le festival se tiendra du 5 au 8 août 2018.<br />
					Les projections se feront du 18h à minuit.</p>
				</div>
			</div>
		</section>

		<section id="presentation_festival" class="row">
			<h2 class="col-xs-12">Présentation du festival</h2>
			<div class="col-xs-12">
				<div class="row" id="row_presentation_festival">
					<div class="col-md-6">
						<h3>Lieu</h3>
						<p>Le festival se déroulera au coeur du Parc Monceau à Paris. Un écran et des sièges seront installés près des balançoires au centre du parc.</p>
						<p>Accessible depuis la ligne 2 du métro, arrêt Monceau.</p>
						<h3>Dates et horaires</h3>
						<p>Le festival se déroulera du 5 au 8 août inclus.</p>
						<p>Chaque soir trois films seront projetés à 18h, 20h et 22h.</p>
						<p>Des horaires précis seront communiqués ultérieurement, lorsque la programmation des films sera définitive</p>
						<h3>Prix</h3>
						<p>Le festival est ouvert à tous et gratuit. Il est néanmoins nécessaire de s'inscrire en amont pour un soucis d'organisation.</p>
						<form action="index.php" method="post">
							<fieldset>
								<legend>Inscription</legend>
								<div class="form-group"><label for="nom">Nom et prénom</label><input type="text" id="nom" class="form-control"></div>
								<div class="form-group"><label for="date">Date</label><input type="date" id="date" class="form-control"></div>
								<div class="form-group"><label for="mail">Email</label><input type="email" id="mail" class="form-control"></div>
								<div class="form-group"><label for="tel">Téléphone</label><input type="tel" id="tel" class="form-control"></div>
								<input type="submit" name="Réserver" class="btn btn-primary pull-right">
							</fieldset>
						</form>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.8735531366547!2d2.3067663158246625!3d48.87968700716071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fbe98f714c3%3A0xe62425fddeddc402!2sParc+Monceau!5e0!3m2!1sfr!2sfr!4v1512950476989" class="col-md-6" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</section>

		<section id="presentation_film" class="row">
			<h2 class="col-xs-12">Programmation</h2>

			<div class="bloc_film col-md-offset-3 col-md-2 col-sm-6">
				<a href="#">
					<h3>2001 l'Odyssée de l'Espace</h3>
					<h4>5 août - 18h</h4>
					<img src="images/2001_lodyssee_de_lespace/1.jpg" id="img1" data-film="2001_lodyssee_de_lespace" />
				</a>
			</div>

			<div class="bloc_film col-md-2 col-sm-6 col-xs-12">
				<a href="#">
					<h3>Big Fish</h3>
					<h4>5 août - 20h</h4>
					<img src="images/big_fish/1.jpg" id="img2" data-film="big_fish" />
				</a>
			</div>

			<div class="bloc_film col-md-2 col-sm-6 col-xs-12">
				<a href="#">
					<h3>Edward aux Mains d'Argent</h3>
					<h4>5 août - 22h</h4>
					<img src="images/edward_aux_mains_d_argent/1.jpg" id="img3" data-film="edward_aux_mains_d_argent" />
				</a>
			</div>

			<div class="bloc_film col-md-offset-3 col-md-2 col-sm-6">
				<a href="#">
					<h3>Her</h3>
					<h4>6 août - 18h</h4>
					<img src="images/her/1.jpg" id="img4" data-film="her" />
				</a>
			</div>

			<div class="bloc_film col-md-2 col-sm-6 col-xs-12">
				<a href="#">
					<h3>Into the Wild</h3>
					<h4>6 août - 20h</h4>
					<img src="images/into_the_wild/1.jpg" id="img5" data-film="into_the_wild" />
				</a>
			</div>

			<div class="bloc_film col-md-2 col-sm-6 col-xs-12">
				<a href="#">
					<h3>La Haine</h3>
					<h4>6 août - 22h</h4>
					<img src="images/la_haine/1.jpg" id="img6" data-film="la_haine" />
				</a>
			</div>

			<div class="bloc_film col-md-offset-3 col-md-2 col-sm-6">
				<a href="#">
					<h3>Le Cercle des Poètes disparus</h3>
					<h4>7 août - 18h</h4>
					<img src="images/le_cercle_des_poetes_disparus/1.jpg" id="img7" data-film="le_cercle_des_poetes_disparus" />
				</a>
			</div>

			<div class="bloc_film col-md-2 col-sm-6 col-xs-12">
				<a href="#">
					<h3>Melancholia</h3>
					<h4>7 août - 20h</h4>
					<img src="images/melancholia/1.jpg" id="img8" data-film="melancholia" />
				</a>
			</div>

			<div class="bloc_film col-md-2 col-sm-6 col-xs-12">
				<a href="#">
					<h3>Réalité</h3>
					<h4>7 août - 22h</h4>
					<img src="images/realite/1.jpg" id="img9" data-film="realite" />
				</a>
			</div>

			<div class="bloc_film col-md-offset-3 col-md-2 col-sm-6">
				<a href="#">
					<h3>Requiem for a Dream</h3>
					<h4>8 août - 18h</h4>
					<img src="images/requiem_for_a_dream/1.jpg" id="img10" data-film="requiem_for_a_dream" />
				</a>
			</div>

			<div class="bloc_film col-md-2 col-sm-6 col-xs-12">
				<a href="#">
					<h3>Under the Skin</h3>
					<h4>8 août - 20h</h4>
					<img src="images/under_the_skin/1.jpg" id="img11" data-film="under_the_skin" />
				</a>
			</div>

			<div class="bloc_film col-md-2 col-sm-6 col-xs-12">
				<a href="#">
					<h3>Vol au-dessus d'un Nid de Coucou</h3>
					<h4>8 août - 22h</h4>
					<img src="images/vol_au_dessus_dun_nid_de_coucou/1.jpg" id="img12" data-film="vol_au_dessus_dun_nid_de_coucou" />
				</a>
			</div>

		</section>
	</div>

	<footer id="footer">
		<p>&copy Les films en Plein Air - Site réalisé par <a href="http://www.jojotique.fr">Jojotique</a></p>
	</footer>

	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(function(){
			//Mouvement des photos
			var i = 1;
			var interval = 1;
			var chemins = new Array();

			for (var j = 0; j < 12; j++) {
				chemins[j] = 'images/' + $('#img' + (j + 1)).data('film');
			}

			setInterval(function(){
				if(interval == 2) {
					if(i >= 6)
					{
						i = 1;
					} else {
						i++;
					}
				}

				if(interval == 1) {
					for (var j = 0; j < 12; j = j+2) {
						$('#img' + (j + 1)).attr('src', chemins[j] + '/' + i + '.jpg');
					}
					interval = 2;
				} else {
					for (var j = 1; j < 12; j = j+2) {
						$('#img' + (j + 1)).attr('src', chemins[j] + '/' + i + '.jpg');
					}
					interval = 1;
				}
			}, 1500);

			//Mouvement fluide et scrollspy
			$('#a_actualites').on('click', function(e) {
				e.preventDefault();

				if(this.hash !== "")
				{
					var hash = this.hash;
					$('html, body').animate({
						scrollTop: $(this.hash).offset().top - 49
					}, 1000);
				}
			});

			$('li>a').on('click', function(e) {
				e.preventDefault();

				if(this.hash !== "")
				{
					var hash = this.hash;
					$('html, body').animate({
						scrollTop: $(this.hash).offset().top - 49
					}, 1000);
				}
			});

			//Nav qui disparait
			$(document).scroll(function(){
				var top = document.documentElement.scrollTop;

				if (top == 0) {
					$('.navbar-inverse').attr('style', 'background:rgba(0,0,0,0);border-color:rgba(0,0,0,0);');
				} else {
					$('.navbar-inverse').removeAttr('style');
				}
			});

			$('#a_top').click(function(e){
				e.preventDefault();

				$('html').animate({
					scrollTop: '0'
				}, 1000);
			});
		})
	</script>
</body>
</html>
