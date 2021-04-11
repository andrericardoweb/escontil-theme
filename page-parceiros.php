<?php
  //Template Name: Parceiros

  get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <!-- BANNER - INTRO -->
  <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

  <!-- PÁG. CLIENTES -->

  <!-- SERVIÇOS -->
  <section class="container parceiros-container">
    <p>Comprometido com o sucesso de nossos clientes buscamos a construção de parcerias estratégicas quem possam beneficiá-los.</p>
    <div class="parceiros-interno">
      <div class="parceiros-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/fenacon.png" alt="FENACON | CD">
      </div>

      <div class="parceiros-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/contadores-do-bem-selo.png" alt="Contador do Bem">
      </div>

      <div class="parceiros-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/parceiro-omie.png" alt="PArceiro Omie">
      </div>

      <div class="parceiros-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/omnie.png" alt="Omie">
      </div>

      <div class="parceiros-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/ideal-marcas.png" alt="Ideal Marcas">
      </div>

      <div class="parceiros-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/selo-iob.png" alt="Selo IOB">
      </div>

      <div class="parceiros-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/contador-parceiro-sebrae.png" alt="Contador Parceiro - Sebrae">
      </div>

      <div class="parceiros-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/sescap-al.png" alt="SESCAP AL">
      </div>

      <div class="parceiros-interno-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/abrir-empresa-simples.png" alt="Abertura Simples">
      </div>
      
    </div><!--servicos-->
  </section><!--container-->

  <section class="parceiro-destaque-container">
    <div class="bg-degrade-red">
      <div class="container parceiro-destaque-a">
        <div class="parceiro-destaque-info">
          <h3>Omie Academy</h3>
          <p>Empresa com mais de 20 anos de experiência no registro de Marcas, Patentes, Propriedade Industrial e Intelectual, Direito Autoral, Código de Barras, Softwares, Desenho Industrial, Nacional e Internacional; como também, por sua credibilidade no mercado e por disponibilizar maior leque de registros aos nossos clientes.</p>
        </div>
  
        <div class="parceiro-destaque-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/omnie-academy-destaque.png" alt="Omie Academy">
        </div>
      </div>
    </div>

    <div class="bg-degrade-gray">
      <div class="container parceiro-destaque-b">
        <div class="parceiro-destaque-info">
          <h3>Ideal Marcas e Patentes</h3>
          <p>Empresa com mais de 20 anos de experiência no registro de Marcas, Patentes, Propriedade Industrial e Intelectual, Direito Autoral, Código de Barras, Softwares, Desenho Industrial, Nacional e Internacional; como também, por sua credibilidade no mercado e por disponibilizar maior leque de registros aos nossos clientes.</p>
        </div>
  
        <div class="parceiro-destaque-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/ideal-marcas-destaque.png" alt="Ideal Marcas e Patentes">
        </div>
      </div>
    </div>

    <div class="bg-degrade-red">
      <div class="container parceiro-destaque-a">
        <div class="parceiro-destaque-info">
          <h3>Abertura Simples</h3>
          <p>Por estarmos dispostos a atendermos todos os empreendedores, independentemente de porte, desde a abertura da empresa até as demais etapas. Acompanhamos de perto a evolução do seu negócio dando-lhes suporte necessário; evitando com isso, que a empresa tenha vida breve.</p>
        </div>
  
        <div class="parceiro-destaque-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/abrir-empresa-simples-destaque.png" alt="Abertura Simples">
        </div>
      </div>
    </div>
    

    <div class="bg-degrade-gray">
      <div class="parceiro-destaque-b">
        <div class="parceiro-destaque-info">
          <h3>FENACON|CD - AR Service</h3>
          <p>Em parceria com a FENACON|CD - AR SERVICE, realizamos as etapas necessárias para emissão do seu certificado digital. Com esse recurso os empreendedores garantem uma maior segurança e confiabilidade no tráfego das suas informações, além disso, também reduzem burocracias.</p>
        </div>
  
        <div class="parceiro-destaque-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/fenacon-destaque.png" alt="FENACON|CD - AR Service">
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <?php include(TEMPLATEPATH . "/inc/cta-section.php"); ?>

  <!-- Sugestoes - Form -->
  <?php include(TEMPLATEPATH . "/inc/sugestoes-section.php"); ?>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>