<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erro World Sound</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Righteous|Shrikhand|Poppins" rel="stylesheet"> 
    <link rel="shortcut icon" type="image/svg" href="Images/logoicon.svg">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    
</head>

<body>

<header>
<img src="images/banner.png" class="img-fluid" alt="Responsive image">
<img id="logo" src="images/logo.svg" alt="logo ERRO World Sound">
</header>

<main>
<section class="container">
  <div class="row justify-content-center">
  <h1 class="titre">La musique autour de vous</h1>
  </div>
</section>

<section class="container">
  <div class="row justify-content-center">
    <div class="card col-md-4" >
      <p>
        Playlist des nouvelles sorties
      </p>
       <div id="playlist-new-sorties">
        <div class="card-body">
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
        </div>
    </div>
    <div class="card col-md-4 offset-md-1">
      <p>
        Les 50 titres les plus écoutés dans le pays
      </p>
      <div id="reponse-50titres">
        <script id="user-profile-template"  type="text/x-handlebars-template">
          <a href="{{playlists.items.0.external_urls.spotify}}"> <img class="media-object" width="150" src="{{playlists.items.0.images.0.url}}"/></a>
          <p>{{playlists.items.0.name}}</p>
        </div>
      </script>
      </div>
    
      <div class="card-body">
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
</div>
</section>


<section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <section class="container">
      <div class="row justify-content-center">
        <script>

          fetch('https://translation.googleapis.com/language/translate/v2&')
          .then(function(response) {
            return response.json();
          })
          .then(function(myJson) {
            console.log(JSON.stringify(myJson));
          });
          let url = "";

        </script>
          <p id="reponse" class="col-md-12">Le top des playlists écoutées</p>
      </div>
  </section>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="carousel__container">
          <div class="car__item" id="playlist-basic">
            <h1>9</h1>
            
              <p>Basic plan</p>
             
          </div>
          <div class="car__item" id="playlist-medium">
            <h1>49</h1>
            <p>Medium plan</p>
          </div>
          <div class="car__item"  id="business">
            <h1>99</h1>
            <p>Business plan</p>
          </div>
          <div class="car__item" id="master">
            <h1>149</h1>
            <p>Master plan</p>
          </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="carousel__container">
          <div class="car__item">
            <h1>9</h1>
            <p>Basic plan</p>
          </div>
          <div class="car__item">
            <h1>49</h1>
            <p>Medium plan</p>
          </div>
          <div class="car__item">
            <h1>99</h1>
            <p>Business plan</p>
          </div>
          <div class="car__item">
            <h1>149</h1>
            <p>Master plan</p>
          </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="carousel__container">
          <div class="car__item">
            <h1>9</h1>
            <p>Basic plan</p>
          </div>
          <div class="car__item">
            <h1>49</h1>
            <p>Medium plan</p>
          </div>
          <div class="car__item">
            <h1>99</h1>
            <p>Business plan</p>
          </div>
          <div class="car__item">
            <h1>149</h1>
            <p>Master plan</p>
          </div>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</section>

</main>

<footer>
<section class="container">
      <div class="row justify-content-end">
        © ERRO - 2019  
      </div>
</section>
</footer>

<!-- code Robin -->
<!-- 
<div ></div>
        <div id="demo"></div>
        
        <p id="demo"></p> -->


<!-- script jquery Robin -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.1/handlebars.min.js"></script>

<!-- script -->
<script src="script.js"></script>
</body>

</html>