<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Metas -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;0,700;1,400&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/16bd46d00e.js" crossorigin="anonymous"></script>
  
  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

  <title><?php bloginfo('name'); ?></title>

  <!-- Início Wordpress Header -->
  <?php wp_head(); ?>
  <!-- Final Wordpress Header -->
</head>

<body>
  <!-- SUPERINFO  -->
  <div class="superinfo-bg">
    <div class="container superinfo">
      <div class="superinfo-item">
        <p>ATENDEMOS MACEIÓ E SERTÃO ALAGOANO</p>
      </div>

      <div class="superinfo-item superinfo-telefones">
        <p>(82) 3621-1108 | 98127-8588 | 98727-0837</p>
      </div> <!--superinfo-contatos-->  
      
      <div class="superinfo-item superinfo-socialmedia">
        <ul class="socialmedia">
          <li><a href="#"><img src="images/icons/whatsapp.svg" alt="Whatsapp"></a></li>
          <li><a href="#"><img src="images/icons/instagram.svg" alt="Instagram"></a></li>
          <li><a href="#"><img src="images/icons/facebook.svg" alt="Facebook"></a></li>
        </ul><!--socialmedia-->
      </div><!--superinfo-socialmedia-->  
    </div> <!--container superinfo-->
  </div><!-- superinfo-bg -->

  <!--  MENU  -->
  <header>
    <section class="container container-menu">
      <div class="logo">
        <a href="index.html"><img src="images/escontil-logo.png" alt="Escontil Associados"></a>
      </div><!--logo-->

      <nav class="menu-topo">
        <input type="checkbox" id="menu-toggler" />

        <label class="menu-toggler-icon" for="menu-toggler">
          <i class="fas fa-bars"></i>
        </label>

        <ul>
          <li class="logo-menu-mobile"><img src="images/escontil-logo.png" alt="Escontil Associados"></li>
          <li><a class="menu-ativo" href="/">Ínicio</a></li>
          <li><a href="/quem-somos/">Quem Somos</a></li>
          <li><a href="/servicos/">Serviços</a></li>
          <li><a href="/clientes/">Clientes</a></li>
          <li><a href="/parceiros/">Parceiros</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="/contato/">Contato</a></li>
          <label class="menu-toggler-icon-close" for="menu-toggler">
            <i class="fas fa-times"></i> Fechar
          </label> 
        </ul><!--menu-topo-->
      </nav>
      
      <div class="whatsapp-top">
        <a href="#" class="whatsapp-btn-top">
          <img src="images/icons/whatsapp.svg" alt="Whatsapp">
        </a>
      </div> <!--whatsapp-top-->

    </section><!--container-menu-->
  </header>