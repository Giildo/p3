<!DOCTYPE html>
<html lang="Fr">
<head>
   <title>Festival de Films en Plein Air</title>
   <meta charset="utf-8" />
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<header>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
         <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#jojotique_menu">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Festival de Films en Plein Air</a>
         </div>
         <div class="collapse navbar-collapse" id="jojotique_menu">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#">Le festival</a></li>
               <li><a href="#">La programmation</a></li>
               <li><a href="#">Actualités</a></li>
               <li><a href="#">Nous connaitre</a></li>
            </ul>
         </div>
      </div>

   </nav>
</header>

<section class="container-fluid">
   <div class="row">
      <a href="#"><img src="images/2001_lodyssee_de_lespace/1.jpg" class="col-md-2 col-md-offset-3" id="img1" data-film="2001_lodyssee_de_lespace" /></a>
      <a href="#"><img src="images/2001_lodyssee_de_lespace/1.jpg" class="col-md-2" id="img2" /></a>
      <a href="#"><img src="images/2001_lodyssee_de_lespace/1.jpg" class="col-md-2" id="img3" /></a>
   </div>
</section>

<footer>
   <p>&copy Les films en Plein Air - Site réalisé par <a href="http://www.jojotique.fr">Jojotique</a></p>
</footer>

<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
<script
   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
   integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
   crossorigin="anonymous"></script>

<script type="text/javascript">
$(function(){
   var i = 0;
   var cheminFilm = 'images/' + $('#img1').data('film');

   setInterval(function(){
      if(i >= 6)
      {
         i = 1;
      } else {
         i++;
      }

      $('#img1').attr('src', cheminFilm + '/' + i + '.jpg');
   }, 2000);
})
</script>
</body>
</html>
