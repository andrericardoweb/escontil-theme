<?php
  //Template Name: Quem Somos

  get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- BANNER - INTRO -->
  <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

  <!-- Quem Somos -->
  <section class="container quem-somos">
    <div data-anime="800" class="fadeInLeft flex-item-1 quem-somos-img">
      <img src="<?php the_field('quemsomos_img'); ?>" alt="">
    </div>
    <div data-anime="800" class="fadeInRight flex-item-2 quem-somos-txt">
      <p class="quem-somos-txt-destaque"><?php the_field('quemsomos_txt_destaque'); ?></p>

      <?php the_field('quemsomos_txt'); ?>

      
    </div>
  </section>

  <!-- Missão, Visão e Valores -->
  <section class="missa-visao-valores-bg">
    <div class="container missa-visao-valores">
      <div class="flex-item-1 missa-visao-valores-item">
        <div data-anime="1200" class="missao-item">
          <h3>Missão</h3>
          <p><?php the_field('quemsomos_missao'); ?></p>
        </div>

        <div data-anime="1300" class="visao-item">
          <h3>Visão</h3>
          <p><?php the_field('quemsomos_visao'); ?></p>
        </div>
      </div><!--missa-visao-valores-item-->

      <div class="flex-item-2 missa-visao-valores-item">
        <div data-anime="1400" class="valores-item">
          <h3>Valores</h3>
          <ul>

            <?php if(have_rows('item_valores')) : while(have_rows('item_valores')) : the_row() ?>            
              <li><i class="fas fa-angle-right"></i> <?php the_sub_field('valores'); ?></li>            
            <?php endwhile; else : endif; ?>

          </ul>
        </div>
      </div><!--missa-visao-valores-item-->
    </div><!--missa-visao-valores-->
  </section><!--missa-visao-valores-bg-->
  
  <!-- CTA -->
  <?php include(TEMPLATEPATH . "/inc/cta-section.php"); ?>

</section>

  <!-- Diretores -->
  <section class="diretores-bg">
    <h2>Diretores</h2>

    <div class="container diretores">
      <div class="diretores-item">
        <img src="<?php the_field('diteroria1_imagem'); ?>">
        <h3><?php the_field('diteroria1_nome'); ?> </h3>
        <p><?php the_field('diteroria1_descricao'); ?></p>
      </div>
      <!---diretores-item-->

      <div class="diretores-item">
        <img src="<?php the_field('diteroria2_imagem'); ?>">
        <h3><?php the_field('diteroria2_nome'); ?></h3>
        <p><?php the_field('diteroria2_descricao'); ?></p>
      </div>
      <!---diretores-item-->
    </div>

  </section>

  <!-- Sugestoes - Form -->
  <?php include(TEMPLATEPATH . "/inc/sugestoes-section.php"); ?>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>