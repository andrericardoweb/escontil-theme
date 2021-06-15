<?php get_header(); ?>

  <!-- BANNER -->
  <section class="banner-page">
    <div class="container">
      <h2 data-anime="400" class="fadeInDown">Blog</h2>
    </div>
  </section>

  <!--Últimas Publicações-->
  <section class="container blog-bg">
    <h2 data-anime="800" class="fadeInDown">Últimas Publicações</h2>
    <div data-anime="800" class="fadeInUp container blog-container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="blog-item">
        <img src="<?php the_field('capa_do_artigo'); ?>">
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        
        <a href="<?php the_permalink(); ?>">Continuar lendo <i class="fas fa-arrow-right"></i></a>
      </div><!--blog-item-->

    <?php endwhile;  ?>

    </div><!--blog-container-->

      <div class="paginacao">

        <div class="paginacao-item">
          <?php previous_posts_link('<i class="fas fa-arrow-left"></i> Anteriores '); ?>
        </div>

        <div class="paginacao-item">
          <?php next_posts_link('Próximos <i class="fas fa-arrow-right"></i>'); ?>
        </div>
        
      </div> <!--paginacao-->


    <?php else : endif; ?>
  

    

  </section>

  
  <!-- Missao -->
  <?php include(TEMPLATEPATH . "/inc/missao-section.php"); ?>

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