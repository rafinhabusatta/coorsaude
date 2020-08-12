<!-- Template name: Publicacoes -->
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 grid-container">
                <?php 
                    $args = array(
                    'post_type' => 'post_publicacao',
                    );
                    $publicacao = new WP_Query ( $args );
                ?>
                <?php if ($publicacao -> have_posts()) : while ($publicacao -> have_posts()) : $publicacao -> the_post(); ?>
                    
                        <div class="post">
                            <h2 class="titulo"><?php the_title() ?></h2>
                        </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>

<?php 
    function create_publicacao($titulo){
        $hmtl .= '<div class="post">';
        $html .= '<h2 class="titulo"><?php the_title() ?></h2>';
        $html .= '</div>';
    }
?>