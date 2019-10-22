<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Cadastros</title>
        <?php include("../../template/styles.php"); ?>

    </head>
    <body>
        <div class="wrapper">
            <?php include("../../template/navbar.php"); ?>
            <div id="content">
              <?php include("../../includes/btnNavbar.php"); ?>
                <br>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Cadastro</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Visualizar</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Usuário</h5>
                        <p class="card-text">Para cadastrar outros administradores.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" href="cadastroBanda.php">Cadastro</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Visualizar</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Banda</h5>
                        <p class="card-text">Para cadastrar bandas.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Cadastro</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Visualizar</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Álbum</h5>
                        <p class="card-text">Para cadastrar um álbum é necessário que uma banda esteja cadastrada.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Cadastro</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Visualizar</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Gênero</h5>
                        <p class="card-text">Para cadastrar gêneros musicais.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Cadastro</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Visualizar</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Música</h5>
                        <p class="card-text">Para cadastrar uma música é necessário que um gênero e um álbum estejam cadastrados.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Cadastro</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Visualizar</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Notícia</h5>
                        <p class="card-text">Para cadastrar uma notícia é necessário que um gêneros esteja cadastrado.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>
