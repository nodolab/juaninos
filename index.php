<?php 

$title = 'Hotel Juaninos';
include 'header.php';
 
?>

    <section id="home" class="home flex-column-center" style="background-image: url('./img/juaninos_01.jpg');">

        <h1 class="title home-title wow fadeIn" data-wow-delay="0.5s">- UN BALCÓN A LA HISTORIA -</h1>

        <?php include 'nav.php'; ?>

    </section>

    <div id="wrapper" class="wrapper">
    
        <section id="home-about" class="home-about">
    
            <div id="slide-container">
                
                <section class="home-panel" style="background-image: url(./img/nosotros.jpg);" id="img-1">
                    <h3 class="elem-slide-1 label-izq label-izq-1">SIGLOS DE HISTORIA EN</h3>
                    <h3 class="elem-slide-1 label-izq label-izq-2">NUESTROS PASILLOS.</h3>
                    <a href="" class="elem-slide-1 btn btn-nosotros">DETALLES</a>
                </section>
                <section class="home-panel" style="background-image: url(./img/bar_terraza2.jpg);" id="img-2">
                    <div class="elem-slide-2 text-card home-about-card home-about-card-1">
                        <img src="./img/azotea2.png" class="img-responsive">
                    </div>
                    <h3 class="elem-slide-2 label-der label-der-1">ESPACIO DE VANGUARDIA</h3>
                    <h3 class="elem-slide-2 label-der label-der-2"> Y MODERNISMO</h3>
                    <a href="" class="elem-slide-2 btn btn-bar">DETALLES</a>
                </section>
                <section class="home-panel" style="background-image: url(./img/patio_1.jpg);" id="img-3">
                    <div class="elem-slide-3 text-card home-about-card home-about-card-2">
                        <img src="./img/seg_patio.png" class="img-responsive">
                    </div>
                    <h3 class="elem-slide-3 label-der label-der-3">MOMENTOS</h3>
                    <h3 class="elem-slide-3 label-der label-der-4"> PARA TODA LA VIDA</h3>
                    <a href="" class="elem-slide-3 btn btn-seg-patio">DETALLES</a>                    
                </section>
                <!-- <section class="home-panel" style="background-image: url(./img/master_interior.jpg);"></section> -->

            </div>
            
        </section>

        <section id="home-suites" class="home-suites">

            <div class="home-suites-images">
                <div class="suite-preview suite-1 no-padding" data-title="SUPERIOR INTERIOR" style="background-image: url('./img/superior_interior.jpg');">
                    <div class="bar">
                        <a href="">SUPERIOR INTERIOR</a>
                    </div>               
                </div>
                <div class="suite-preview suite-2 no-padding" data-title="SUPERIOR VISTA" style="background-image: url('./img/superior_vista.jpg');">
                    <div class="bar">
                        <a href="">SUPERIOR VISTA</a>
                    </div>                   
                </div>
                <div class="suite-preview suite-3 no-padding" data-title="MASTER SUITE DE LA ESQUINA" style="background-image: url('./img/master_esquina.jpg');">
                    <div class="bar">
                        <a href="">MASTER SUITE DE LA ESQUINA</a>
                    </div>
                </div>
                <div class="suite-preview suite-4 no-padding" data-title="MASTER SUITE INTERIOR" style="background-image: url('./img/master_interior.jpg');">
                    <div class="bar">
                        <a href="">MASTER SUITE INTERIOR</a>
                    </div>
                </div>
            </div>

            <h1 class="title home-suites-title animated">NUESTRAS SUITES</h1>
            <!-- <a href="" class="btn btn-home">DETALLES</a>           -->

        </section>

    </div>

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
<!-- <script src="js/vendor/jquery-3.3.1.min.js"></script> -->
<!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script> -->
<script src="js/vendor/jquery.parallax-1.1.3.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<!-- <script src="js/vendor/ScrollMagic.js"></script>
<script src="js/vendor/jquery.gsap.min.js"></script>
<script src="js/vendor/TweenMax.min.js"></script> -->
<script src="js/vendor/lightgallery.min.js"></script>
<script src="js/vendor/lg-zoom.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/vendor/wow.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
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
            .setClassToggle('#nav-menu', 'fixed-menu')
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
</script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    // window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    // ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<!-- <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
</body>

</html>
