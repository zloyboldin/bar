/*
 * Ensconce
 * (c) 2013, Web factory Ltd
 */
 
$(function() {
	
	
	$(".targ_link").click(function(){
		$(".menu-mobile .nav-menu").toggle();
		
		
	});
	$.mask.definitions['*'] = "[A-Fa-f0-9]";

			   $("input.phone").mask("+7(999)999-99-99",{placeholder:" "})
	  
	           
    $(".form-btn").click(function() { 
		targetform = $(this).parent().parent();
        //get input field values
        var user_name       = targetform.find('.name').val(); 
		  var user_theme  = targetform.find('.theme').val(); 
        var user_phone      = targetform.find('.phone').val();
		
        var user_mail      = targetform.find('.mail').val();
        //var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            targetform.find('.name').css('border-color','red'); 
            proceed = false;
        }
     
        if(user_phone=="") {    
           targetform.find('.phone').css('border-color','red'); 
            proceed = false;
        }
           if(user_mail=="") {    
           targetform.find('.mail').css('border-color','red'); 
            proceed = false;
        }
        if(proceed) 
        {
            //data to be sent to server
            var post_data;
            var output;
			var clientId;
			ga(function(tracker) {
				clientId = tracker.get('clientId');

				});
            post_data = {'name':user_name,'theme':user_theme, 'phone':user_phone, 'mail':user_mail,'client_id':clientId};
            //Ajax post data to server
            /*$.post('_contact-us.php', post_data, function(response){  

                //load json data from server and output message     
                if(response.type == 'error')
                {
                    alert(response.text);
                }else{
                  targetform.find('input,p,.span4,.span3').hide();
				  targetform.find(".success").fadeIn(200); 
	
                }
                
            }, 'json');
		
			
			 $.get('http://113bar.ru/system/process.php', post_data, function(response){  

                //load json data from server and output message     
                if(response.type == 'error')
                {
                    alert(response.text);
                }else{
		 				
                }
                
            }, 'json');*/
            $.post('http://113bar.ru/system/newsubscriber.php', post_data, function(response){  
            
                            //load json data from server and output message     
                            if(response.type == 'error')
                            {
                                alert(response.text);
                            }else{
                           
                            }
                            
                        }, 'json');
            
               $.post(
                "http://www.google-analytics.com/collect",
                {
                        v: 1,
                        tid: 'UA-61301662-1',
                        cid: clientId,
                        t: 'pageview', 
                       dp: '/registered/'
                },'json'
				);
						ga('set', 'dimension1', clientId);
        }
		return false;
    });
    
// Target examples bindings
			var $paneTarget = $('body');
			
			$('#teaser .box-btn').click(function(e){
				e.preventDefault();
				var $target = $paneTarget.find('#tagline');
				$paneTarget.stop().scrollTo( $target , 800 );
			});
			$('.degust').click(function(e){
			e.preventDefault();
				var $target = $paneTarget.find('#secondform');
				$paneTarget.stop().scrollTo( $target , 800 );
			});
$(".vidos").colorbox({iframe:true,width:"100%", height:"100%",transition:"fade"});
Mapstyle = [
	{
	  "stylers": [
		{ "hue": "#006eff" },
		{ "saturation": -87 }
	  ]
	}
];    var myLatlng = new google.maps.LatLng(55.033789, 82.918216);
    var myOptions = {
         zoom: 17,
           disableDefaultUI: true,
         center: myLatlng,
		  scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
        styles:Mapstyle,
         mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
     
    //var contentString = '<div id="content">РћС„РёСЃ Shales</div>';
    //  var infowindow = new google.maps.InfoWindow({
    //     content: contentString
    //   }); 
//		var markerImage = new google.maps.MarkerImage('/bitrix/templates/perchini/img/map_poing.png',
//	                new google.maps.Size(57, 66),
//	                new google.maps.Point(0, 0),
//	                new google.maps.Point(29, 53));
    var marker1 = new google.maps.Marker({
         position: new google.maps.LatLng(55.034267, 82.916674),
      map: map,

         title: 'Р“Р»Р°РІРЅС‹Р№ РѕС„РёСЃ'
    });
  // animate image when it comes into view
  $('.animate').parents('section').one('inview', function (event, visible) {
      $('.animate', this).delay(300).fadeIn(2000);
  });
  
  // smooth scrolling
  $('.smoothscroll').click(function(e) {
    el = $(this).attr('href');
    $('html, body').animate({scrollTop: $(el).offset().top - 190}, 'slow');
    e.preventDefault();
    
    return false;
  });

  // main dropdown menu
  $('ul#main-navigation li').hover(function(){
      $(this).children('ul').delay(20).fadeIn(200);
    }, function(){
      $(this).children('ul').delay(20).fadeOut(200);
  });
  
  // generate mobile menu
  if ($('#main-menu-select').length && $('#main-menu-select').attr('data-autogenerate') == 'true') {
    var mobile_menu = $('#main-menu-select');
    $('#main-navigation li a').each(function(index, elem) {
      if ($(elem).parents('ul.drop').length) {
        tmp = '&nbsp;&nbsp;-&nbsp;' + $(elem).html();
      } else {
        tmp = $(elem).html();
      }
      
      if ($(elem).parent('li').hasClass('current-menu-item')) {
        mobile_menu.append($('<option></option>').val($(elem).attr('href')).html(tmp).attr('selected', 'selected'));
      } else {
        mobile_menu.append($('<option></option>').val($(elem).attr('href')).html(tmp));
      }
    });
  }
  
  // mobile menu click
  $('#main-menu-select').change(function() {
    link = $(this).val();
    if (!link) {
      return;
    }  
    document.location.href = link;
  });

  // filterable portfolio
  $('#portfolio-gallery').filterable();

  // lightbox gallery on portfolio
  if ($("a[data-gal^='prettyPhoto']").length) {
    $("a[data-gal^='prettyPhoto']").each(function(ind, el) {
      $(el).attr('rel', $(el).attr('data-gal'));
    });
    
    $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false, deeplinking: false});
  }

  // flex slider in section
  if ($('#main-slider').length>1) {
    $('#main-slider').flexslider({
      animation: "fade",
      directionNav: true,
      controlNav: true,
      pauseOnAction: true,
      pauseOnHover: true,
      direction: "horizontal",
      slideshowSpeed: 4000,
      slideshow: true
    });
  }

