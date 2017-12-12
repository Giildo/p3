/*
* Author Giildo
* Version 1.0
* Date 12/12/2017
* jQuery 3.4
*/

$(function(){
   var $window = $(window); //Récupère la fenêtre en objet
   var windowHeight = $window.height(); //Récupère la hauteur de la page

   //Met à jour la taille si changement
   $window.resize(function () {
      windowHeight = $window.height();
   });

   //Crée un plugin jQuery
   $.fn.parallax = function(xpos = "50%", speedFactor = 0.1, outerHeight = true) {
      var $this = $(this);
      var getHeight;
      var firstTop;
      var paddingTop = 0;

      //get the starting position of each element to have parallax applied to it
      $this.each(function(){
          firstTop = $this.offset().top;
      });

      if (outerHeight) {
         getHeight = function(jqo) {
            return jqo.outerHeight(true); //Récupère la hauteur totale de l'élément, true = margin compris
         };
      } else {
         getHeight = function(jqo) {
            return jqo.height(); //Récupère juste la hauteur de l'élement sans les margin, padding et border
         };
      }

      // function to be called whenever the window is scrolled or resized
      function update(){
         var pos = $window.scrollTop();

         $this.each(function(){
            var $element = $(this);
            var top = $element.offset().top;
            var height = getHeight($element);

            /*
            si :
            1. l'élement est plus haut que la fenêtre car la position la plus basse de celui-ci (position haute + hauteur) est inférieur à la hauteur du scroll
            2. l'élément est plus bas que la fenêtre car sa position sur la page est supérieur à la hauteur de la fenêtre + position du scroll
            On sort de update
            */
            if (top + height < pos || top > pos + windowHeight) {
               return;
            }

            $this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px");
         });
      }

      //lance update si la fenêtre est scrollé ou si elle est redimensionnée
      $window.scroll(update).resize(update);
      update();
   };
})
