<?php
  //Template Name: Clientes

  get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <!-- BANNER - INTRO -->
  <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

  <!-- PÁG. CLIENTES -->

  <!-- SERVIÇOS -->
  <section class="container clientes-container">
    <p><?php the_field('clientes_introducao'); ?></p>
    <div class="clientes-interno">
    
      <?php if(have_rows('item_clientes_logo')) : while(have_rows('item_clientes_logo')) : the_row() ?>
      
        <a href="<?php the_sub_field('clientes_link'); ?>" target="_blank">
          <div class="clientes-interno-item">
            <img src="<?php the_sub_field('clientes_logo'); ?>" alt="<?php the_sub_field('clientes_nome'); ?>">
          </div>
        </a>

      <?php endwhile; else : endif; ?>

    </div><!--servicos-->
  </section><!--container-->

  <!-- CTA -->
  <?php include(TEMPLATEPATH . "/inc/cta-section.php"); ?>

  <!-- Sugestoes - Form -->
  <?php include(TEMPLATEPATH . "/inc/sugestoes-section.php"); ?>

  <?php endwhile; else: endif; ?>
  
  <?php get_footer(); ?>