$("#afterc").flexslider({
      animation: "fade",
      directionNav: true,
      controlNav: false,
      pauseOnAction: true,
      pauseOnHover: true,
      direction: "horizontal",
      slideshowSpeed: 3000,
      slideshow: true,
      before: function(slider) { $('#full-slider .flex-caption').fadeOut(100); },
      after: function(slider) { $('#full-slider .flex-caption').fadeIn(900); }
    });
  // flex slider in header
  if ($('#full-slider li').length>1) {
    $('#full-slider').flexslider({
      animation: "fade",
      directionNav: true,
      controlNav: false,
      pauseOnAction: true,
      pauseOnHover: true,
      direction: "horizontal",
      slideshowSpeed: 3000,
      slideshow: true,
      before: function(slider) { $('#full-slider .flex-caption').fadeOut(100); },
      after: function(slider) { $('#full-slider .flex-caption').fadeIn(900); }
    });
  }

  // links & icons hover effects
  $('#footer-navigation li a').css('opacity', '.35');
  $('#footer-navigation li a').hover(
    function () {
      $(this).stop().animate({ opacity: 1 }, 'normal');
    },
    function () {
      $(this).stop().animate({ opacity: .35 }, 'normal');
  });
    
  $('.over').css('opacity', '0');
  $('.over').hover(
    function () {
       $(this).stop().animate({ opacity: 1 }, 'slow');
    },
    function () {  
       $(this).stop().animate({ opacity: 0 }, 'slow');
  });

  // to top button
  $(window).scroll(function(){
    if ($(window).scrollTop() > 100){
      $('#totop').css('visibility','visible');
    }
  });
  $(window).scroll(function(){
    if ($(window).scrollTop() < 100){
      $('#totop').css('visibility','hidden');
    }
  });
    $("#totop a").click(function(){
      $('html, body').animate({ scrollTop: 0 }, 'slow');
  });

  // gmap init
  $('.gmap').each(function(index, element) {
    var gmap = $(element);
    var addr = 'http://maps.google.com/maps?hl=en&ie=utf8&output=embed&sensor=true&iwd=1&mrt=loc&t=m&q=' + encodeURIComponent(gmap.attr('data-address'));
    addr += '&z=' + gmap.attr('data-zoom');
    if (gmap.attr('data-bubble') == 'true') {
      addr += '&iwloc=addr';
    } else {
      addr += '&iwloc=near';
    }
    gmap.attr('src', addr);
  });
  
  // load captcha question for contact form
  if ($('#captcha-img').length) {
    $.get('_captcha.php?generate', function(response) {
      $('#captcha-img').html(response);
    }, 'html');
  }
  
 
}); // onload
 $(window).load(function() {
    $('#inter').flexslider({
    animation: "slide",
    animationLoop: true,slideshowSpeed:5000,
    slideshow: true, 
  });
	$('#menu').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 180,
    itemMargin: 10,
    asNavFor: '#slider'
  });
   
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,slideshowSpeed:5000,
    animationLoop: true,
    slideshow: true,   itemMargin: 5,
    sync: "#menu"
  });
	
  });
// handle contact form AJAX response
function contactFormResponse(response) {
  if (response.responseStatus == 'err') {
    if (response.responseMsg == 'ajax') {
      alert('Error - this script can only be invoked via an AJAX call.');
    } else if (response.responseMsg == 'notsent') {
      alert('We are having some mail server issues. Please refresh the page or try again later.');
    } else {
      alert('Undocumented error. Please refresh the page and try again.');
    }
  } else if (response.responseStatus == 'ok') {
    alert('Thank you for contacting us! We\'ll get back to you ASAP.');
  } else {
    alert('Undocumented error. Please refresh the page and try again.');
  }
  
  location.reload(true);
} // contactFormResponse