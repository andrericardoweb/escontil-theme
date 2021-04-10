<?php
  //Template Name: Parceiros

  get_header();
?>

  <!-- BANNER -->
  <section class="banner-page">
    <div class="container">
      <h2>Parceiros</h2>
    </div>
  </section>

  <!-- PÁG. CLIENTES -->

  <!-- SERVIÇOS -->
  <section class="container parceiros-container">
    <p>Comprometido com o sucesso de nossos clientes buscamos a construção de parcerias estratégicas quem possam beneficiá-los.</p>
    <div class="parceiros-interno">
      <div class="parceiros-interno-item">
        <img src="images/parceiros/fenacon.png" alt="FENACON | CD">
      </div>

      <div class="parceiros-interno-item">
        <img src="images/parceiros/contadores-do-bem-selo.png" alt="Contador do Bem">
      </div>

      <div class="parceiros-interno-item">
        <img src="images/parceiros/parceiro-omie.png" alt="PArceiro Omie">
      </div>

      <div class="parceiros-interno-item">
        <img src="images/parceiros/omnie.png" alt="Omie">
      </div>

      <div class="parceiros-interno-item">
        <img src="images/parceiros/ideal-marcas.png" alt="Ideal Marcas">
      </div>

      <div class="parceiros-interno-item">
        <img src="images/parceiros/selo-iob.png" alt="Selo IOB">
      </div>

      <div class="parceiros-interno-item">
        <img src="images/parceiros/contador-parceiro-sebrae.png" alt="Contador Parceiro - Sebrae">
      </div>

      <div class="parceiros-interno-item">
        <img src="images/parceiros/sescap-al.png" alt="SESCAP AL">
      </div>

      <div class="parceiros-interno-item">
        <img src="images/parceiros/abrir-empresa-simples.png" alt="Abertura Simples">
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
          <img src="images/parceiros/omnie-academy-destaque.png" alt="Omie Academy">
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
          <img src="images/parceiros/ideal-marcas-destaque.png" alt="Ideal Marcas e Patentes">
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
          <img src="images/parceiros/abrir-empresa-simples-destaque.png" alt="Abertura Simples">
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
          <img src="images/parceiros/fenacon-destaque.png" alt="FENACON|CD - AR Service">
        </div>
      </div>
    </div>
  </section>

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