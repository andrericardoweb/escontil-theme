<?php
  //Template Name: Home

  get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- Banner - Home -->
  <section class="banner">
    <h1><?php the_field('titulo_banner'); ?></h1>
    <h2><?php the_field('slogan_banner'); ?></h2>
    <div class="banner-btn">
      <a class="btn-whatsapp-banner" href="https://api.whatsapp.com/send?phone=558236211108" target="_blank">Atendimento via WhatsApp</a>
    </div>  
  </section><!-- /banner -->

  <!-- Serviços -->
  <section class="container servicos-container">
    <h2>Áreas de atuação</h2>
    <div class="servicos">

    <?php if(have_rows('item_servicos_home')) : while(have_rows('item_servicos_home')) : the_row() ?>
    <div class="servicos-item">
        <h3><?php the_sub_field('servicos_titulo_home'); ?></h3>
        <p><?php the_sub_field('servicos_descricao_home'); ?></p>
        <div class="servicos-img">
          <img src="<?php the_sub_field('servicos_image_home'); ?>">
        </div>
        <div class="servicos-btn">
          <a href="<?php the_sub_field('servicos_link_home'); ?>">Saiba mais</a>
        </div>    
      </div><!--servicos-item-->           

    <?php endwhile; else : endif; ?>
  
    </div><!--servicos-->
  </section><!--container-->

  <!-- Destaque 1 -->
  <section class="destaque bg-degrade-red">
    <div class="container destaque">
      <div class="destaque-1-info destaque-1-item flex-item-1">
        <h2><?php the_field('destaque1_titulo'); ?></h2>
        <p><?php the_field('destaque1_descricao'); ?></p>
        <a href="<?php the_field('destaque1_link'); ?>">Saiba mais</a>        
      </div><!--destaque-info-->
      <div class="destaque-1-img destaque-1-item flex-item-1">
        <img src="<?php the_field('destaque1_imagem'); ?>">
      </div><!---destaque-img-->
    </div><!--destaque-->
  </section><!--destaque-bg-red-->

  <!-- Diferenciais -->
  <?php include(TEMPLATEPATH . "/inc/diferenciais-section.php"); ?>

  <!-- Destaque 2 -->
  <section class="destaque bg-degrade-red">
    <div class="container destaque">
      <div class="destaque-2-img destaque-2-item flex-item-1">
        <img src="<?php the_field('destaque2_imagem'); ?>">
      </div><!---destaque-img-->
      <div class="destaque-2-info destaque-2-item flex-item-1">
        <h2><?php the_field('destaque2_titulo'); ?></h2>
        <p><?php the_field('destaque2_descricao'); ?></p>
        <a href="<?php the_field('destaque2_link'); ?>">Saiba mais</a>        
      </div><!--destaque-info-->
    </div><!--destaque-->
  </section><!--bg-degrade-red-->

  <!-- Destaque 3 -->
  <section class="destaque bg-degrade-gray ">
    <div class="container destaque">
      <div class="destaque-3-info destaque-3-item flex-item-1">
        <h2><?php the_field('destaque3_titulo'); ?></h2>
        <p><?php the_field('destaque3_descricao'); ?></p>
        <a href="<?php the_field('destaque3_link'); ?>">Saiba mais</a>        
      </div><!--destaque-info-->
      <div class="destaque-3-img destaque-3-item flex-item-1">
        <img src="<?php the_field('destaque3_imagem'); ?>">
      </div><!---destaque-img-->
    </div><!--destaque-->
  </section><!--bg-degrade-gray-->

  <!-- Missao -->
  <?php include(TEMPLATEPATH . "/inc/missao-section.php"); ?>

  <!-- Últimas Publicacoes -->
  <section class="ultimas-publicacoes-bg">
    <h2>Últimas Publicações</h2>
    <div class="container ultimas-publicacoes">
      <div class="ultimas-publicacoes-item">
         <img src="<?php echo get_template_directory_uri(); ?>/images/ultima-publicacao.jpg">
         <h3>Transforme seus empregados em donos</h3>
         <p>Faça de seus colaboradores donos de sua empresa. É isso mesmo! Você não leu errado e pode ficar despreocupado.</p>
         <a href="#">Continuar lendo</a>
      </div><!--ultimas-publicacoes-item-->

      <div class="ultimas-publicacoes-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ultima-publicacao.jpg">
        <h3>Transforme seus empregados em donos</h3>
        <p>Faça de seus colaboradores donos de sua empresa. É isso mesmo! Você não leu errado e pode ficar despreocupado.</p>
        <a href="#">Continuar lendo</a>
      </div><!--ultimas-publicacoes-item-->

      <div class="ultimas-publicacoes-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ultima-publicacao.jpg">
        <h3>Transforme seus empregados em donos</h3>
        <p>Faça de seus colaboradores donos de sua empresa. É isso mesmo! Você não leu errado e pode ficar despreocupado.</p>
        <a href="#">Continuar lendo</a>
     </div><!--ultimas-publicacoes-item-->

      <div class="ultimas-publicacoes-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ultima-publicacao.jpg">
        <h3>Transforme seus empregados em donos</h3>
        <p>Faça de seus colaboradores donos de sua empresa. É isso mesmo! Você não leu errado e pode ficar despreocupado.</p>
        <a href="#">Continuar lendo</a>
     </div><!--ultimas-publicacoes-item-->
    </div><!--ultimas-publicacoes-->   
  </section>

  <!-- Sugestoes - Form -->
  <?php include(TEMPLATEPATH . "/inc/sugestoes-section.php"); ?>
  

  <?php endwhile; else: endif; ?>
<?php get_footer(); ?>