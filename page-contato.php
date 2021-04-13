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

  <!-- MAPA -->
  <section class="contato-mapa-bg">
    <h2>Onde Estamos</h2>
    <p>Saiba como chegar ao nosso escritório</p>
    <div class="container contato-mapa">
      <div class="contato-mapa-item">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15746.208857787007!2d-37.2446624!3d-9.3728335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x18ffc0bd42973b98!2sEscontil%20Contadores%20Associados!5e0!3m2!1spt-BR!2sbr!4v1618276437046!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 

      </div>

      
    </div>
      
  </section>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>