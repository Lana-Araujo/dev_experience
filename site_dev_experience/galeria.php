<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Galeria de Fotos Moderna</title>
  <link rel="stylesheet" href="galeria.css">
 
</head>
<body>
<nav>
<ul>
    <li> <a href="index.html"> Módulos </a> </li>
    <li> <a href="sobre.html"> Edições </a> </li>
    <li> <a href="precos.html"> Galeria </a> </li>
    <li> <a href="servicos.html"> Vencedores</a> </li>
    
</ul>

<nav>
    <img src="logodev.png" class="logo">
    <ul>
      <li><a href="index.html">Módulos</a></li>
      <li class="dropdown">
        <a href="#" class="dropbtn">Edições</a>
        <div class="dropdown-content">
          <a href="edicoes.php">Edição 2023</a>
        </div>
      </li>
      <li><a href="precos.html">Galeria</a></li>
      <li><a href="servicos.html">Vencedores</a></li>
    </ul>
  </nav>

  <div class="gallery">
    <img src="../img/logo.png" alt="Imagem 1">
    <img src="../img/Regra 1.jpg" alt="Imagem 2">
    <img src="../img/trofeu.jpeg" alt="Imagem 3">
    <img src="../img/t3.jpg" alt="Imagem 4">
    <img src="../img/t3.jpg" alt="Imagem 4">
    <img src="../img/t3.jpg" alt="Imagem 4">
    <img src="../img/t3.jpg" alt="Imagem 4">
    <img src="../img/t3.jpg" alt="Imagem 4">
    <img src="../img/logo.png" alt="Imagem 1">
    <img src="../img/Regra 1.jpg" alt="Imagem 2">
    <img src="../img/trofeu.jpeg" alt="Imagem 3">
    <img src="../img/Regra 1.jpg" alt="Imagem 2">
    <!-- Adicione mais imagens conforme necessário -->
  </div>

  <!-- Modal para visualização em tela cheia -->
  <div id="myModal" class="modal">
    <span class="close-btn">&times;</span>
    <img class="modal-content" id="modalImg">
  </div>

  <script>
    const images = document.querySelectorAll('.gallery img');
    const modal = document.getElementById('myModal');
    const modalImg = document.getElementById('modalImg');
    const closeBtn = document.querySelector('.close-btn');

    images.forEach(img => {
      img.addEventListener('click', () => {
        modal.style.display = 'block';
        modalImg.src = img.src;
      });
    });

    closeBtn.addEventListener('click', () => {
      modal.style.display = 'none';
    });
  </script>
  
</body>
</html>
