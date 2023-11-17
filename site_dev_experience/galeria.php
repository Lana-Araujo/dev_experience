<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Galeria de Fotos Moderna</title>
 
</head>
<body>
<nav>
<ul>
    <li> <a href="index.html"> Módulos </a> </li>
    <li> <a href="sobre.html"> Edições </a> </li>
    <li> <a href="precos.html"> Galeria </a> </li>
    <li> <a href="servicos.html"> Vencedores</a> </li>
    
</ul>

</nav>
<img src="../IMG67.jpg" alt="GIF animado" width="100%" height="99%" style="border: 1px solid black;">


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
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #fff;
    }
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 20px;
    }
    .gallery img {
      width: 300px;
      height: auto;
      margin: 10px;
      border-radius: 5px;
      box-shadow: 0 0 10px #f4f4f4;
      transition: transform 0.3s ease;
      cursor: pointer;
    }
    .gallery img:hover {
      transform: scale(1.1);
    }
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: #000;
    }
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 800px;
      max-height: 80%;
    }
    .modal-content img {
      width: 100%;
      height: auto;
      display: block;
      margin: auto;
    }
    .close-btn {
      color: #fff;
      font-size: 30px;
      position: absolute;
      top: 10px;
      right: 15px;
      cursor: pointer;
    }
  
    nav{
    background-color: #000000;
    padding: 10px 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav .logo a{
    text-decoration: none;
    color: #fff;
    font-size: 35px;
    font-weight: 600;
}
nav ul{
    display: flex;
    align-items: center;
    list-style: none;
    padding: 10px;
}
nav li{
    margin-left: 7px;
}
nav li a{
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: 0.3s;
}
nav li a:hover{
    background-color: #4e4395;
    color: black;
}
.video {
      width: 100%; /* Largura do vídeo */
      height: 50%; /* Altura do vídeo */
    }
  </style>
  </style>
</body>
</html>
