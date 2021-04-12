<?php
  //Template Name: Serviços

  get_header();
?>

<?php $home = get_page_by_title('home'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  <!-- BANNER - INTRO -->
  <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

  <!-- SERVIÇOS -->
  <section class="container servicos-interno-container">
    <div class="servicos-interno">

    <?php if(have_rows('item_servicos')) : while(have_rows('item_servicos')) : the_row() ?>

      <div class="servicos-interno-item">
        <div class="servicos-interno-item-titulo">
          <h3><?php the_sub_field('servicos_titulo'); ?></h3>
          <img src="<?php the_sub_field('servicos_image'); ?>">         
        </div>
        
        <p><?php the_sub_field('servicos_descricao'); ?> </p>
        
        <div class="servicos-interno-btn">
          <a href="<?php the_sub_field('servicos_link'); ?>">Saiba mais <i class="fas fa-angle-right"></i></a>
        </div>

      </div><!--servicos-item-->

    <?php endwhile; else : endif; ?>
      
    </div><!--servicos-->
  </section><!--container-->


  <!-- Diferenciais -->
  <?php include(TEMPLATEPATH . "/inc/diferenciais-section.php"); ?>

  <!-- Missao -->
  <?php include(TEMPLATEPATH . "/inc/missao-section.php"); ?>

  <!-- ULTIMAS-PUBLICAÇÕES -->
  <section class="destaques-interno-bg">
    <h2>Destaques</h2>
    <div class="container destaques-interno">
      <div class="destaques-interno-item">
         <img src="<?php the_field('destaque1_imagem', $home); ?>">
         <h3><?php the_field('destaque1_titulo', $home); ?></h3>
         <p><?php the_field('destaque1_descricao', $home); ?></p>
         <a href="<?php the_field('destaque1_link', $home); ?>">Saiba mais <i class="fas fa-angle-right"></i></a>
      </div><!--ultimas-publicacoes-item-->

      <div class="destaques-interno-item">
         <img src="<?php the_field('destaque2_imagem', $home); ?>">
         <h3><?php the_field('destaque2_titulo', $home); ?></h3>
         <p><?php the_field('destaque2_descricao', $home); ?></p>
         <a href="<?php the_field('destaque2_link', $home); ?>">Saiba mais <i class="fas fa-angle-right"></i></a>
      </div><!--ultimas-publicacoes-item-->

      <div class="destaques-interno-item">
         <img src="<?php the_field('destaque3_imagem', $home); ?>">
         <h3><?php the_field('destaque3_titulo', $home); ?></h3>
         <p><?php the_field('destaque3_descricao', $home); ?></p>
         <a href="<?php the_field('destaque3_link', $home); ?>">Saiba mais <i class="fas fa-angle-right"></i></a>
      </div><!--ultimas-publicacoes-item-->

    </div><!--ultimas-publicacoes-->   
  </section>
  
  <!-- CTA -->
  <?php include(TEMPLATEPATH . "/inc/cta-section.php"); ?>

  <!-- Sugestoes - Form -->
  <?php include(TEMPLATEPATH . "/inc/sugestoes-section.php"); ?>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>