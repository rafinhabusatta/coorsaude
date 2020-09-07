<?php get_header();?>

<div class="container-fluid">
	
	<div class="row">
		<div class="col-12 container-top container-top-noticias">
			<h1 class="mb-0">Notícias</h1>
			<div class="desktop text-center">
				<p class="my-4 mb-5">Assine nossa newsletter e receba informações sobre cursos,<br> webpalestras, novos projetos e muito mais.</p>
				<?php get_template_part('parts/newsletter','desk'); ?>
			</div>
			<div class="mobile text-center">
				<p class="mb-3 font-size-dezesseis">Confira aqui as últimas publicações.<br>
				Procurando a pergunta da semana?</p>
				<a class="btn-redondo btn-chato btn-branco mb-4" href="#">perguntas da semana</a>
			</div>
		</div>
	</div>
</div> <!-- end container-fluid -->
	
<div class="container desktop">
	<?php
			$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$paged = strstr($actual_link, "page");
			if($paged) :
				$count = 3;
			else :
				$count = 0;
				?>
					<div class="row ultimas-noticias">
						<div class="col-12 mb-4 mt-5">
							<h4>Destaque</h4>
						</div>
					</div>
		<?php endif
		?>
	<div class="row noticias-geral">
		<div class="card-deck w-100 mx-0">
			<?php 
				$noticias_destaque = 3;
				if (have_posts() ) : while( have_posts() && ($count < $noticias_destaque)) : the_post(); ?> 
			<div class="card">
				<?php
					$count++; 
					if ( has_post_thumbnail() ) : ?> 
					<a class="card-img-top py-3" href="<?php the_permalink();?>">
						<?php 
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail-noticias-desktop' );   
							if ($image) : ?>
		    					<img class="card-img-top" src="<?php echo $image[0]; ?>" alt="">
							<?php endif; ?>
					</a>
				<?php endif; ?>
				<div class="card-body p-0">
					<a class="card-title titulo d-inline-block" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>	

					<p class="data"> 
						<?php 
							echo get_the_date( 'd/m/Y',$post->ID );
							$data_atualizacao = get_field('data_atualizacao');
							if(!empty($data_atualizacao)){
						?>
								- atualizada em: 
						<?php
								echo $data_atualizacao; 
							}
						?>
					</p>

					<a class="card-text resumo d-inline-block" href="<?php the_permalink(); ?>">
						<?php echo get_the_excerpt($post->ID); ?>
					</a>
				</div> <!-- fim card-body -->

				<div class="card-footer">
					<?php if( get_post_meta($post->ID, 'tempo_leitura', true ) != '' ) { ?>
					<span class="tempo-leitura">tempo de leitura: 
						<?php
							echo get_post_meta($post->ID, 'tempo_leitura', true) . "min";
							?>
					</span>
					<?php
						} 
					?>
						
					<a class="azul4 hoverespecial hoverespecial-azul4 float-right font-weight-bold" href="<?php the_permalink(); ?>">saiba +<span></span></a>
				</div> <!-- fim card-footer -->
			</div> <!-- fim card -->
			<?php endwhile; endif; ?>
		</div> <!-- fim card deck -->
		<?php rewind_posts(); // Reinicia o query da página archive ?>
	</div>
</div>  <!-- end container -->

<?php
	if(!($paged)) :
?>
<div class="container desktop">
	<div class="row ultimas-noticias">
		<div class="col-12 mb-4 mt-5">
			<h4>Perguntas da Semana</h4>
		</div>
	</div>
	<?php 
		$args = array(
				'post_type' => 'perguntas',
				'posts_per_page' => 2,	
			);
			
		$perguntas = new WP_Query ( $args );
	?>
	<div class="row noticias-geral">
		<div class="card-deck w-100 mx-0">
		<?php if($perguntas->have_posts()) : while($perguntas->have_posts()) : $perguntas->the_post(); ?>
				<div class="card">
					<?php if ( has_post_thumbnail() ) : ?> 
						<a class="card-img-top py-3" href="<?php the_permalink();?>">
			    			<img class="card-img-top" src="<?php bloginfo('template_directory');?>/assets/imagens/pergunta_banner.png" alt="">
						</a>
					<?php endif; ?>
					<div class="card-body p-0">
						<a class="card-title titulo d-inline-block" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>	

						<p class="data">
							<?php echo get_the_date( 'd/m/Y',$post->ID );
								$data_atualizacao = get_field('data_atualizacao');
								if(!empty($data_atualizacao)){
							?>
								- atualizada em: 
							<?php
								echo $data_atualizacao; 
								}
							?>
						</p>

						<a class="card-text resumo d-inline-block" href="<?php the_permalink(); ?>">
							<?php echo get_the_excerpt($post->ID); ?>
						</a>
					</div> <!-- fim card-body -->

					<div class="card-footer">
						<?php if( get_post_meta($post->ID, 'tempo_leitura', true ) != '' ) { ?>
							<span class="tempo-leitura">tempo de leitura: 
							<?php
								echo get_post_meta($post->ID, 'tempo_leitura', true) . "min";
							?>
							</span>
							<?php } ?>
						<a class="azul4 hoverespecial hoverespecial-azul4 float-right font-weight-bold" href="<?php the_permalink(); ?>">saiba +<span></span></a>
					</div> <!-- fim card-footer -->
				</div> <!-- fim card -->
			<?php endwhile; endif; // wp_reset_query();?>
			<a class="card azul4 text-center justify-content-center" href="https://www.ufrgs.br/telessauders/perguntas">
				<img class="align-self-center" src="<?php bloginfo('template_directory');?>/assets/imagens/arrow_dirpeq_azul2.svg" width="40">
				<span class="d-inline-block mt-3 font-size-dezoito">ver todas</span>
			</a>
		</div> <!-- fim card deck -->
	</div>
