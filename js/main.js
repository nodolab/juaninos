(function($) {

	var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    if(!isMobile.any())
    {
        $("html").addClass("no-mobile");
    }
    else {
        $("html").addClass("mobile");
    }

    // function parallaxOn(){

    //     if ($("html").hasClass("no-mobile")) {
    //         $('.parallax').parallax("50%", 0.4);
    //         $(".parallax").css("background-attachment", "fixed");
    //     }

    // }

	new WOW().init();
	
	setTimeout(function(){
		$('.home-title').css('letter-spacing', '5px');
 	}, 3000);

 	setTimeout(function(){
		$('#logo-png').removeClass('hide');
		$('#logo-png').addClass('animated fadeIn');
		$('#logo-svg').addClass('animated fadeOut');
			$('.overlay-bco').fadeOut(500);
		setTimeout(function(){
			$('.preloader').addClass('top-circle');
			$('#logo-png').addClass('top-logo');
		}, 500);
	}, 2500);

	setTimeout(function(){
		$('#logo-texto').removeClass('hide');
		$('#logo-texto').addClass('animated fadeIn');
		$('#logo-png').addClass('animated fadeOut');
	}, 4200);

	$('.suite-preview').on('mouseout', function(){
		$('.home-suites-title').removeClass('fadeIn').html('NUESTRAS SUITES');
		// $('.home-suites-title').html('NUESTRAS SUITES');
	});

	$(window).load(function() {

		var token = '1170289459.ba4c844.e3f089a5b23441d2acb6cb2cec1614a3', // learn how to obtain it below
		    hashtag = 'HotelLosJuaninos', // User ID - get it in source HTML of your Instagram profile or look at the next example :)
		    num_photos = 12; // how much photos do you want to get
		 
		$.ajax({
		  url: 'https://api.instagram.com/v1/tags/'+ hashtag +'/media/recent', // or /users/self/media/recent for Sandbox
		  dataType: 'jsonp',
		  type: 'GET',
		  data: {access_token: token, count: num_photos},
		  success: function(data){
		    console.log(data);
		    for( x in data.data ){
		      var thumbnail = data.data[x].images.thumbnail.url,
		          url = data.data[x].images.standard_resolution.url,
		          likes = data.data[x].likes.count;
		          if(data.data[x].caption != null){            
		            var text = data.data[x].caption.text,
		            user = data.data[x].caption.from.username;
		          }else{
		            var text = "", user = "instagram";
		          }

		      // thumbnail = thumbnail.replace('s150x150/', 's640x640/');
		      $('#instafeed').append('<a href="'+url+'" style="background-image: url('+url+')" data-sub-html="'+text+'"></a>'); // data.data[x].images.low_resolution.url - URL of image, 306х306
		      // data.data[x].images.thumbnail.url - URL of image 150х150
		      // data.data[x].images.standard_resolution.url - URL of image 612х612
		      // data.data[x].link - Instagram post URL 
		    }

		    $("#instafeed").lightGallery({
			    mode: 'lg-fade'
			  });

			$('#instafeed').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				swipeToSlide: true,
				autoplay: true,
				autoplaySpeed: 3500,
				arrows: true,
				speed: 1000
				});

			$('#instafeed .slick-slide').height( $('#instafeed .slick-slide').width() );
			$('.banner-promos').height( $('#instafeed .slick-slide').width() );

		  },
		  error: function(data){
		    console.log(data); // send the error notifications to console
		  }
		});

		// parallaxOn();
	});

    $('.gallery-events').slick({
        lazyLoad: 'ondemand',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: false,
        fade: true,
        adaptiveHeight: true
    });

    $('.gallery-azotea').slick({
        lazyLoad: 'ondemand',
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: false,
        responsive: [
        {
            breakpoint: 420,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 1500,
            settings: {
                slidesToShow: 3,
            }
        }]
    });
	
})( jQuery);

$(function () {

    var controller = new ScrollMagic.Controller();

    new ScrollMagic.Scene({ triggerElement: "#wrapper", triggerHook: "onLeave" })
        .setClassToggle('#nav-menu', 'fixed-menu')
        // .addIndicators()
        .addTo(controller);
});

$(function () {

    var controller = new ScrollMagic.Controller();

    var wipeAnimation = new TimelineMax()
        .to("#slide-container", 0.5, {z: -150, delay: 1})
        .to("#slide-container", 1, {x: "-33.33%"})
        .to("#slide-container", 0.5, {z: 0})
        .to("#slide-container", 0.5, {z: -150, delay: 1})
        .to("#slide-container", 1, {x: "-66.66%"})
        .to("#slide-container", 0.5, {z: 0})
        .to("#slide-container", 0, {delay: 1});

    new ScrollMagic.Scene({
            triggerElement: "#home-about",
            triggerHook: "onLeave",
            duration: "500%"
        })
        .setPin("#home-about")
        .setTween(wipeAnimation)
        // .addIndicators()        
        .addTo(controller);

    new ScrollMagic.Scene({ triggerElement: "#home-about", triggerHook: "onLeave" })
        .setClassToggle('.elem-slide-1', 'show-slide-1')
        // .addIndicators()
        .addTo(controller);

    new ScrollMagic.Scene({ triggerElement: "#home-about", triggerHook: "onLeave", offset: 1400 })
        .setClassToggle('.elem-slide-2', 'show-slide-2')
        // .addIndicators({name: "slide-2"})
        .addTo(controller);

    new ScrollMagic.Scene({ triggerElement: "#home-about", triggerHook: "onLeave", offset: 2800 })
        .setClassToggle('.elem-slide-3', 'show-slide-3')
        // .addIndicators({name: "slide-3"})
        .addTo(controller);

});
