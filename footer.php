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
                <li><a id="enlace-reservar" class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0s">RESERVAR</a></li>
                <li><a href="">CERTIFICACIONES</a></li>
                <li><a href="">POLITICAS DEL HOTEL</a></li>
                <li><a id="modal-privacidad" href="#AvisoPrivacidad">AVISO DE PRIVACIDAD</a></li>
                <li><a href="">MAPA DEL SITIO</a></li>
            </ul>
        </div>
    </footer>

    <a id="boton-reservar" class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0s">RESERVAR</a>



    <div id="formulario-reservar" class="col-sm-12">
        <div class="btn-container-reservar" style="">
            <a href="javascript:void(0)" id="cerrar-form">X</a>
        </div>
        <?php
        include 'reservacion.php';
        ?>
    </div>

    <div id="AvisoPrivacidad">
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-modalDestino" -->
        <div class="close-AvisoPrivacidad text-right"> 
            <svg id="close-modal-icon" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                <g>
                    <circle fill="none" class="close-modal-icon-color" stroke-width="2" stroke-miterlimit="10" cx="26" cy="26" r="25"/>
                    <g>
                        <line fill="none" class="close-modal-icon-color" stroke-width="2" stroke-miterlimit="10" x1="33.571" y1="34.278" x2="18.722" y2="19.429"/>
                        <line fill="none" class="close-modal-icon-color" stroke-width="2" stroke-miterlimit="10" x1="33.571" y1="18.722" x2="18.722" y2="33.571"/>
                    </g>
                </g>
            </svg>
        </div>

        <div class="modal-content container">
            <div class="col-sm-12 mb-50 title-section">
                <h1 class="title" >AVISO DE PRIVACIDAD</h1>
            </div>
            <div class="col-xs-12 mb-50 text-justify">
                <p>
                    <b>HOTEL JUANINOS</b>, con domicilio en Morelos Sur 39 Centro Histórico CP 58000 .T (52) 443 3120036, es responsable de recabar sus datos personales, del uso que se le de a los mismos y de su protección.
                </p>
                <p>
                    Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: Nombre, Domicilio, Teléfono, Correo Electrónico.
                </p>
                <p>
                    Considerado como sensible según la Ley Federal de protección de Datos Personales en Posesión de los Particulares, los referentes a su patrimonio e ingresos.
                </p>
                <p>
                    Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implantado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con  nuestro departamento de datos personales Morelos Sur 39 Centro Histórico CP 58000 .T (52) 443 3120036  o visitar nuestra página www.hoteljuaninos.com.mx
                </p>
                <p>
                    Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través de Morelos Sur 39 Centro Histórico CP 58000 .T (52) 443 3120036 o visitar nuestra página de Internet www.hoteljuaninos.com.mx
                </p>
                <p>
                    Cualquier modificación a este aviso de privacidad la podrá consultar en la página electrónica  www.hoteljuaninos.com.mx
                </p>
                <p>
                    Fecha última actualización Febrero 2017.
                </p>

            </div>
        </div>
    </div>


    


    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.0.2.min.js"><\/script>')</script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script> -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
    <script src="js/vendor/jquery.parallax-1.1.3.js"></script>
    <script src="js/vendor/lightgallery.min.js"></script>
    <script src="js/vendor/lg-zoom.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <script src="js/vendor/wow.min.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/jquery.smoove.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    // window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    // ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<!-- <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
</body>

</html>