/*
* Author Giildo
* Version 1.0
* Date 12/12/2017
* jQuery 3.4
*/

$(function(){
   var $window = $(window); //Récupère la fenêtre en objet
   var window_hauteur = $window.height(); //Récupère la hauteur de la page

   //Met à jour la hauteur de la page si redimensionnement
   $window.resize(function () {
      window_hauteur = $window.height();
   });

   //Crée un plugin jQuery à partir d'une fonction
   $.fn.parallaxe = function(xPos = "50%", facteurVitesse = 0.1, hauteurTotale = true, margeComprise = true) {
      var $this = $(this);
      var fct_hauteur;
      var topInitial;

      //récupère la position initiale de l'élément lorsque la fonction parallaxe est lancée
      $this.each(function(){
          topInitial = $this.offset().top;
      });

      if (hauteurTotale) {
         fct_hauteur = function(element) {
            return element.outerHeight(margeComprise); //Récupère la hauteur totale de l'élément, marge comprise = true par défaut
         };
      } else {
         fct_hauteur = function(element) {
            return element.height(); //Récupère juste la hauteur de l'élement sans les margin, padding et border
         };
      }

      //Fonction appelé si la page est redimensionnée ou scrollée
      function update(){
         var windowPos = $window.scrollTop();

         $this.each(function(){
            var $element = $(this);
            var elementTop = $element.offset().top;
            var elementHauteur = fct_hauteur($element);

            /*
            si :
            1. l'élement est plus haut que la fenêtre car la position la plus basse de celui-ci (position haute + hauteur) est inférieur à la hauteur du scroll
            2. l'élément est plus bas que la fenêtre car sa position sur la page est supérieur à la hauteur de la fenêtre + position du scroll
            On sort de update
            */
            if (elementTop + elementHauteur < windowPos || elementTop > windowPos + window_hauteur) {
               return;
            } else {
               $this.css('backgroundPosition', xPos + " " + Math.round((topInitial - windowPos) * facteurVitesse) + "px");
            }
         });
      }

      //lance update si la fenêtre est scrollé ou si elle est redimensionnée
      $window.scroll(update).resize(update);
      update(); //lance la fonction update la première fois que la page est chargée
   };
})
