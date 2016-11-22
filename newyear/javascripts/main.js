 $(window).load(function() {
 $(".slides img").click(function(){
 var iframe = $(this).data("video");
 $(this).parent().append(iframe);
 $(this).remove();
 });
  	$('#menu').flexslider({
     animation: "slide",
     controlNav: false,
     animationLoop: false,
     slideshow: true,
     itemWidth: 180,
     itemMargin: 10,
     asNavFor: '#slider'
   });
    $('#vidos').flexslider({
      animation: "slide",
      controlNav: true,slideshowSpeed:8000,
      animationLoop: true,
      slideshow: true,   itemMargin: 5,
    });
   $('#slider').flexslider({
     animation: "slide",
     controlNav: false,slideshowSpeed:5000,
     animationLoop: true,
     slideshow: true,   itemMargin: 5,
     sync: "#menu"
   });
  	$('#persona').flexslider({
  	  animation: "slide",
  	  controlNav: false,slideshowSpeed:5000,
  	  animationLoop: true,
  	  slideshow: true,   itemMargin: 5,
  	});
  		
   });
    $(function() {
    $(".vidos").click(function(e){
    e.preventDefault();
    $(".panoscreen").fadeOut(500);
    $(".panorama").append('<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sru!2s!4v1419402967038!6m8!1m7!1s47undcvJaaAAAAQY_SSX9Q!2m2!1d55.03429171333196!2d82.91661466452729!3f78.34681252991572!4f-5.449799442989203!5f0.7820865974627469"  class="pano" frameborder="0"></iframe>');
    
    });
   // $.mask.definitions['*'] = "[A-Fa-f0-9]";
    $("input[type='tel'],.phone").inputmask("mask", {"mask": "+7(999) 999-9999"}); //specifying fn & options    
    
    
  //  $(".mail").inputmask('email');
    
    
    var is_touch_device = ("ontouchstart" in window) || window.DocumentTouch && document instanceof DocumentTouch;
    if(!is_touch_device){
    $('.popover-markup>.tooltipmap').popover({
        html: true,
        trigger:"hover",
        title: function () {
            return $(this).parent().find('.head').html();
        },
        content: function () {
            return $(this).parent().find('.content').html();
        }
    });
  
    }
    
    
    Mapstyle = [{"stylers":[{"hue":"#ff1a00"},{"invert_lightness":true},{"saturation":-100},{"lightness":33},{"gamma":0.5}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2D333C"}]}];   var myLatlng = new google.maps.LatLng(55.034571, 82.919474);
	Mapstyle1 = [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}];
        var myOptions = {
             zoom: 17,
               disableDefaultUI: true,
             center: myLatlng,
    		  scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
            styles:Mapstyle1,
             mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var myOptions1 = {
             zoom: 16,
               disableDefaultUI: true,
             center: new google.maps.LatLng(55.034267, 82.916674),
        	  scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
            styles:Mapstyle,
             mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
        var image = './point113.png';
        
        var marker1 = new google.maps.Marker({
        	icon: image,
             position: new google.maps.LatLng(55.034267, 82.916674),
          map: map });
          var map1 = new google.maps.Map(document.getElementById("map-tooltip"), myOptions);
          var marker1 = new google.maps.Marker({
               position: new google.maps.LatLng(55.034267, 82.916674),
            map: map1 });
          $(".tooltipmap").on('mouseover click',function(){
          setTimeout(function(){
          map1 = new google.maps.Map(document.getElementById("map-tooltip"), myOptions1);
          
           var marker1 = new google.maps.Marker({
                position: new google.maps.LatLng(55.034267, 82.916674),
                map: map1
            });
          },100);
          });  
            
    $("#intro").css("min-height",$(window).height());
          $('#slides').superslides({
       animation:'slide',
        play:4000,inherit_height_from:'#intro',
        pagination:false
        
      });
      var owl = $("#owl-carousel-works");
        owl.owlCarousel({
        //Autoplay
            autoPlay : true,
            stopOnHover : false,
            itemsCustom: [
                [0, 1],
                [450, 2],
                [600, 3],
                [700, 3],
                [1000, 4],
                [1200, 4],
                [1400, 4],
                [1600, 4]
            ],
            navigation: false
        });
    var owl1 = $("#owl-carousel-number");
        owl1.owlCarousel({
        //Autoplay
            autoPlay : true,
            stopOnHover : false,
            itemsCustom: [
                [0, 1],
                [450, 4],
                [600, 6],
                [700, 6],
                [1000, 6],
                [1200, 6],
                [1400, 6],
                [1600, 6]
            ],
            scrollPerPage:true,
            navigation: false
        });
    
    // how many decimal places allows
    var decimal_places = 1;
    var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 10;
    
      // Animated Number
          $('#numbers ul').appear(function () {
              $('#number1').animateNumber({number: 4008}, 1500);
              $('#number2').animateNumber({number: 5748}, 1500);
              $('#number3').animateNumber({number: 18156}, 1500);
              $('#number4').animateNumber({number: 560}, 1500);
              $('#number5').animateNumber( {
                    number: 2.3 * decimal_factor,
              
                    numberStep: function(now, tween) {
                      var floored_number = Math.floor(now) / decimal_factor,
                          target = $(tween.elem);
              
                      if (decimal_places > 0) {
                        // force decimal places even if they are 0
                        floored_number = floored_number.toFixed(decimal_places);
              
                        // replace '.' separator with ','
                        floored_number = floored_number.toString().replace('.', ',');
                      }
              
                      target.text( floored_number);
                    }
                    }, 1500);
              $('#number6').animateNumber({number: 24325}, 1500);
          }, {accX: 0, accY: -200});
    });