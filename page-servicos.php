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
      <div class="servicos-interno-item">
        <div class="servicos-interno-item-titulo">
          <h3>Departamento<br>Pessoal</h3>
          <img src="images/ilustration/departamento-pessoal.svg">         
        </div>
        
        <p>O departamento pessoal é imprescindível para o bom funcionamento da empresa sabendo que é responsável pela organização e manutenção do arquivo que contém toda a documentação, expedida durante a realização das rotinas, exigidas pelo governo.</p>
        
        <div class="servicos-interno-btn">
          <a href="#">Saiba mais <i class="fas fa-angle-right"></i></a>
        </div>

      </div><!--servicos-item-->

      <div class="servicos-interno-item">
        <div class="servicos-interno-item-titulo">
          <h3>Escrita Fiscal e<br>Tributos</h3>
          <img src="images/ilustration/escrita-fiscal-tributos.svg">        
        </div>
        
        <p>Escrita Fiscal e Tributos é uma das áreas mais delicadas de uma empresa, é a contabilidade fiscal que registra os fatos do dia a dia, servindo como base para a apuração de impostos, atendimento entre as exigências fiscais e o controle das receitas e despesas da empresa.</p>
                
        <div class="servicos-interno-btn">
          <a href="#">Saiba mais <i class="fas fa-angle-right"></i></a>
        </div>

      </div><!--servicos-item-->

      <div class="servicos-interno-item">
        <div class="servicos-interno-item-titulo">
          <h3>Área<br>Contábil</h3>
          <img src="images/ilustration/area-contabil.svg">        
        </div>
        <p>A prestação de serviços na área contábil visa instruir o empreendedor com informações sobre aspectos de natureza econômico, financeira e física do patrimônio da empresa e suas transformações, o que compreende registros, demonstrações...</p>

        <div class="servicos-interno-btn">
          <a href="#">Saiba mais <i class="fas fa-angle-right"></i></a>
        </div>

      </div><!--servicos-item-->

      <div class="servicos-interno-item">
        <div class="servicos-interno-item-titulo">
          <h3>Legalização<br>Fiscal</h3>
          <img src="images/ilustration/legalizacao-fiscal.svg">        
        </div>

        <p>Se você tem interesse em iniciar seu próprio negócio (mas não sabe exatamente como fazê-lo), a Escontil Contadores Associados irá te ajudar a encontrar o melhor caminho para formalizar a sua empresa. O nosso escritório, coloca-se à sua disposição para fornecer toda orientação...</p>
        
        <div class="servicos-interno-btn">
          <a href="#">Saiba mais <i class="fas fa-angle-right"></i></a>
        </div>    
      </div><!--servicos-item-->
      
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