<!-- Template name: Single-Coronavirus -->
<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ;?> id="post-<?php the_ID(); ?>">
                    <header class="row header-noticia text-center align-items-center">
                        <div class="col-12 position-relative">
                            <h1><?php the_title();?></h1>
                            <p>
                                <?php 
                                    $data = get_field('data');
                                    if(!empty($data)){
                                        echo $data; 
                                    } 
                                ?>
                            </p>
                        </div>
                    </header>
                    <section class="row section-noticia mx-0 mt-4 text-justify">
                        <div class="col-12">
                            <p>
                                <?php the_content();?> 
                            </p>
                        </div>
                    </section>
                </article>
            <?php endwhile;?>
        </div>
    </div>
</div>

<?php get_footer(); ?>