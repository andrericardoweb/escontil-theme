<?php
  //Template Name: Serviços

  get_header();
?>

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
         <img src="images/certificado-digital.jpg">
         <h3>Certificado Digital</h3>
         <p>Em parceria com a FENACON - AR SERVICE - Santana do Ipanema/AL, realizamos a emissão do seu certificado digital. Ganhe rapidez, segurança e economia.</p>
         <a href="#">Saiba mais <i class="fas fa-angle-right"></i></a>
      </div><!--ultimas-publicacoes-item-->

      <div class="destaques-interno-item">
        <img src="images/recuperacao-credito.jpg">
        <h3>Recuperação de Créditos</h3>
        <p>Sua empresa é optante pelo Simples Nacional? Então você pode ter direito a Recuperação de Créditos Tributários. Aproveite essa possibilidade de injetar novos recursos na sua empresa.</p>
        <a href="#">Saiba mais <i class="fas fa-angle-right"></i></a>
      </div><!--ultimas-publicacoes-item-->

      <div class="destaques-interno-item">
        <img src="images/registro-de-marcas.jpg">
        <h3>Registro de Marcas</h3>
        <p>Somos parceiros da Ideal Marcas & Patentes - empresa com mais de 20 anos de experiência no registro de Marcas, Patentes, Propriedade Industrial e Intelectual.</p>
        <a href="#">Saiba mais <i class="fas fa-angle-right"></i></a>
      </div><!--ultimas-publicacoes-item-->

    </div><!--ultimas-publicacoes-->   
  </section>
  
  <!-- CTA -->
  <?php include(TEMPLATEPATH . "/inc/cta-section.php"); ?>

  <!-- Sugestoes - Form -->
  <?php include(TEMPLATEPATH . "/inc/sugestoes-section.php"); ?>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>