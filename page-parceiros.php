<?php
  //Template Name: Parceiros

  get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <!-- BANNER - INTRO -->
  <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

  <!-- PÁG. PARCEIROS -->

  <section class="container parceiros-container">
    <p data-anime="800" class="fadeInDown"><?php the_field('parceiros_introducao'); ?></p>
    <div data-anime="1200" class="parceiros-interno">

      <?php if(have_rows('item_parceiros_logo')) : while(have_rows('item_parceiros_logo')) : the_row() ?>
        
        <a href="<?php the_sub_field('parceiros_link'); ?>">
          <div class="parceiros-interno-item">
            <img src="<?php the_sub_field('parceiros_logo'); ?>" alt="<?php the_sub_field('parceiros_nome'); ?>">
          </div>
        </a>

      <?php endwhile; else : endif; ?>
      
    </div><!--servicos-->
  </section><!--container-->

  <!-- Parceiros em Destaque -->

  <section class="parceiro-destaque-container">

    <?php if(have_rows('item_parceiros_destaque')) : while(have_rows('item_parceiros_destaque')) : the_row() ?>

      <div class="<?php the_sub_field('parceiros_destaque_corfundo'); ?>">
        <div class="container <?php the_sub_field('parceiros_destaque_posicao'); ?>">
          <div class="parceiro-destaque-info">
            <h3><?php the_sub_field('parceiros_destaque_titulo'); ?></h3>
            <p><?php the_sub_field('parceiros_destaque_descricao'); ?></p>
          </div>
    
          <div class="parceiro-destaque-img">
            <img src="<?php the_sub_field('parceiros_destaque_imagem'); ?>" alt="<?php the_sub_field('parceiros_destaque_titulo'); ?>">
          </div>
        </div>
      </div>

    <?php endwhile; else : endif; ?>   

  </section>

  <!-- CTA -->
  <?php include(TEMPLATEPATH . "/inc/cta-section.php"); ?>

  <!-- Sugestoes - Form -->
  <?php include(TEMPLATEPATH . "/inc/sugestoes-section.php"); ?>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>