<?php
  //Template Name: Clientes

  get_header();
?>

  <!-- BANNER -->
  <section class="banner-page">
    <div class="container">
      <h2>Clientes</h2>
    </div>
  </section>

  <!-- PÁG. CLIENTES -->

  <!-- SERVIÇOS -->
  <section class="container clientes-container">
    <p>Trabalhamos com profissionalismo e responsabilidade e dessa maneira conquistamos a confiança dos nossos clientes em Maceió e Sertão Alagoano.</p>
    <div class="clientes-interno">
      <div class="clientes-interno-item">
          <img src="images/clientes/vangas.png" alt="Van Gás">
      </div>
      
      <div class="clientes-interno-item">
        <img src="images/clientes/vanferragens.png" alt="Van Ferramentas">
      </div>
      
      <div class="clientes-interno-item">
        <img src="images/clientes/amorin-moveis-e-eletros.png" alt="Amorin Móveis e Eletros">
      </div>

      <div class="clientes-interno-item">
        <img src="images/clientes/agrovan.png" alt="Agro Van">
      </div>
      
      <div class="clientes-interno-item">
        <img src="images/clientes/zoo-premium.png" alt="Zoo Premium">
      </div>
      
      <div class="clientes-interno-item">
        <img src="images/clientes/alagoaseletrolar.png" alt="Alagoas Eletrolar">
      </div>
      
      <div class="clientes-interno-item">
        <img src="images/clientes/mercado-lopes.png" alt="Mercado Lopes">
      </div>
      
      <div class="clientes-interno-item">
        <img src="images/clientes/comercial-ferreira.png" alt="Comercial Ferreira">
      </div>
      
      <div class="clientes-interno-item">
        <img src="images/clientes/supermercado-melhor-preco.png" alt="Supermercado Melhor Preço">
      </div>  
    </div><!--servicos-->
  </section><!--container-->

  <!-- CTA -->
  <section class="cta-bg">
    <h2>Estamos prontos para lhe atender</h2>
    <div class="cta-btn">
      <a class="btn-whatsapp-banner" href="#">Fale Conosco via WhatsApp</a>
    </div>
  </section>

  <section class="rodape-sugestoes-bg">
    <div class="rodape-sugestoes container">
      <div class="rodape-sugestoes-info">
        <h2>Elogios,<br>sugestões e<br>reclamações<br></h2>
        <p>Nosso objetivo é melhorar a cada dia, por isso pedimos que nos ajudem a saber onde estamos acertando ou errando, além de enviar sugestões para nosso trabalho.</p>
      </div><!--rodape-sugestoes-bg-info-->
      <div class="rodape-sugestoes-form">
        <form action="">
          <div class="rodape-sugestoes-form-2">
            <input type="text" name="nome" id="nome" placeholder="Nome (Opcional)">
          </div>
          <div class="rodape-sugestoes-form-2">
            <input type="tel" name="fone" id="fone" placeholder="Celular (Opcional)">
            <input type="email" name="email" id="email" placeholder="E-mail (Opcional)">
          </div>
          <div class="rodape-sugestoes-form-2">
            <textarea name="msg-sugestoes" id="msg-sugestoes" placeholder="Digite aqui sua sugestão, reclamação ou elogio."></textarea> 
          </div>

          <button type="submit">Enviar Mensagem</button>
        </form>
      </div>
    </div>
  </section><!--rodape-sugetoes-bg-->

  <?php get_footer(); ?>