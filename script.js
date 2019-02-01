$('document').ready(function(){
  
    var sldsToShow = 3;
    
    if (parseInt($(window).width()) < 700) {
      sldsToShow = 1;
    }
    
    $(".carousel__container").slick({
      rows: 1,
      slidesToShow: sldsToShow,
      prevArrow: "<img src='https://raw.githubusercontent.com/rnas/frontend-test/master/assets/caret_left.png' data-role='none' class='slick-prev'>",
      nextArrow: "<img src='https://raw.githubusercontent.com/rnas/frontend-test/master/assets/caret_right.png' data-role='none' class='slick-next'>"
    })
      
    $('.mob-menu').click(function(){
      $('.dropdown').toggle();
    })
  });
