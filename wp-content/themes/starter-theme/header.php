<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<!-- Animte CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

		<!-- Estilo Personalizado -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilo.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/contato.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/publicacao.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/partials/corona.css">

		<title><?php wp_title();?></title>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header id="masthead" class="sticky-top">
			<nav class="navbar navbar-expand-lg navbar-light fundo-coor">
				<a href="<?php echo site_url(); ?>" class="navbar-brand">
					<img src="<?php bloginfo("template_directory"); ?>/img/logo.png" alt="Coordenadoria da Saúde da Universidade Federal do Rio Grande do Sul">
				</a>
				<button class="navbar-toggler" data-toggle="collapse" type="button" data-target="#menu" aria-label="Menu de navegação">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="menu">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>/cenarios-de-pratica" class="nav-link">Cenários de Prática</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url(); ?>/comite-gestor">Comitê Gestor</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url(); ?>/disciplinas-integradoras">Disciplinas Integradoras</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>/pagina-em-construcao" class="nav-link">Estágios</a>
						</li>
						<!-- <li class="nav-item">
							<a href="/pagina-em-construcao" class="nav-link">PET-Saúde</a>
						</li> -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbar-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais</a>
							<div class="dropdown-menu dropdown-menu-right bg-submenu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo site_url(); ?>/quem-somos">Quem Somos</a>
								<a class="dropdown-item" href="<?php echo site_url(); ?>/contato">Contato</a>
								<!-- <a class="dropdown-item" href="<?php echo site_url(); ?>/links">Links</a> -->
								<a class="dropdown-item" href="<?php echo site_url(); ?>/publicacoes">Publicações</a>
								<a class="dropdown-item" href="<?php echo site_url(); ?>/coronavirus">Coronavírus</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>
