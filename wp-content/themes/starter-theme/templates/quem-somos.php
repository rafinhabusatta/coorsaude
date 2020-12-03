<!-- Template name: Quem-Somos -->
<?php get_header(); ?>
<div class="container-fluid">
    <div class="row bg-header">
        <div class="col-12 page-header quem-somos">
            <div class="row">
                <div class="col-12 px-md-0">
                    <h1 class="greenTitle text-center mb-4">Quem Somos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-8 px-md-0 m-xl-auto">
                    <p class="text-justify">
                        A CoorSaúde é constituída pelas seguintes representações: dois docentes de cada um
                        dos cursos da Saúde da UFRGS, indicados pelas respectivas Comissões de
                        Graduação, dois docentes pela Pró-Reitoria de Graduação; um discente e um
                        servidor técnico-administrativos, no cargo de Técnico em Assuntos Educacionais
                        das Unidades participantes da Coordenadoria.
                    </p>
                </div>
                <div class="col-6 col-xl-4 d-none d-md-block pr-0 pl-4 my-auto">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/quem-somos-header.svg" alt="Ícone do espírito de time" class="mt-5">
                </div>
            </div>
        </div>
    </div>
    <div class="row equipe justify-content-around bloco-container">
        <div class="col-12">
            <h2 class="greenTitle text-center mb-4">Equipe</h2>
        </div>
        <div class="col-12">
            <h3 class="font-weight-bold text-uppercase equipe-nomes mb-3">Núcleo de Coordenação</h3>
        </div>
        <?php 
            $args = array(
            'post_type' => 'team_coordenacao',
            );
            $coordenacao = new WP_Query ( $args );
        ?>
        <?php if ($coordenacao -> have_posts()) : while ($coordenacao -> have_posts()) : $coordenacao -> the_post(); ?>
            <div class="col-12 col-md-5 col-lg-4 mb-4">
                <div class="b-left box-equipe">
                    <h3 class="font-weight-bold">
                        <?php the_title() ?>
                    </h3>
                    <p class="mb-3">
                        <?php echo get_field("cargo")?>
                    </p>
                </div>
            </div>
        <?php endwhile; endif; ?>
        <div class="col-12">
            <h3 class="font-weight-bold text-uppercase equipe-nomes my-3">Apoio Pedagógico e Secretaria CoorSaúde</h3>
        </div>
        <?php 
            $args = array(
            'post_type' => 'team_secretaria',
            );
            $coordenacao = new WP_Query ( $args );
        ?>
        <?php if ($coordenacao -> have_posts()) : while ($coordenacao -> have_posts()) : $coordenacao -> the_post(); ?>
            <div class="col-12 col-md-5 col-lg-4 mb-4">
                <div class="b-left box-equipe">
                    <h3 class="font-weight-bold">
                        <?php the_title() ?>
                    </h3>
                    <p class="mb-3">
                        <?php echo get_field("cargo")?>
                    </p>
                </div>
            </div>
        <?php endwhile; endif; ?>
        <div class="col-12">
            <h3 class="font-weight-bold text-uppercase equipe-nomes my-3">Entre em contato pelo Email</h3>
            <a class="font-weight-bold" href="mailto:coordsaude@ufrgs.br">coordsaude@ufrgs.br</a>
        </div>
        <div class="col-12">
            <h3 class="font-weight-bold text-uppercase equipe-nomes my-3">Membros da CoorSaúde Representantes das COMGRADS</h3>
        </div>
        <?php 
            $args = array(
            'post_type' => 'team_membros',
            );
            $membros = new WP_Query ( $args );
        ?>
        <?php if ($membros -> have_posts()) : while ($membros -> have_posts()) : $membros -> the_post(); ?>
            <div class="col-12 col-md-5 col-lg-4 mb-4">
                <h3 class="font-weight-bold"><?php the_title() ?></h3>
                <div class="b-left box-equipe">
                    <h3 class="font-weight-bold">
                        <?php echo get_field("titular")?>
                    </h3>
                    <p class="mb-3">
                        Titular
                    </p>
                    <h3 class="font-weight-bold">
                        <?php echo get_field("suplente")?>
                    </h3>
                    <p>
                        Suplente
                    </p>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div> 
</div>
<?php get_footer(); ?>

<?php
    function create_coordenacao($nome, $cargo, $contato){
        $html .= '<div class="col-12 col-md-5 col-lg-4 mb-4">';
        $html .= '<div class="b-left box-equipe">';
        $html .= '<h3 class="font-weight-bold">$nome</h3>';
        $html .= '<p class="mb-3">$cargo</p>';
        $html .= '</div>';
        $html .= '</div>';
    }
?>
<?php
    function create_membros($curso, $titular, $suplente){
        $html .= '<div class="col-12 col-md-5 col-lg-4 mb-4">';
        $html .= '<h3 class="font-weight-bold">$curso</h3>';
        $html .= '<div class="b-left box-equipe">';
        $html .= '<h3 class="font-weight-bold">$titular</h3>';
        $html .= '<p class="mb-3">Titular</p>';
        $html .= '<h3 class="font-weight-bold">$suplente</h3>';
        $html .= '<p>Suplente</p>';
        $html .= '</div>';
        $html .= '</div>';
    }
?>