<!-- Template name: GT -->
<?php get_header(); ?>
<div class="container-fluid">
    <div class="row bg-header">
        <div class="col-12 page-header quem-somos">
            <div class="row">
                <div class="col-12 px-md-0">
                    <h1 class="greenTitle text-center mb-4">Grupos de Trabalho</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-8 px-md-0 m-xl-auto">
                    <p class="text-justify">
                        Grupos de Trabalho CoorSaúde (Estágios Intercursos, ERER, Bioética,  Seminário CoorSaúde e SMS/POA).
                    </p>
                </div>
                <div class="col-6 col-xl-4 d-none d-md-block pr-0 pl-4 my-auto">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/gt-header.svg" alt="Ícone do espírito de time" class="mt-5">
                </div>
            </div>
        </div>
    </div>
    <div class="row equipe justify-content-around bloco-container">
      <div class="col-12">
          <h2 class="greenTitle text-center mb-4">GT Bioética Intercursos</h2>
      </div>
      <div class="col-12">
        <p class="text-justify">
          Introdução: O GT Bioética tem como objetivo desenvolver ações interdisciplinares e interprofissionais que reflitam sobre as questões (bio)éticas compartilhadas por cursos de graduação de saúde da UFRGS, contribuindo assim, para o amadurecimento da proposta de construção de atividade de ensino intercursos.
        </p>
      </div>
      <div class="col-12 mt-4">
          <h3 class="font-weight-bold text-uppercase equipe-nomes mb-3">Membros</h3>
      </div>
      <?php 
          $args = array(
          'post_type' => 'team_bioetica',
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
      <div class="col-12 mt-5">
          <h2 class="greenTitle text-center mb-4">GT Estágios Saúde</h2>
      </div>
      <div class="col-12">
        <p class="text-justify">
        Introdução: O GT Estágios Saúde tem como objetivo qualificar os fluxos de organização dos estágios desde o acompanhamento dos termos de cooperação técnica com os serviços, bem como, sugerir formas de melhora dos fluxos, além de estar próximo das COMGRADS dos cursos da saúde e da PROGRAD, a fim de pensar em conjunto a qualificação destes fluxos.
        </p>
      </div>
      <div class="col-12 mt-4">
          <h3 class="font-weight-bold text-uppercase equipe-nomes mb-3">Membros</h3>
      </div>
      <?php 
          $args = array(
          'post_type' => 'team_estagios',
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
      <div class="col-12 mt-5">
          <h2 class="greenTitle text-center mb-4">GT ERER Saúde - Educação das Relações Étnico-Raciais</h2>
      </div>
      <div class="col-12">
        <p class="text-justify">
        Introdução: O GT ERER Saúde tem como objetivo fomentar a discussão sobre a temática de educação das relações étnico-raciais (ERER) nos cursos da saúde da UFRGS. É composto por docentes, técnicos e estudantes dos diferentes cursos de graduação em saúde e se propôe a assessorar, debater e capacitar professores, técnicos e estudantes para uma educação antirracista nos cursos de graduação da saúde. Além de compartilhar experiências,   inquietações e avanços onde existam disciplinas de ERER no currículo.
        </p>
      </div>
      <div class="col-12 mt-4">
          <h3 class="font-weight-bold text-uppercase equipe-nomes mb-3">Membros</h3>
      </div>
      <?php 
          $args = array(
          'post_type' => 'team_erer',
          );
          $membros = new WP_Query ( $args );
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
      <div class="col-12 mt-5">
          <h2 class="greenTitle text-center mb-4">GT Seminário Integrador CoorSaúde e SMS/POA</h2>
      </div>
      <div class="col-12">
        <p class="text-justify">
        Introdução: O GT Seminário Integrador tem como objetivo organizar e produzir o Seminário Integrador CoorSaúde e SMS/POA, o mesmo é realizado periodicamente a cada dois anos com intuito de compartilhar e avaliar, entre a universidade e os servidores, as suas experiências nos cenários de práticas em saúde e no Sistema Único de Saúde.
        </p>
      </div>
      <div class="col-12 mt-4">
          <h3 class="font-weight-bold text-uppercase equipe-nomes mb-3">Membros</h3>
      </div>
      <?php 
          $args = array(
          'post_type' => 'team_seminario',
          );
          $membros = new WP_Query ( $args );
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
    </div> 
</div>
<?php get_footer(); ?>

<?php
    function create_coordenacao($nome, $cargo){
        $html .= '<div class="col-12 col-md-5 col-lg-4 mb-4">';
        $html .= '<div class="b-left box-equipe">';
        $html .= '<h3 class="font-weight-bold">$nome</h3>';
        $html .= '<p class="mb-3">$cargo</p>';
        $html .= '</div>';
        $html .= '</div>';
    }
?>