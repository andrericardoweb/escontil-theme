<?php get_header(); ?>

  <!-- BANNER -->
  <section class="banner-page">
    <div class="container">
      <h2>Blog</h2>
    </div>
  </section>

  <!--Página do artigo-->
  <section class="container artigo-container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <div class="artigo-item">
        <h2><?php the_title(); ?></h2>
        
        <div class="artigo-texto">
        <?php the_content(); ?>
        </div>  
      
      </div>

    <?php endwhile; else: ?>
      
      <p><?php _e('Desculpe, não há publicações'); ?></p>
      
    <?php endif ?>
  
  </section>

  <!-- CTA -->
  <?php // include(TEMPLATEPATH . "/inc/missao-section.php"); ?>

  <?php get_footer(); ?>
