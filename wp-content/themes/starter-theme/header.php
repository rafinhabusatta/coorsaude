<!doctype html>
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

		<!-- Estilo Personalizado -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilo.css">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header id="masthead" class="sticky-top">
			<nav class="navbar navbar-expand-lg navbar-light fundo-coor">
				<a href="<?php echo site_url(); ?>" class="navbar-brand">
					<img src="<?php bloginfo("template_directory"); ?>/img/logo.png" alt="CoorSaúde">
				</a>
				<button class="navbar-toggler" data-toggle="collapse" type="button" data-target="#menu" aria-label="Menu de navegação">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="menu">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="<?php echo site_url(); ?>" class="nav-link">Home</a></li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link" href="" id="navbar-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Coorsaúde
								<span>
									<i class="fas fa-chevron-down"></i>
								</span>
							</a>
							<div class="dropdown-menu bg-submenu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="">Calendário de Reuniões</a>
								<a class="dropdown-item" href="">Gestão 2017-2019</a>
							</div>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url(); ?>/cenarios-de-pratica">Cenários de Prática</a>
							<!-- <div class="dropdown-menu bg-submenu" aria-labelledby="navbar-dropdown">
								<a class="dropdown-item" href="">Distrito Glória/Cruzeiro/Cristal</a>
								<a class="dropdown-item" href="">Distrito Centro</a>
								<a class="dropdown-item" href="">Estágios Obrigatórios</a>
								<a class="dropdown-item" href="">Novo Tutorial SMS 2019</a>
							</div> -->
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url(); ?>/comite-gestor">Comitê Gestor</a>
							<!-- <div class="dropdown-menu bg-submenu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="">Instâncias Participantes</a>
								<a class="dropdown-item" href="">Calendário de Reuniões</a>
								<a class="dropdown-item" href="">Projetos da UFRGS em Execução</a>
								<a class="dropdown-item" href="">Atividade de Familiarização</a>
								<a class="dropdown-item" href="">Seleção de Preceptores</a>
							</div> -->
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url(); ?>/disciplinas-integradoras">Disciplinas Integradoras</a>
							<!-- <div class="dropdown-menu dropdown-menu-right bg-submenu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="">PIS I</a>
								<a class="dropdown-item" href="">Semestre de Realização - PIS I</a>
								<a class="dropdown-item" href="">Produções</a>
								<a class="dropdown-item" href="">PIS II</a>
							</div> -->
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbar-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais</a>
							<div class="dropdown-menu dropdown-menu-right bg-submenu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo site_url(); ?>/publicacoes">Publicações</a>
								<a class="dropdown-item" href="<?php echo site_url(); ?>/links">Links</a>
								<a class="dropdown-item" href="<?php echo site_url(); ?>/contato">Contato</a>
							</div>
						</li>
					</ul>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
