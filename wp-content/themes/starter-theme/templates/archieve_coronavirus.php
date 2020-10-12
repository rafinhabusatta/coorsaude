<!-- Template name: Coronavirus -->
<?php get_header(); ?>

<!-- <div class="container-fluid">
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
        <div class="row publicacoes">
            <div class="col-12 grid-container">
                <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $coronavirus = new WP_Query(array(
                        'post_type'=>'corona', // your post type name
                        'posts_per_page' => 12, // post per page
                        'paged' => $paged,
                    ));
                ?>
                <?php 
				$noticias_destaque = 3;
				if (have_posts() ) : while( have_posts() && ($count < $noticias_destaque)) : the_post(); ?>
                <?php
					$count++; ?>
                    
                        <a href="<?php the_permalink(); ?>">
                            <div class="post text-center p-4">
                                <h2 class="titulo"><?php the_title() ?></h2>
                            </div>
                        </a>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="row post-paginate text-center mt-5">
            <div class="col-12">
                <?php 
                    $total_pages = $coronavirus->max_num_pages;

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
    </div> -->



    <div class="container-fluid">
        <div class="row publicacoes">
            <div class="col-12 grid-container">
                <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $coronavirus = new WP_Query(array(
                        'post_type'=>'corona', // your post type name
                        'posts_per_page' => 12, // post per page
                        'paged' => $paged,
                    ));
                ?>
                <?php if ($coronavirus -> have_posts()) : while ($coronavirus -> have_posts()) : $coronavirus -> the_post(); ?>
                    
                        <a href="<?php the_permalink(); ?>">
                            <div class="post text-center p-4">
                                <h2 class="titulo"><?php the_title() ?></h2>
                            </div>
                        </a>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="row post-paginate text-center mt-5">
            <div class="col-12">
                <?php 
                    $total_pages = $coronavirus->max_num_pages;

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
    function create_coronavirus($titulo){
        $hmtl .= '<div class="post">';
        $html .= '<h2 class="titulo"><?php the_title() ?></h2>';
        $html .= '</div>';
    }
?>