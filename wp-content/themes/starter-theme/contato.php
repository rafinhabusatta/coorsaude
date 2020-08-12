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
                    <?php echo do_shortcode('[ninja_form id=2]'); ?>
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
        <div class="row mx-0">
            <div class="col-12">
                <div class="mt-5 mt-lg-0">
                    <h3 class="text-center">Onde estamos?</h3>
                    <div class="map-wrap box-contato d-flex flex-column align-items-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d726.070798705729!2d-51.20885702977964!3d-30.04276040915674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519784f9e07c47d%3A0x6bd1318f65bdeee4!2sR.%20Ramiro%20Barcelos%2C%202777%20-%20Santana%2C%20Porto%20Alegre%20-%20RS%2C%2090035-007!5e0!3m2!1spt-BR!2sbr!4v1597081754982!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <p id="map-adress"class="mt-2 mb-0">Rua Ramiro Barcelos, 2777, Sala 163 - Porto Alegre/RS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>