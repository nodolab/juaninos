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
                
                <section class="home-panel" style="background-image: url(./img/juaninos_08.jpg);" id="img-1">
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
            </div>

            <h1 class="title home-suites-title animated">NUESTRAS SUITES</h1>
            <!-- <a href="" class="btn btn-home">DETALLES</a>           -->

        </section>

    </div>

<?php include 'footer.php'; ?>