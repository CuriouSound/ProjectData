// definititon de variable vide pour les rendre globale
var longitude = "";
var latitude =  "";

function getLocation() {
  // si le navigateur le permet on prends sa position avec son autorisation sinon on affiche un message pas supporte
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } 
  else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  };
};

function showPosition(position) {

  // sert a afficher longitude et latitude
  // var x = document.getElementById("demo");
  // x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;

  longitude = position.coords.longitude;
  latitude = position.coords.latitude; 
   
  // requete a l'api en demandant la pos on concatene les variables ; on spécifie à la fin le langage de la réponse ; ça permet d'avoir le nom du pays toujours en Anglais, pour que Spotify fasse la bonne recherche.
  var lon="lon="+longitude;
  var lat="lat="+latitude;

  //dupliquer cette requete pour avoir le nom en Français
  var url = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&"+ lon + '&' + lat +"&"+"accept-language=en";

    $.ajax({
        url: url,
        
    })
    .done(function( response ) {
      // le nom du pays se situe dans la case address, on l'affiche dans #response
      let paysreponse = response.address.country;

      // On peut ensuite utiliser la variable paysreponse comme élément de la requête à l'API spotify

    });
    
    var urlfr = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&"+ lon + '&' + lat +"&"+"accept-language=fr";
    $.ajax({
      url: urlfr,
    })
    .done(function( response ) {
      // sert a afficher le contenu du pays
      var divReponse = document.getElementById('reponse');
      // le nom du pays se situe dans la case address, on l'affiche dans #response
      let paysreponsefr = response.address.country;
      
      divReponse.innerHTML = "Le top des playlists écoutées dans le pays : "+paysreponsefr+".";
      
    });
}


//Ces fonctions s'effectuent quand la page est chargée
$('document').ready(function(){

    //appel de la fonction qui géolocalise
    getLocation();
  
    //code du carousel
    var sldsToShow = 3;
    
    if (parseInt($(window).width()) < 700) {
      sldsToShow = 1;
    }
    
    $(".carousel__container").slick({
      rows: 1,
      slidesToShow: sldsToShow,
      prevArrow: "<img src='images/caret_left.png' data-role='none' class='slick-prev'>",
      nextArrow: "<img src='images/caret_right.png' data-role='none' class='slick-next'>"
    });
      
    $('.mob-menu').click(function(){
      $('.dropdown').toggle();
    });



});