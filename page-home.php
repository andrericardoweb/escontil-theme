<?php
  //Template Name: Home

  get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- Banner - Home -->
  <section class="banner">
    <h1><?php the_field('titulo_introducao'); ?>Escontil Contadores Associados</h1>
    <h2><?php the_field('slogan_introducao'); ?>Soluções de Gestão Empresarial e Contábeis</h2>
    <div class="banner-btn">
      <a class="btn-whatsapp-banner" href="https://api.whatsapp.com/send?phone=558236211108" target="_blank">Atendimento via WhatsApp</a>
    </div>  
  </section><!-- /banner -->

  <!-- Serviços -->
  <section class="container servicos-container">
    <h2>Áreas de atuação</h2>
    <div class="servicos">

      <div class="servicos-item">
        <h3>Departamento Pessoal</h3>
        <p>Imprescindível para o bom funcionamento da empresa.</p>
        <div class="servicos-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/ilustration/departamento-pessoal.svg">
        </div>
        <div class="servicos-btn">
          <a href="#">Saiba mais</a>
        </div>    
      </div><!--servicos-item-->

      <div class="servicos-item">
        <h3>Escrita Fiscal e Tributos</h3>
        <p>A contabilidade fiscal é uma das áreas mais delicadas de uma empresa.</p>
        <div class="servicos-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/ilustration/escrita-fiscal-tributos.svg">
        </div>        
        <div class="servicos-btn">
          <a href="#">Saiba mais</a>
        </div>    
      </div><!--servicos-item-->

      <div class="servicos-item">
        <h3>Área Contábil</h3>
        <p>Visa a instruir o empreendedor com informações sobre os aspectos econônico/financeiro.</p>
        <div class="servicos-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/ilustration/area-contabil.svg">
        </div>
        <div class="servicos-btn">
          <a href="#">Saiba mais</a>
        </div>    
      </div><!--servicos-item-->

      <div class="servicos-item">
        <h3>Legalização Fiscal</h3>
        <p>Responsável por conduzir processos desde o nascimento da empresa até o seu encerramento.</p>
        <div class="servicos-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/ilustration/legalizacao-fiscal.svg">
        </div>
        <div class="servicos-btn">
          <a href="#">Saiba mais</a>
        </div>    
      </div><!--servicos-item-->
  
    </div><!--servicos-->
  </section><!--container-->

  <!-- Destaque 1 -->
  <section class="destaque bg-degrade-red">
    <div class="container destaque">
      <div class="destaque-1-info destaque-1-item flex-item-1">
        <h2><?php the_field('destaque1_titulo'); ?>Recuperação de créditos tributários</h2>
        <p><?php the_field('destaque1_descricao'); ?>Sua empresa é optante pelo Simples Nacional? Então você pode ter direito a Recuperação de Créditos Tributários. Aproveite essa possibilidade de injetar novos recursos na sua empresa.</p>
        <a href="#">Saiba mais</a>        
      </div><!--destaque-info-->
      <div class="destaque-1-img destaque-1-item flex-item-1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/recuperacao-credito.jpg" alt="Recuperação de Créditos Tributários">
      </div><!---destaque-img-->
    </div><!--destaque-->
  </section><!--destaque-bg-red-->

  <!-- Diferenciais -->
  <?php include(TEMPLATEPATH . "/inc/diferenciais-section.php"); ?>

  <!-- Destaque 2 -->
  <section class="destaque bg-degrade-red">
    <div class="container destaque">
      <div class="destaque-2-img destaque-2-item flex-item-1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/certificado-digital.jpg" alt="Certificado Digital">
      </div><!---destaque-img-->
      <div class="destaque-2-info destaque-2-item flex-item-1">
        <h2><?php the_field('destaque2_titulo'); ?>Certificado Digital</h2>
        <p><?php the_field('destaque2_descricao'); ?>Em parceria com a FENACON - AR SERVICE - Santana do Ipanema/AL, realizamos a emissão do seu certificado digital. Ganhe rapidez, segurança e economia.</p>
        <a href="#">Saiba mais</a>        
      </div><!--destaque-info-->
    </div><!--destaque-->
  </section><!--bg-degrade-red-->

  <!-- Destaque 3 -->
  <section class="destaque bg-degrade-gray ">
    <div class="container destaque">
      <div class="destaque-3-info destaque-3-item flex-item-1">
        <h2><?php the_field('destaque3_titulo'); ?>Registro de Marcas</h2>
        <p><?php the_field('destaque3_descricao'); ?>Somos parceiros da Ideal Marcas & Patentes - empresa com mais de 20 anos de experiência no registro de Marcas, Patentes, Propriedade Industrial e Intelectual, Direito Autoral, Código de Barras, Softwares, Desenho Industrial, Nacional e Internacional.</p>
        <a href="#">Saiba mais</a>        
      </div><!--destaque-info-->
      <div class="destaque-3-img destaque-3-item flex-item-1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/registro-de-marcas.jpg" alt="Registro de Marcas">
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