<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
  //Select
  $con = mysqli_connect("localhost", "root", "", "database_sinner");
  
?>
<div class="conteudo">
  <div class="card">
    <div class="card-header">
      Destaque
    </div>
    <div class="card-body">
      <h5 class="card-title">Título especial</h5>
      <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
      <a href="#" class="btn btn-primary">Visitar</a>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-4">
      <div class="card card-cascade wider">
        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Card content -->
        <div class="card-body card-body-cascade text-center pb-0">
          <!-- Title -->
          <h4 class="card-title"><strong>Alison Belmont</strong></h4>
          <!-- Subtitle -->
          <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
          <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="css/images/image02ironmaiden.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Notícia 2</h5>
          <p class="card-text">Um exemplo de texto rápido para construir o Notícia e fazer preencher o conteúdo do card.</p>
          <a href="#" class="btn btn-primary">Visitar</a>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="css/images/image04pinkfloyd.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Notícia 3</h5>
          <p class="card-text">Um exemplo de texto rápido para construir o Notícia e fazer preencher o conteúdo do card.</p>
          <a href="#" class="btn btn-primary">Visitar</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="css/images/image07melophobia.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">Cage the Elephant - Melophobia</p>
        </div>
      </div>
    </div>
    <div class="col-8">
        <ul class="list-group list-group-flush">
          <li class="list-group-item disabled">Melophobia</li>
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Vestibulum at eros</li>
          <li class="list-group-item">Vestibulum at eros</li>
          <li class="list-group-item">Vestibulum at eros</li>
          <li class="list-group-item">Vestibulum at eros</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="css/images/image06numberofthebeast.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text"></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="css/images/image08thewall.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">Cage the Elephant - Melophobia</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="css/images/image05swampthing.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">Cage the Elephant - Melophobia</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
