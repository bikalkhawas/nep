// box slider 

 $(document).ready(function() {
    $('.carousel').carousel({
      interval: 3000
    })
  });

// teacher

$(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
});


//shrink navbar

    $(document).on('scroll', function(){
      if($(this).scrollTop() > 570){
        $('.navbar').addClass('sticky');
      }
      else{
        $('.navbar').removeClass('sticky');
      }
    });


    $(document).scroll(function(){
       if ($(document).scrollTop() > 620){
        $(".slide").addClass("animated fadeInLeft");
        // }else{
        // $(".ani").removeClass("animated fadeInUp");
         }
    });

// animation

$(document).ready(function(){

    $(document).scroll(function(){
       if ($(document).scrollTop() > 0){
        $(".menuAni").addClass("animated slideInDown");
        // }else{
        // $(".ani").removeClass("animated fadeInUp");
         }
    });




    $(document).scroll(function(){
       if ($(document).scrollTop() > 50){
        $(".ani").addClass("animated fadeInUp");
        // }else{
        // $(".ani").removeClass("animated fadeInUp");
         }
    });

    $(document).scroll(function(){
       if ($(document).scrollTop() > 150){
        $(".ani1").addClass("animated fadeInUp");
        // }else{
        // $(".ani1").removeClass("animated fadeInUp");
         }
    });

    $(document).scroll(function(){
       if ($(document).scrollTop() > 250){
        $(".ani2").addClass("animated fadeInUp");
        // }else{
        // $(".ani2").removeClass("animated fadeInUp");
         }
    });

    $(document).scroll(function(){
       if ($(document).scrollTop() > 350){
        $(".ani3").addClass("animated fadeInUp");
        // }else{
        // $(".ani3").removeClass("animated fadeInUp");
         }
    });

    $(document).scroll(function(){
       if ($(document).scrollTop() > 800){
        $(".testi1").addClass("animated fadeInLeft");
        }else{
        $(".testi1").removeClass("animated fadeInleft");
         }
    });

    $(document).scroll(function(){
       if ($(document).scrollTop() > 800){
        $(".testi2").addClass("animated fadeInUp");
        }else{
        $(".testi2").removeClass("animated fadeInUp");
         }
    });

    $(document).scroll(function(){
       if ($(document).scrollTop() > 800){
        $(".testi3").addClass("animated fadeInRight");
        }else{
        $(".testi3").removeClass("animated fadeInRight");
         }
    });

 });




// accordion pluse minus goes here  (collapse)      
   jQuery('.accordion-toggle').click(function(){
      
      var has = jQuery(this);
      if(has.hasClass('collapsed')){
         jQuery(this).find('i').removeClass('fa-plus');
         jQuery(this).find('i').addClass('fa-minus');
      }
      else{
        jQuery(this).find('i').removeClass('fa-minus');
        jQuery(this).find('i').addClass('fa-plus');
      }
  })

// off canvas

    $(document).ready(function(){
             $('.slide-out-div').tabSlideOut({
                 tabHandle: '.handle',                              //class of the element that will be your tab
                 pathToTabImage: 'img/courses/enrollnowsmall.png',          //path to the image for the tab (optionaly can be set using css)
                 imageHeight: '122px',                               //height of tab image
                 imageWidth: '40px',                               //width of tab image    
                 tabLocation: 'right',                               //side of screen where tab lives, top, right, bottom, or left
                 speed: 300,                                        //speed of animation
                 action: 'click',                                   //options: 'click' or 'hover', action to trigger animation
                 topPos: '',                                   //position from the top
                 fixedPosition: false
                                                //options: true makes it stick(fixed position) on scroll
             });
           });



  
         

