<?php

    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('location: ../index.php');
    }
    $logado = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/44/44973.png" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="bg"></div>
    <section class="neon-title">
        <div class="text">
          <?php
            echo "<h1>BEM VINDO $logado</h1>";
            echo "<h1>BEM VINDO $logado</h1>";
          ?>
          
        </div>
    </section>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Pro Soft</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Pesquisar ...">
         <span class="tooltip">Pesquisar</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Usuário</span>
       </a>
       <span class="tooltip">Usuário</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Mensagem</span>
       </a>
       <span class="tooltip">Mensagem</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Análise</span>
       </a>
       <span class="tooltip">Análise</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Gerenciador de Arquivos</span>
       </a>
       <span class="tooltip">Arquivos</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Carrinho</span>
       </a>
       <span class="tooltip">Carrinho</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Salvar</span>
       </a>
       <span class="tooltip">Salvar</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="img/perfil1.jpeg" alt="profileImg">
           <div class="name_job">
             <div class="name">Lucas França</div>
             <div class="job">Web developer</div>
           </div>
         </div>

        <a href="sair.php">
         <i class='bx bx-log-out' id="log_out"></i> 
        </a>
     </li>
    </ul>
  </div>
  <section class="home-section">
      
      

  </section>

  <script src="script.js"></script>

</body>
</html>
