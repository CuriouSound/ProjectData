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
      let pays = response.address.country;
      let countryCode = response.address.country_code;
                        /**
         * Obtains parameters from the hash of the URL
         * @return Object
         */
         function getHashParams() {
          var hashParams = {};
          var e, r = /([^&;=]+)=?([^&;]*)/g,
          q = window.location.hash.substring(1);
          while ( e = r.exec(q)) {
           hashParams[e[1]] = decodeURIComponent(e[2]);
         }
         return hashParams;
       }

       var userProfileSource = document.getElementById('user-profile-template').innerHTML,
       userProfileTemplate = Handlebars.compile(userProfileSource);

     
var container = document.getElementById('reponse-50titres');
var container2 = document.getElementById('playlist-new-sorties');
var container3 = document.getElementById('playlist-basic');
var container4 = document.getElementById('playlist-medium');
var container5 = document.getElementById('business');
var container6 = document.getElementById('master');


container.url =  "https://api.spotify.com/v1/search?query=top%2050%20"+pays+"&type=playlist";

container2.url = "https://api.spotify.com/v1/search?query=top+50&type=playlist&market="+countryCode+"&offset=0&limit=20";



var error = false;

if (error) {
  alert('There was an error during the authentication');
} else {
  if (access_token) {


            $.ajax({
             url: container.url, 
             headers: {
              'Authorization': 'Bearer ' + access_token
            },

               // nous passons par le template pour afficher les réponses

               success: function(response) {

                $.ajax({
                 url: response.playlists.items[0].tracks.href, 
                 headers: {
                  'Authorization': 'Bearer ' + access_token
                },

                   // nous passons par le template pour afficher les réponses

                   success: function(response2) {

                    response.playlists.items[0].tracks = response2.items;



                    console.log(response);
                    container.innerHTML = userProfileTemplate(response);
                    
                    $('#login').hide();
                    $('#loggedin').show();
                  }
                });
              }
            });

            $.ajax({
             url: container2.url, 
             headers: {
              'Authorization': 'Bearer ' + access_token
            },

               // nous passons par le template pour afficher les réponses

               success: function(response) {

                $.ajax({
                 url: response.playlists.items[0].tracks.href, 
                 headers: {
                  'Authorization': 'Bearer ' + access_token
                },

                   // nous passons par le template pour afficher les réponses

                   success: function(response3) {

                    response.playlists.items[0].tracks = response3.items;



                    console.log(response);
                    container2.innerHTML = userProfileTemplate(response);
                    
                    $('#login').hide();
                    $('#loggedin').show();
                  }
                });
              }
            });
            $.ajax({
             url: container3.url, 
             headers: {
              'Authorization': 'Bearer ' + access_token
            },

               // nous passons par le template pour afficher les réponses

               success: function(response) {

                $.ajax({
                 url: response.playlists.items[0].tracks.href, 
                 headers: {
                  'Authorization': 'Bearer ' + access_token
                },

                   // nous passons par le template pour afficher les réponses

                   success: function(response4) {

                    response.playlists.items[0].tracks = response4.items;



                    console.log(response);
                    container3.innerHTML = userProfileTemplate(response);
                    
                    $('#login').hide();
                    $('#loggedin').show();
                  }
                });
              }
            });
            $.ajax({
             url: container4.url, 
             headers: {
              'Authorization': 'Bearer ' + access_token
            },

               // nous passons par le template pour afficher les réponses

               success: function(response) {

                $.ajax({
                 url: response.playlists.items[0].tracks.href, 
                 headers: {
                  'Authorization': 'Bearer ' + access_token
                },

                   // nous passons par le template pour afficher les réponses

                   success: function(response5) {

                    response.playlists.items[0].tracks = response5.items;



                    console.log(response);
                    container4.innerHTML = userProfileTemplate(response);
                    
                    $('#login').hide();
                    $('#loggedin').show();
                  }
                });
              }
            });
            $.ajax({
             url: container4.url, 
             headers: {
              'Authorization': 'Bearer ' + access_token
            },

               // nous passons par le template pour afficher les réponses

               success: function(response) {

                $.ajax({
                 url: response.playlists.items[0].tracks.href, 
                 headers: {
                  'Authorization': 'Bearer ' + access_token
                },

                   // nous passons par le template pour afficher les réponses

                   success: function(response6) {

                    response.playlists.items[0].tracks = response6.items;



                    console.log(response);
                    container5.innerHTML = userProfileTemplate(response);
                    
                    $('#login').hide();
                    $('#loggedin').show();
                  }
                });
              }
            });
            $.ajax({
             url: container4.url, 
             headers: {
              'Authorization': 'Bearer ' + access_token
            },

               // nous passons par le template pour afficher les réponses

               success: function(response) {

                $.ajax({
                 url: response.playlists.items[0].tracks.href, 
                 headers: {
                  'Authorization': 'Bearer ' + access_token
                },

                   // nous passons par le template pour afficher les réponses

                   success: function(response7) {

                    response.playlists.items[0].tracks = response7.items;



                    console.log(response);
                    container6.innerHTML = userProfileTemplate(response);
                    
                    $('#login').hide();
                    $('#loggedin').show();
                  }
                });
              }
            });



          } else {
              // render initial screen
              $('#login').show();
              $('#loggedin').hide();
            }


          }
          container.innerHTML = pays;


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
    
   

    $('.mob-menu').click(function(){
      $('.dropdown').toggle();
    });



  });