<?php
  //Template Name: Quem Somos

  get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- BANNER -->
  <section class="banner-page">
    <div class="container">
      <h2>Quem Somos</h2>
    </div>
  </section>

  <!-- Quem Somos -->
  <section class="container quem-somos">
    <div class="flex-item-1 quem-somos-img">
      <img src="images/quem-somos.jpg" alt="">
    </div>
    <div class="flex-item-2 quem-somos-txt">
      <p class="quem-somos-txt-destaque">Nossa empresa de serviços de contabilidade possui uma equipe de profissionais
        qualificados nas áreas contábil, fiscal, trabalhista e de assessoria.</p>

      <p>Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando
        necessário, no encerramento das mesmas.</p>

      <p>O planejamento tributário faz parte de nosso currículo empresarial, analisamos a tributação que mais se adequa
        a sua empresa.</p>

      <p>O mundo econômico atual – tão complexo e instável – em que temos de atuar; e a rapidez das informações exigem
        de nós, administradores, um esforço para nos adaptarmos a esse ritmo; e, principalmente, para obtermos nosso
        objetivo maior, o sucesso.</p>

      <p>Neste contexto, contamos com uma equipe capacitada, preocupada em buscar constantemente o que há de mais novo
        no mercado e em desenvolver um trabalho sério, competente e ético. Objetivando agregar valores, aumentar o
        capital intelectual de nossos clientes, fazendo com que se tornem organizações bem-sucedidas e preparadas para
        prosseguir neste caminho de conquistas e vitórias.</p>

      <p>Nosso intuito é estabelecer estratégias e operacionalizar um conjunto de ações para os nossos parceiros
        (clientes), capaz de fazê-los sobreviver, crescer e se perpetuar no mercado.</p>
    </div>
  </section>

  <!-- Missão, Visão e Valores -->
  <section class="missa-visao-valores-bg">
    <div class="container missa-visao-valores">
      <div class="flex-item-1 missa-visao-valores-item">
        <div class="missao-item">
          <h3>Missão</h3>
          <p>Atender as necessidades dos clientes com soluções contábeis de excelência e qualidade, utilizando-se de
            ferramentas tecnológicas avançadas e princípios legais, que possam suprir as variadas demandas do mercado.
          </p>
        </div>

        <div class="visao-item">
          <h3>Visão</h3>
          <p>Ser referência na oferta de Soluções Contábeis para empresas do Sertão Alagoano e Maceió até 2025.
          </p>
        </div>
      </div>

      <div class="flex-item-2 missa-visao-valores-item">
        <div class="valores-item">
          <h3>Valores</h3>
          <ul>
            <li><i class="fas fa-angle-right"></i> Prestar serviços com Ética e Profissionalismo;</li>
            <li><i class="fas fa-angle-right"></i> Ser uma extensão dos empreendimentos, estabelecendo Parceria e
              primando pelo desenvolvimento por meio da Empatia;</li>
            <li><i class="fas fa-angle-right"></i> Inovação nos serviços ofertados;</li>
            <li><i class="fas fa-angle-right"></i> Promover a Educação contínua visando uma gestão empresarial mais
              assertiva;</li>
            <li><i class="fas fa-angle-right"></i> Motivação e Qualificação dos colaboradores promovendo um clima
              organizacional saudável;</li>
            <li><i class="fas fa-angle-right"></i> Atuar com Integridade, Disciplina e Proatividade enaltecendo a
              profissão contábil;</li>
            <li><i class="fas fa-angle-right"></i> Agir com Responsabilidade e Sustentabilidade diante da sociedade.
            </li>
          </ul>
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

  <!-- Diretores -->
  <section class="diretores-bg">
    <h2>Diretores</h2>

    <div class="container diretores">
      <div class="diretores-item">
        <img src="images/monica-messias-diretores.jpg" alt="MONICA MESSIAS DE OLIVEIRA">
        <h3>Mônica Messias de Olivera</h3>
        <p>Bacharel em Ciências Contábeis (UFAL), inscrita no CRC/AL e no Cadastro Nacional de Peritos Contábeis (CNPC).
          MBA em Contabilidade e Direito Tributário (IPOG). Pós-graduanda MBA em Legislação Trabalhista e Direito
          Previdenciário (BSSP). Life Coaching e Analista Comportamental (SLAC). Qualificação em Compliance
          Contábil.<br><br>Atua como Contadora/Empresária Contábil desde 2014 e Perita Contábil desde 2017.</p>
      </div>
      <!---diretores-item-->

      <div class="diretores-item">
        <img src="images/douglas-andre.jpg" alt="DOUGLAS ANDRÉ FERREIRA MARSIGLIA">
        <h3>Douglas André Ferreira Marsiglia</h3>
        <p>Bacharel em Ciências Contábeis (UFAL), inscrito no CRC/AL. Licenciado em Pedagogia (UNEAL). Especialista em
          e-Social (Nith Treinamentos). Qualificação em empreendedorismo pela Endeavor Brasil. Pós-graduando MBA em
          Contabilidade, Gestão Tributária e Auditoria (Faculdade Estratego). Pós-graduando MBA em Consultoria e
          Empreendedorismo Contábil (BSSP). Pós-graduando especialização em Pedagogia Empresarial e Educação Corporativa
          (FAEL/Vanta Education).<br>Atua como Contador/Empresário Contábil desde 2018.</p>
      </div>
      <!---diretores-item-->
    </div>

  </section>



  <section class="rodape-sugestoes-bg">
    <div class="rodape-sugestoes container">
      <div class="rodape-sugestoes-info">
        <h2>Elogios,<br>sugestões e<br>reclamações<br></h2>
        <p>Nosso objetivo é melhorar a cada dia, por isso pedimos que nos ajudem a saber onde estamos acertando ou
          errando, além de enviar sugestões para nosso trabalho.</p>
      </div>
      <!--rodape-sugestoes-bg-info-->
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
            <textarea name="msg-sugestoes" id="msg-sugestoes"
              placeholder="Digite aqui sua sugestão, reclamação ou elogio."></textarea>
          </div>

          <button type="submit">Enviar Mensagem</button>
        </form>
      </div>
    </div>
  </section>
  <!--rodape-sugetoes-bg-->

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>