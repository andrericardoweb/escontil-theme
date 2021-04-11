<?php $servicos = get_page_by_title('servicos'); ?>

<section class="diferenciais-bg">
  <h2>Diferenciais</h2>
  <p>Vamos além das obrigações fiscais</p>
  <div class="container diferenciais">      

    <div class="diferenciais-item">
        <img src="<?php the_field('diferencial1_icone', $servicos); ?>">
        <h3><?php the_field('diferencial1_titulo', $servicos); ?></h3>
        <p><?php the_field('diferencial1_descricao', $servicos); ?></p>
    </div><!--diferenciais-item-->

    <div class="diferenciais-item">
      <img src="<?php the_field('diferencial2_icone', $servicos); ?>">
      <h3><?php the_field('diferencial2_titulo', $servicos); ?></h3>
      <p><?php the_field('diferencial2_descricao', $servicos); ?></p>
    </div><!--diferenciais-item-->

    <div class="diferenciais-item">
      <img src="<?php the_field('diferencial3_icone', $servicos); ?>">
      <h3><?php the_field('diferencial3_titulo', $servicos); ?></h3>
      <p><?php the_field('diferencial3_descricao', $servicos); ?></p>
    </div><!--diferenciais-item--> 
    
  </div><!--diferenciais-->


  <div class="diferenciais-btns">
    <a class="btn-whatsapp-banner" href="https://api.whatsapp.com/send?phone=558236211108" target="_blank">Atendimento via WhatsApp</a>
  </div>    
</section>