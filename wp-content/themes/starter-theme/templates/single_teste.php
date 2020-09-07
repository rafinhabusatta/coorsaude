<?php
/*
  Template para as single posts de Notícias
*/
get_header(); ?>
<div class="container-fluid">
	<div class="row topo-noticia">
	</div>

	
	<div class="row margens-noticia">

		<div class="col-12" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ;?> id="post-<?php the_ID(); ?>">
				<header class="row mx-0 mb-lg-4">
					<div class="col-12">
						<h1 class="noticia-titulo mb-2"><?php the_title();?></h1>
					</div>
					<div class="col-12">
						<p class="noticia-data mb-3">
							<?php 
							$data = get_field('data');
							if(!empty($data)){
								echo $data; 
							}
		
							$data_atualizacao = get_field('data_atualizacao');
							if(!empty($data_atualizacao)){
						?>
								 - atualizada em: 
							<?php
								echo $data_atualizacao; 
							}
							?>
						</p>
					</div>
				</header>
				
				<div class="row noticia-justify-content-center mx-lg-0">
					<div class="col-sm-12 col-lg-8 mx-3 mx-sm-0 mx-lg-0 px-0 px-sm-3 pr-lg-5 pl-lg-0 ">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="row mx-0">
								<div class="col-12">
									<?php
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail-noticias-desktop' );   
									if($image) : ?>
				    					<img class="card-img-top" src="<?php echo $image[0]; ?>" alt="">
									<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>
							<div class="row mt-3 mb-5 mx-0 my-md-5">
								<div class="col-12 noticia-texto">
									<?php the_content();?>
									<div class="linha-cinza3 my-5"></div>
								</div>
								<div class="desktop w-100">
									<div class="col-12 d-flex">
										<a href="#" onclick="history.back();" class="azul-claro font-weight-bold"><img src="<?php bloginfo('template_directory')?>/assets/imagens/arrow_esqpeq_azul.svg"><span class="ml-2">voltar</span></a>
										
										<span class="ml-auto">
											<!-- <a href="" target="_blank">
												<img src="<?php //bloginfo('template_directory')?>/assets/imagens/whatsapp_noticia.svg" height="24">
											</a> -->
											<a class="" href="https://www.linkedin.com/shareArticle?url=<?php echo home_url( $wp->request );?>&title=<?php the_title(); ?>" target="_blank">
												<img src="<?php bloginfo('template_directory')?>/assets/imagens/linkedin_noticia.svg" height="24">
											</a>
											<a class="ml-4" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo home_url( $wp->request );?>" target="_blank">
												<img src="<?php bloginfo('template_directory')?>/assets/imagens/facebook_noticia.svg" height="24">
											</a>
											<a class="ml-4" href="https://www.instagram.com/telessauders/" target="_blank">
												<img src="<?php bloginfo('template_directory')?>/assets/imagens/instagram_noticia.svg" height="24">
											</a>
											<a class="ml-4" href="https://twitter.com/share?url=<?php echo home_url( $wp->request );?>" target="_blank">
												<img src="<?php bloginfo('template_directory')?>/assets/imagens/twitter_noticia.svg" height="24">
											</a>
										</span>
									</div>
								</div>
								<div class=" col-12 mobile text-center">
									<div class="mb-4">
										<!-- <a href="" target="_blank">
											<img src="<?php //bloginfo('template_directory')?>/assets/imagens/whatsapp_noticia.svg" height="24">
										</a> -->
										<a class="" href="https://www.linkedin.com/shareArticle?url=<?php echo home_url( $wp->request );?>&title=<?php the_title(); ?>" target="_blank">
											<img src="<?php bloginfo('template_directory')?>/assets/imagens/linkedin_noticia.svg" height="24">
										</a>
										<a class="ml-4" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo home_url( $wp->request );?>" target="_blank">
											<img src="<?php bloginfo('template_directory')?>/assets/imagens/facebook_noticia.svg" height="24">
										</a>
										<a class="ml-4" href="https://www.instagram.com/telessauders/" target="_blank">
											<img src="<?php bloginfo('template_directory')?>/assets/imagens/instagram_noticia.svg" height="24">
										</a>
										<a class="ml-4" href="https://twitter.com/share?url=<?php echo home_url( $wp->request );?>via=telessauders" target="_blank">
											<img src="<?php bloginfo('template_directory')?>/assets/imagens/twitter_noticia.svg" height="24">
										</a>
									</div>
									<a href="#" onclick="history.back();" class="azul-claro font-weight-bold"><img src="<?php bloginfo('template_directory')?>/assets/imagens/arrow_esqpeq_azul.svg"><span class="ml-2">voltar</span></a>
								</div>
							</div> 
					</div> <!-- fim noticia corpo-->
		<?php endwhile;?>
					<!-- Menu Lateral de notícias-->
					<section class="col-12 col-lg-4 noticia-relacionada py-5 py-lg-0 px-lg-5">
						<h2 class="desktop">Outras Notícias</h2>
						<?php 
							rewind_posts();
							$args = array(
									'post_type' => 'noticias',
									'posts_per_page' => 3,	
								);
								
							$noticiasRelacionadas = new WP_Query ( $args );
						?>
						<?php if($noticiasRelacionadas->have_posts()) : while($noticiasRelacionadas->have_posts()) : $noticiasRelacionadas->the_post(); ?>
								<div class="linha-cinza3 my-5"></div>
								<h3 class="mb-4"><?php the_title(); ?></h3>
								<?php if( get_post_meta($post->ID, 'tempo_leitura', true ) != '' ) { ?>
								<div class="noticia-tempo-leitura">
								<?php
									echo get_post_meta($post->ID, 'tempo_leitura', true) . " min leitura";
								?>
								<a class="btn-redondo btn-noticia-relacionada ml-auto" href="<?php echo get_post_permalink($post->id);?>">ler mais <span class=" arrow-dirpeq arrow-dirpeq-noticia-relacionada"></span></a>
								</div>
								<?php } ?>
						<?php endwhile; endif;?>
						<div class="linha-cinza3 mt-5"></div>
					</section>
				</div> <!-- end row -->
			</article> <!-- Fim Noticia -->
		</div> <!-- end col-12 -->
	</div> <!-- end row -->
</div><!-- end container-fluid -->

<?php get_footer(); ?>