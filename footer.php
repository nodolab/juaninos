	<footer>        
        <div class="footer-desc">
            <div class="row">
                <div class="col-sm-6">
                    <div id="instafeed"></div>
                </div>
                <div class="col-sm-6">
                    <div class="banner-promos flex-row-center">
                        <p>SECCIÓN PAQUETES</p>
                    </div>
                </div>
            </div>          
            <div class="row">
                <div class="col-sm-12">
                        <p>Av. Morelos Sur 39, Centro Histórico, 58000 Morelia Mich. Tel: 4433120036 <a href="mailto:reservaciones@hoteljuaninos.com.mx">reservaciones@hoteljuaninos.com.mx</a></p>
                </div>
            </div>
        </div>
            <div class="footer-menu">                   
            <ul class="flex-row-center">
                <li><a href="">NOSOTROS</a></li>
                <li><a href="">RESERVAR</a></li>
                <li><a href="">CERTIFICACIONES</a></li>
                <li><a href="">POLITICAS DEL HOTEL</a></li>
                <li><a href="">MAPA DEL SITIO</a></li>
            </ul>
        </div>
    </footer>


<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-2.0.2.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-2.0.2.min.js"><\/script>')</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script src="js/vendor/jquery.parallax-1.1.3.js"></script>
<script src="js/vendor/lightgallery.min.js"></script>
<script src="js/vendor/lg-zoom.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/vendor/wow.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
    $(function () {

        var controller = new ScrollMagic.Controller();

        new ScrollMagic.Scene({ triggerElement: "#wrapper", triggerHook: "onLeave" })
            .setClassToggle('#nav-menu', 'fixed-menu')
            // .addIndicators()
            .addTo(controller);


    });

    $('.gallery').slick({
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
</script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    // window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    // ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<!-- <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
</body>

</html>