</div> <!-- end container -->
<?php endif; ?>


<div class="container">
	<div class="row ultimas-noticias desktop">
		<div class="col-12 mb-4 mt-5">
			<h4 class="font-weight-black">Todas as notícias</h4>
		</div>
	</div>
	<div class="row noticias-geral">
		<?php
			rewind_posts(); // Reinicia o query da página archive
			$count = 0;
			// Para alterar a quantidade de posts por página ir no painel Wordpress Admin
			//	Configurações -> Leitura, e alterar a opção "As páginas do blog mostram no máximo"
			// 	para o número de posts desejado.		
		?>
		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
		<?php if(($count%3) == 0): ?>
			<div class="card-deck mb-lg-5 w-100 mx-0">
		<?php endif; 
			$count++; 
		?>
			<div class="card py-3">
				<?php if ( has_post_thumbnail() ) : ?> 
					<a class="card-img-top pb-3" href="<?php the_permalink();?>">
						<?php 
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail-noticias-desktop' );   
							if ($image) : ?>
		    					<img class="card-img-top" src="<?php echo $image[0]; ?>" alt="">
							<?php endif; ?>
					</a>
				<?php endif; ?>
				<div class="card-body p-0">
					<a class="card-title titulo d-inline-block" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>	

					<p class="data">
						<?php echo get_the_date( 'd/m/Y',$post->ID );
							$data_atualizacao = get_field('data_atualizacao');
							if(!empty($data_atualizacao)){
						?>
								- atualizada em: 
						<?php
								echo $data_atualizacao; 
							}
						?>
					</p>

					<a class="card-text resumo d-inline-block" href="<?php the_permalink(); ?>">
						<?php echo get_the_excerpt($post->ID); ?>
					</a>
				</div> <!-- fim card-body -->

				<div class="card-footer">
					<?php if( get_post_meta($post->ID, 'tempo_leitura', true ) != '' ) { ?>
						<span class="tempo-leitura">tempo de leitura: 
						<?php
							echo get_post_meta($post->ID, 'tempo_leitura', true) . "min";
							?>
						</span>
					<?php } ?>		
					<a class="azul4 hoverespecial hoverespecial-azul4 float-right font-weight-bold" href="<?php the_permalink(); ?>">saiba +<span></span></a>
				</div> <!-- fim card-footer -->
			</div> <!-- fim card -->
		<?php if(($count%3) == 0): ?>
			</div> <!-- fim card deck -->
		<?php endif; ?>
		<?php endwhile; endif; ?>
		<?php if(($count%3) != 0): ?>
			</div> <!-- fim card deck -->
		<?php endif; ?>
			
	</div>
	<div class="row mx-0 my-5 paginacao paginacao-noticias">
		<div class="col-12">
			<div class="desktop">
				<?php 
					echo paginate_links( array(
		   	        'mid_size' => 2,
		   	        'prev_text' => 'anterior',
					'next_text' => 'próxima',
					));
				?>
			</div>
			<div class="mobile">
				<?php 
					echo paginate_links( array(
		   	        'mid_size' => 2,
		   	        'prev_text' => '  ',
					'next_text' => '  ',
					));
				?>
			</div>
		</div>
	</div>
</div> <!-- end container -->

<div class="container-fluid mobile">
	<?php get_template_part('parts/home','newsletter-mobile');?>
	<?php //get_template_part('parts/apps','mobile');?>
</div>


<?php get_footer();?>