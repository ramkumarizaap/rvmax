// 

  var map;
      function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};
        map = new google.maps.Map(document.getElementById('googleMap'), {
          center:myLatLng,
          zoom: 8
        });
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }

$(document).on('ready', function() {

  //   $(".lazy").slick({
  //         lazyLoad: 'ondemand', // ondemand progressive anticipated
  //         infinite: true
  //       });

  //   $(".v__slide").slick({
  //     lazyLoad: 'ondemand', // ondemand progressive anticipated
  //     infinite: true
  //   });

  //   $(".feed__slide").slick({
  //     lazyLoad: 'ondemand', // ondemand progressive anticipated
  //     arrows: false,
  //     infinite: true,
  //     autoplay: true,
  // autoplaySpeed: 2000
  //   });

  $('.triggerMenu').on('click', function(){
          $('nav, body, header, .triggerMenu').toggleClass('open');
        });

        function setClick(){
          var windowWidth = $(window).width();
          if(windowWidth <= 1023) {
            
            
            $('.navLeft > ul > li > a').addClass('mainLink');
            $('ul.subLinks').parent().find('a').removeClass('mainLink');
            $('nav ul > li > a.mainLink').click(function(){
              $('nav, body, header, .triggerMenu').removeClass('open');
            });
            
            $('nav ul li').click(function(){
              $(this).find('.subLinks').addClass('subLinksOpen');
              //return false;
            });
          }
        }

        $(window).resize(function(){
          setClick();
        });

        $(window).bind('orientationchange', function(){
          setClick();
        });

        setClick();

        if($(window).scrollTop() > 100) {
          $('#introWrapper').addClass('sticky');
        } else {
          $('#introWrapper').removeClass('sticky');
        }

      // Menu End


        $(".lazy").slick({
            lazyLoad: 'ondemand', // ondemand progressive anticipated
            infinite: true
        });

        $(".v__slide").slick({
            lazyLoad: 'ondemand', // ondemand progressive anticipated
            infinite: true
        });

        $(".feed__slide").slick({
            lazyLoad: 'ondemand', // ondemand progressive anticipated
            arrows: false,
            infinite: true,
            autoplay: true,
        autoplaySpeed: 2000
        });
      $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        arrows: false,
        focusOnSelect: true
      });
      $( "#tabs" ).tabs();

      $('.gallery').featherlightGallery({
          gallery: {
            fadeIn: 300,
            fadeOut: 300
          },
          openSpeed:    300,
          closeSpeed:   300
        });
        $('.gallery2').featherlightGallery({
          gallery: {
            next: 'next »',
            previous: '« previous'
          },
          variant: 'featherlight-gallery2'
        });

$("form#ContactSales").submit(function(){
   input = $("form#ContactSales input,select,textarea");
   valid = true;
   $(".error").hide();
   $(".err-phone-number").hide();
   input.each(function(i){
    attr = $(this).attr("name");
    if($(this).val()=='')
    {
      $(".err-"+attr).show();
      valid = false;
    }
    else
    {
      $(".err-"+attr).hide();
    }
   });

    if($.isNumeric($("form#ContactSales input[name='phone']").val()) == false && $("form#ContactSales input[name='phone']").val()!='')
    {
      valid = false;
      $(".err-phone-number").show();
    }
    return valid;
});

$(".close").click(function(){
  $(".alert").hide();
});

});


/* Tab */
  $('.tabTitle a').click(function(e){

  if(!$(this).hasClass('active')){
    $('.tabTitle a').removeClass('active');
    $(this).addClass('active');
    var tabIdentity = $(this).data('tab');
    $('.tabFeature').hide();
    $('#'+tabIdentity).fadeIn(800);
  }

    return false;

  });

/* Resize Function */
if(!Modernizr.touch) { 
$(window).resize(function(){
  /* Init function */
  
});
}

/* Orientation Function */
$(window).on("orientationchange",function(){
  /* Init function */
  
});

