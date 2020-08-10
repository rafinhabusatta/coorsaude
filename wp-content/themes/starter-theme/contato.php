<!-- Template name: Contato -->
<?php get_header(); ?>
    <div class="container-fluid pagina-contato">
        <div id="header-contato" class="row mx-0 pt-5">
            <div class="col-12">
               <h1>Contato</h1>
               <h2>Ninguém gosta da sensação de estar perdido. Estamos aqui para te ajudar.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="box-contato">
                    <?php echo do_shortcode('[ninja_form id=2]'); ?>
                </div>
            </div>
            <section>
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
            </section>
        </div>
    </div>
<?php get_footer(); ?>