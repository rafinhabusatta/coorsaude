<!-- Template name: Contato -->
<?php get_header(); ?>
    <div class="container-fluid pagina-contato">
        <div id="header-contato" class="row mx-0 pt-5 text-center">
            <div class="col-12">
               <h1>Contato</h1>
               <h2>Ninguém gosta da sensação de estar perdido. Estamos aqui para te ajudar.</h2>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 form-map">
                <div class="box-contato formulario">
                    <?php echo do_shortcode('[ninja_form id=1]'); ?>
                </div>
            </div>
            <!-- <section>
                <svg id="curva" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3842.814 2586.033">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #58cca4;
                            }
                        </style>
                    </defs>
                    <path id="Fundo" class="cls-1" d="M-.123,1874s559.729-971.364,1893.852-923.56S3842.692,0,3842.692,0V2586.033H.223Z" transform="translate(0.123)"/>
                </svg>
            </section> -->
        </div>
        <div class="row mx-0 where-are-we">
            <div class="col-12">
                <div class="mt-5 mt-lg-0">
                    <h3 class="text-center">Onde estamos?</h3>
                    <div class="map-wrap box-contato d-flex flex-column align-items-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13815.17040414393!2d-51.2082643!3d-30.0428074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb67e83db1cbc8a5f!2sCoorSa%C3%BAde!5e0!3m2!1spt-BR!2sbr!4v1605298733916!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>