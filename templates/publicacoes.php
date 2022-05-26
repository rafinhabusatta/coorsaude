<!-- Template name: Publicacoes -->
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="greenTitle text-center mb-4 mt-4 mt-md-5">Publicações</h1>
            </div>
        </div>
        <div class="row publicacoes">
            <div class="col-12 grid-container">
                <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $publicacao= new WP_Query(array(
                        'post_type'=>'post_publicacao', // your post type name
                        'posts_per_page' => 12, // post per page
                        'paged' => $paged,
                    ));
                ?>
                <?php if ($publicacao -> have_posts()) : while ($publicacao -> have_posts()) : $publicacao -> the_post(); ?>
                    
                        <a href="<?php the_permalink(); ?>">
                            <div class="post">
                                <h2 class="titulo p-4"><?php the_title() ?></h2>
                            </div>
                        </a>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="row post-paginate text-center mt-5">
            <div class="col-12">
                <?php 
                    $total_pages = $publicacao->max_num_pages;

                    if ($total_pages > 1){

                        $current_page = max(1, get_query_var('paged'));

                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => __('« anterior'),
                            'next_text'    => __('próximo »'),
                        ));
                    }
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