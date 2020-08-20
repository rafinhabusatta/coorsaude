<!-- Template name: Single-Publicacao -->
<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <article <?php post_class() ;?> id="post-<?php the_ID(); ?>">
                <header class="row noticia">
                    <h1>Título Notícia</h1>
                </header>
            </article>
        </div>
    </div>
</div>

<?php get_footer(); ?>