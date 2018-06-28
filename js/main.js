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

    function parallaxOn(){

        if ($("html").hasClass("no-mobile")) {
            $('.parallax').parallax("50%", 0.4);
            $(".parallax").css("background-attachment", "fixed");
        }

    }

	new WOW().init();
	
	setTimeout(function(){
		$('.home-title').css('letter-spacing', '5px');
		$('.home').removeClass('vitral-opacity');
 	}, 6800);

 	setTimeout(function(){
		$('#logo-png').removeClass('hide');
		$('#logo-png').addClass('animated fadeIn');
		$('#logo-svg').addClass('animated fadeOut');
		setTimeout(function(){
			$('.preloader').addClass('top-circle');
			$('#logo-png').addClass('top-logo');
		}, 800);
	}, 500);

	setTimeout(function(){
		$('#logo-texto').removeClass('hide');
		$('#logo-texto').addClass('animated fadeIn');
		$('#logo-png').addClass('animated fadeOut');
	}, 9900);

	$('.suite-preview').on('mouseover', function(){

		$('.home-suites-title').addClass('fadeOut')
								.html($(this).attr('data-title'))
								.removeClass('fadeOut')
								.addClass('fadeIn');

		// $('.home-suites-title').animate({ opacity:0, 'letter-spacing': '45px'}, 100);

	});

	$('.suite-preview').on('mouseout', function(){
		$('.home-suites-title').removeClass('fadeIn').html('NUESTRAS SUITES');
		// $('.home-suites-title').html('NUESTRAS SUITES');
	});


	$(window).scroll(function () {
        if ($(this).scrollTop() > $("#wrapper").offset().top - 80) {
            $('#texto').addClass('appear');
        } else {
            
        }
       
    });

	$(window).resize(function(){        
        parallaxOn();
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

			$('.slick-slide').height( $('.slick-slide').width() );
			$('.banner-promos').height( $('.slick-slide').width() );

		  },
		  error: function(data){
		    console.log(data); // send the error notifications to console
		  }
		});

		parallaxOn();
	});

	
})( jQuery );
