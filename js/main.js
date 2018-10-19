(function($) {
    $(window).load(function(){

    /**
     * Generales
     */

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

    //Preloader
    $('.preloader').fadeOut(500);
    setTimeout(function(){
        $('#logo-texto').removeClass('hide');
        $('#logo-texto').addClass('animated fadeIn');
        // $('#logo-png').addClass('animated fadeOut');
    }, 500);

    // Iniciar animaciones
	new WOW().init();

    //Fixed menu
    var controller = new ScrollMagic.Controller();

    new ScrollMagic.Scene({ triggerElement: "#wrapper", triggerHook: "onLeave" })
        .setClassToggle('#nav-menu', 'fixed-menu')
        // .addIndicators()
        .addTo(controller);

    //Instagram widget
    var token = '1170289459.ba4c844.e3f089a5b23441d2acb6cb2cec1614a3',
        hashtag = 'HotelLosJuaninos', 
        num_photos = 12; // numero de fotos a mostrar
     
    $.ajax({
      url: 'https://api.instagram.com/v1/tags/'+ hashtag +'/media/recent',
      dataType: 'jsonp',
      type: 'GET',
      data: {access_token: token, count: num_photos},
      success: function(data){
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

          $('#instafeed').append('<a href="'+url+'" style="background-image: url('+url+')" data-sub-html="'+text+'"></a>');
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

        //Booking form

        $( "#datepicker" ).datepicker({dateFormat: "dd-mm-yy"});
        $( "#datepickerone" ).datepicker({dateFormat: "dd-mm-yy"});

        $('#boton-reservar').on('click',function(){

            $('#formulario-reservar').slideDown(600);
            $('#boton-reservar').slideUp(600);

        });

         $('#cerrar-form').on('click',function(){

            $('#formulario-reservar').slideUp(600);
            $('#boton-reservar').slideDown(600);

        });

        $("#modal-privacidad").animatedModal({
            color: '#FFF',
            modalTarget: 'AvisoPrivacidad'
        });

        /*
         * Scripts por seccion
         */

        if( $('body').hasClass('homepage') ){

        	setTimeout(function(){
        		$('.home-title').css('letter-spacing', '5px');
         	}, 1000);

            //Seccion de suites
            $('.suite-preview').on('mouseout', function(){
                $('.home-suites-title').removeClass('fadeIn').html('NUESTRAS SUITES');
            });

            var controller = new ScrollMagic.Controller();

            var wipeAnimation = new TimelineMax()
                .to("#slide-container", 0.5, {z: -150, delay: 1})
                .to("#slide-container", 1, {x: "-33.33%"})
                .to("#slide-container", 0.5, {z: 0})

            new ScrollMagic.Scene({
                    triggerElement: "#home-about",
                    triggerHook: "onLeave",
                    duration: "300%"
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

        }else if( $('body').hasClass('nosotros') ){
            $('.slider-nosotros').vegas({
                slides: [
                { src: 'img/nosotros_head.jpg' },
                { src: 'img/pasillo2.jpg' }
                ],
                overlay: true,
                animation: 'random'
            });
        }else if( $('body').hasClass('la-azotea') ){
            $('.slider-azotea').vegas({
                slides: [
                { src: 'img/restaurante4.jpg' },
                { src: 'img/image027.jpg' },
                { src: 'img/restaurante1.jpg' },
                { src: 'img/bar_terraza.jpg' },
                { src: 'img/juaninos_04.jpg' },
                { src: 'img/image033.jpg' },
                { src: 'img/image035.jpg' }
                ],
                overlay: true,
                animation: 'random'
            });

            $('.gallery-azotea').slick({
                lazyLoad: 'ondemand',
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                swipeToSlide: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                dots: false,
                responsive: [
                {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 3,
                    }
                }]
            });
        }else if( $('body').hasClass('eventos') ){
            $('.slider-eventos').vegas({
                slides: [
                { src: 'img/patio_9.jpg' },
                { src: 'img/patio_6.jpg' },
                { src: 'img/eventos/ejecutiva_3.jpg' }
                ],
                overlay: true,
                animation: 'random'
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

            $("#modal-segundo-patio").animatedModal({
                color: '#FFF',
                modalTarget: 'FormSegundoPatio'
            });
            $("#modal-salon").animatedModal({
                color: '#FFF',
                modalTarget: 'FormSalon'
            });
            $("#modal-ejecutiva").animatedModal({
                color: '#FFF',
                modalTarget: 'FormEjecutiva'
            });
        }else if( $('body').hasClass('propuesta-matrimonio') ){
            $('.slider-matrimonio').vegas({
                slides: [
                { src: 'img/matrimonio/destacado.jpg' },
                { src: 'img/matrimonio/destacado2.jpg' },
                { src: 'img/matrimonio/destacado3.jpg' }
                ],
                overlay: true,
                animation: 'random'
            });

            $('.gallery-propuesta').slick({
                lazyLoad: 'ondemand',
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                swipeToSlide: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                dots: false,
                responsive: [
                {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 3,
                    }
                }]
            });
        }else if( $('body').hasClass('destino') ){
            $("#modal-destino").animatedModal({
                color: '#FFF',
                modalTarget: 'modalDestino'
            });            

            $('.slider-atractivos').vegas({
                slides: [
                { src: 'img/atractivos/d3.jpg' },
                { src: 'img/atractivos/d2.jpg' },
                { src: 'img/atractivos/d1.jpg' },
                { src: 'img/atractivos/CATEDRAL3.jpg' }
                ],
                overlay: true,
                animation: 'random'
            });

            $('.gallery-destino').slick({
                lazyLoad: 'ondemand',
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                swipeToSlide: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                dots: false,
                responsive: [
                {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 3,
                    }
                }]
            });
        }

    });  
	
})( jQuery);
