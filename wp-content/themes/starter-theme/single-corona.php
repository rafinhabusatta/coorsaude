<!-- Template name: Single-Coronavirus -->
<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ;?> id="post-<?php the_ID(); ?>">
                    <header class="row header-noticia header-corona text-center align-items-center">
                        <div class="col-12 position-relative">
                            <h1><?php the_title();?></h1>
                            <div class="container-data text-left">
                            <p class="mb-0 pb-3">
                                <?php 
                                    $data = get_field('data');
                                    if(!empty($data)){
                                        echo $data; 
                                    } 
                                ?>
                            </p>
                            </div>
                        </div>
                    </header>
                    <div class="container-noticia">
                        <section class="social-media">
                            <ul class="social-list">
                                <li class="social-item">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo home_url( $wp->request );?>" target="_blank" class="social-link">
                                        <i class="fab fa-facebook-f icon"></i>
                                    </a>
                                </li>
                                <li class="social-item">
                                    <a href="https://twitter.com/share?url=<?php echo home_url( $wp->request );?>" target="_blank" class="social-link">
                                        <i class="fab fa-twitter icon"></i>
                                    </a>
                                </li>
                                <li class="social-item mr-0 mb-0">
                                    <a href="mailto:?subject=<?php the_title();?>" target="_blank" class="social-link">
                                        <i class="far fa-envelope icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <section class="row section-noticia mx-0 mt-4 text-justify">
                            <div class="col-12">
                                <p>
                                    <?php the_content();?> 
                                </p>
                                <a href="<?php echo site_url(); ?>/publicacoes">
                                    Ver todas as publicações
                                </a>
                            </div>
                        </section>
                    </div>
                </article>
            <?php endwhile;?>
        </div>
    </div>
</div>

<?php get_footer(); ?>