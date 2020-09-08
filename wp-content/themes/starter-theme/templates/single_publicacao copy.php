<!-- Template name: Single-Publicacao -->
<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <article <?php post_class() ;?> id="post-<?php the_ID(); ?>">
                <header class="row header-noticia text-center align-items-center">
                    <div class="col-12 position-relative">
                        <h1>Título Notícia</h1>
                        <p>Data: 18/8/2020</p>
                    </div>
                </header>
                <section class="row section-noticia mx-0 mt-4 text-justify">
                    <div class="col-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae sem id nisl maximus malesuada ut at ipsum. Integer vitae urna dolor. Suspendisse semper quam vel nisi aliquam tempor. Maecenas consectetur ut purus non rhoncus. Praesent nec placerat mauris. Morbi vel lacus magna. Proin congue sem nec nunc dapibus, sit amet hendrerit enim fringilla. Donec commodo pellentesque nibh. Nunc at nunc velit. Duis nec sem tempor, posuere felis a, fringilla risus. Ut molestie porta dolor, nec aliquet velit semper at. Maecenas vel odio purus. In dapibus, nisi non tempor faucibus, ipsum nisl tincidunt ex, id sollicitudin velit est ut arcu. Morbi auctor magna eget turpis gravida, a maximus ante mattis. In euismod, est id aliquet blandit, orci libero bibendum felis, eget ullamcorper leo magna id nulla.</p>
                    </div>
                </section>
            </article>
        </div>
    </div>
</div>

<?php get_footer(); ?>