<?php

//Si on a une info dans $_GET['page'], c'est la page demandée
if(isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    $page = 'Home'; //Si il n'y a rien dans $_GET['page'], on va sur la home
}

$page = ucfirst($page); //On passe la première lettre en majuscule car les controlleurs s'appellent FilmController.php et HomeController.php mais les URLs sont en général en minuscule

//On inclut le controller en fonction de la page demandée
if (is_file('Controllers/'.$page.'Controller.php')){
    include ('Controllers/'.$page.'Controller.php');  
} 
else {
     include ('404.php');  
}