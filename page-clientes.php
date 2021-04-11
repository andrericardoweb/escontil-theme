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
    <p>Trabalhamos com profissionalismo e responsabilidade e dessa maneira conquistamos a confiança dos nossos clientes em Maceió e Sertão Alagoano.</p>
    <div class="clientes-interno">
      <div class="clientes-interno-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/clientes/vangas.png" alt="Van Gás">
      </div>
      
      <div class="clientes-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clientes/vanferragens.png" alt="Van Ferramentas">
      </div>
      
      <div class="clientes-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clientes/amorin-moveis-e-eletros.png" alt="Amorin Móveis e Eletros">
      </div>

      <div class="clientes-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clientes/agrovan.png" alt="Agro Van">
      </div>
      
      <div class="clientes-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clientes/zoo-premium.png" alt="Zoo Premium">
      </div>
      
      <div class="clientes-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clientes/alagoaseletrolar.png" alt="Alagoas Eletrolar">
      </div>
      
      <div class="clientes-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clientes/mercado-lopes.png" alt="Mercado Lopes">
      </div>
      
      <div class="clientes-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clientes/comercial-ferreira.png" alt="Comercial Ferreira">
      </div>
      
      <div class="clientes-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clientes/supermercado-melhor-preco.png" alt="Supermercado Melhor Preço">
      </div>  
    </div><!--servicos-->
  </section><!--container-->

  <!-- CTA -->
  <?php include(TEMPLATEPATH . "/inc/cta-section.php"); ?>

  <!-- Sugestoes - Form -->
  <?php include(TEMPLATEPATH . "/inc/sugestoes-section.php"); ?>

  <?php endwhile; else: endif; ?>
  
  <?php get_footer(); ?>