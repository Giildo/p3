<!DOCTYPE html>
<html lang="Fr">
<head>
	<title>Festival de Films en Plein Air</title>
	<meta charset="utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body data-spy="scroll" data-target=".navbar">

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
			<p class="col-xs-12">Présentation du festival</p>
		</section>

		<section id="presentation_film">
			<div class="row">
				<a href="#"><img src="images/2001_lodyssee_de_lespace/1.jpg" class="col-md-2 col-md-offset-3" id="img1" data-film="2001_lodyssee_de_lespace" /></a>
				<a href="#"><img src="images/big_fish/1.jpg" class="col-md-2" id="img2" data-film="big_fish" /></a>
				<a href="#"><img src="images/edward_aux_mains_d_argent/1.jpg" class="col-md-2" id="img3" data-film="edward_aux_mains_d_argent" /></a>
			</div>
			<div class="row">
				<a href="#"><img src="images/her/1.jpg" class="col-md-2 col-md-offset-3" id="img4" data-film="her" /></a>
				<a href="#"><img src="images/into_the_wild/1.jpg" class="col-md-2" id="img5" data-film="into_the_wild" /></a>
				<a href="#"><img src="images/la_haine/1.jpg" class="col-md-2" id="img6" data-film="la_haine" /></a>
			</div>
			<div class="row">
				<a href="#"><img src="images/le_cercle_des_poetes_disparus/1.jpg" class="col-md-2 col-md-offset-3" id="img7" data-film="le_cercle_des_poetes_disparus" /></a>
				<a href="#"><img src="images/melancholia/1.jpg" class="col-md-2" id="img8" data-film="melancholia" /></a>
				<a href="#"><img src="images/realite/1.jpg" class="col-md-2" id="img9" data-film="realite" /></a>
			</div>
			<div class="row">
				<a href="#"><img src="images/requiem_for_a_dream/1.jpg" class="col-md-2 col-md-offset-3" id="img10" data-film="requiem_for_a_dream" /></a>
				<a href="#"><img src="images/under_the_skin/1.jpg" class="col-md-2" id="img11" data-film="under_the_skin" /></a>
				<a href="#"><img src="images/vol_au_dessus_dun_nid_de_coucou/1.jpg" class="col-md-2" id="img12" data-film="vol_au_dessus_dun_nid_de_coucou" /></a>
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
			var i = 0;
			var chemins = new Array();

			for (var j = 0; j < 12; j++) {
				chemins[j] = 'images/' + $('#img' + (j + 1)).data('film');
			}

			setInterval(function(){
				if(i >= 6)
				{
					i = 1;
				} else {
					i++;
				}

				for (var j = 0; j < 12; j++) {
					$('#img' + (j + 1)).attr('src', chemins[j] + '/' + i + '.jpg');
				}
			}, 2000);

			$('#a_actualites').on('click', function(e) {
				e.preventDefault();

				if(this.hash !== "")
				{
					var hash = this.hash;
					$('html, body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				}
			});

			$('li>a').on('click', function(e) {
				e.preventDefault();

				if(this.hash !== "")
				{
					var hash = this.hash;
					$('html, body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				}
			});

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
