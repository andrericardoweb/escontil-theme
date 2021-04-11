<section class="rodape-sugestoes-bg">
    <div class="rodape-sugestoes container">
      <div class="rodape-sugestoes-info">
        <h2><?php the_field('sugestoes_titulo'); ?>Elogios,<br>sugestões e<br>reclamações<br></h2>
        <p><?php the_field('sugestoes_descricao'); ?>Nosso objetivo é melhorar a cada dia, por isso pedimos que nos ajudem a saber onde estamos acertando ou errando, além de enviar sugestões para nosso trabalho.</p>
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