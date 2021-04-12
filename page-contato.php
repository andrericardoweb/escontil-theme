<?php
  //Template Name: Contato

  get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  <!-- Banner - Intro -->
  <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

  <!--contato-->
  <section class="container contato-container">
    <h2>Entre em contato conosco</h2>
    <div class="contato">

      <div class="contato-form-container">
      
        <form action="enviar.php" method="post" name="form" class="contato-form">
          <div class="contato-form-item">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
          </div>
          
          <div class="contato-form-2">
            <div class="contato-form-item-2">
              <label for="email">E-mail:</label>
              <input type="email" id="email" name="email"  placeholder="Digite seu e-mail" class="contato-form-item" required>
            </div>

            <div class="contato-form-item-2">
              <label for="telefone">Telefone:</label>
              <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" class="contato-form-item" required>
            </div>

          </div>

          <div class="contato-form-item">
            <label for="mensagem">Mensagem: </label>
            <textarea name="mensagem" id="mensagem" placeholder="Digite sua mensagem" rows="4" required></textarea>
          </div>

          <div>
            <button type="submit" id="enviar-msg" name="enviar-msg" class="btn-contato">Enviar mensagem</button>
          </div>

          
        </form>
      </div>

      <div class="contato-whatsapp">
        <div class="contato-box-whatsapp">
          <h3>Fale conosco diretamente através do nosso Whatsapp</h3>
          
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/ilustration/contato-card-whatsapp.png">
          </div>

          <div class="whatsapp-contato">
            <a href="https://api.whatsapp.com/send?phone=558236211108" target="_blank" class="whatsapp-btn-contato">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/whatsapp-green.svg" alt="Whatsapp">
            </a>
          </div> <!--whatsapp-contato-->


        </div>
      </div>

    </div>  
  </section>

  <!-- DIFERENCIAIS -->
  <section class="contato-mapa-bg">
    <h2>Onde Estamos</h2>
    <p>Saiba como chegar ao nosso escritório</p>
    <div class="container contato-mapa">
      <div class="contato-mapa-item">
         <p>Código do mapa</p>
      </div><!--diferenciais-item-->

      
    </div><!--diferenciais-->
      
  </section>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>