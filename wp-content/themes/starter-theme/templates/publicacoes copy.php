<!-- Template name: Publicacoes -->
<?php get_header(); ?>
    <div class="container-fluid">
        <?php
            $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $paged = strstr($actual_link, "page");
            if($paged) :
                $count = 3;
            else :
                $count = 0;
                ?>
                <div class="row publicacoes-destaque">
                    <div class="col-12 my-5">
                        <h2>Destaque</h2>
                    </div>
                </div>
        <?php endif?>
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
        <div class="row">
            <div class="col-12">
                <?php
                    echo paginate_links(array(
                        'mid_size' => 2,
                        'prev_text' => 'Anterior',
                        'next_text' => 'Próxima',
                    )); 
                ?>
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