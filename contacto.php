<?php 

$title = 'Contacto';
include 'header.php';
 
?>

    <section class="header-section flex-column-center header-overlay" style="background-image: url('./img/fachada.jpg');">
        <div class="col-sm-6 padding-card text-center">
            <h1 style="color: #FFF; display: inline-block; border-bottom: 2px solid #FFF; padding-bottom: 3px;">CONTACTO</h1>
        </div>
        <?php include 'nav.php'; ?>
    </section>

    <div id="wrapper" class="wrapper parallax">
    
        <section id="contacto" class="section-content">
            
            <div class="container">

                <div class="row title-section mb-80">
                    <h1 class="title wow fadeIn" data-wow-delay="3s">CONTACTO</h1>                    
                </div>
                
                <div class="row">
                    
                    <div class="col-sm-4 col-sm-offset-1">
                        
                        <form action="">
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="name" name="name" />
                                <label class="input__label input__label--hoshi " for="name">
                                    <span class="input__label-content input__label-content--hoshi">Nombre</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="email" id="email" name="email" />
                                <label class="input__label input__label--hoshi " for="email">
                                    <span class="input__label-content input__label-content--hoshi">Email</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="subject" name="subject" />
                                <label class="input__label input__label--hoshi " for="subject">
                                    <span class="input__label-content input__label-content--hoshi">Asunto</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <textarea class="input__field input__field--hoshi" type="text" id="message" name="message" rows="5" /></textarea>
                                <label class="input__textarea input__label input__label--hoshi " for="message">
                                    <span class="input__label-content input__label-content--hoshi">Mensaje</span>
                                </label>
                            </span>

                            <div class="col-sm-12">
                                <button type="submit" class="btn-form btn-cta"">ENVIAR</button>
                            </div>
                        </form>

                    </div>
                    <div class="col-sm-5 col-sm-offset-2">
                        
                        <div class="col-xs-12">
                            <p><strong>Telefono</strong> · +52 443 312 0036</p>
                            <p><strong>Email</strong> · <a href="mailto:reservaciones@hoteljuaninos.com.mx" class="link">reservaciones@hoteljuaninos.com.mx</a></p>
                            <p><strong>Dirección</strong>  · Morelos Sur 36, Centro C.P. 58000</p>
                        </div>
                        <div class="col-xs-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.236894866581!2d-101.1934807855206!3d19.702535986731487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e7199b95383%3A0x38b1a34bb25f55d5!2sHotel+Los+Juaninos!5e0!3m2!1ses-419!2smx!4v1536813604730" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                    </div>

                </div>

            </div>

        </section>
    </div>

<?php include 'footer.php'; ?>