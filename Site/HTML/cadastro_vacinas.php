<?php
require_once("../PHP/header.php");
require_once("../PHP/vacinou.php");
if ($_SESSION['usuario'] != 'Governo Federal') {
    header("location: index.php");
    exit;
}

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
$idVac = isset($_POST['idVac']) ? $_POST['idVac'] : "";
$data = isset($_POST['data']) ? $_POST['data'] : "";

$vacinado = new Vacinou();

if (!empty($cpf) ) {
    $vacinado->inserirVacinaUsuario($cpf, $idVac, $data);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../CSS/cadastro_vacinas.css">
    <title>Cadastro Vacinados</title>
</head>
<body>
          <!-- CABEÇALHO -->
        <header class="menu-principal ">
            <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-tranparente">
                <div class="container">
                    <a href="index.php" class="navbar-brand">
                        <img src="../IMAGENS/logo.png" width="250">
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">  
                        <i class="fas fa-bars text-white"></i>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="nav-principal">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="../HTML/index.php" class="nav-link">INÍCIO</a>
                            </li>
                            <li class="nav-item">
                                <a href="../HTML/index.php#acessar" id="scroll-link" class="nav-link">CONTEÚDO</a>
                            </li>
                            <li class="nav-item">
                                <a href="../HTML/perfil.php" class="nav-link"><?php echo $_SESSION["usuario"]; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="../HTML/sobre.php" class="nav-link">SOBRE NÓS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    <main>
    <h1 class="title">Cadastro de vacinados</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>CPF do vacinado</label>
            <input type="number" class="form-control" aria-describedby="emailHelp" name="cpf" required>
        </div>
        <div class="form-group">
            <label>Vacina aplicada</label>
            <input type="number" class="form-control" aria-describedby="emailHelp" name="idVac" required>
        </div>
        <div class="form-group">
            <label>Data da aplicação</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="data" placeholder="Ex: 2023-12-25" required>
        </div>
        <div id="botoes">
            <button type="submit" class="btn btn-danger">Voltar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</main>
<footer class="bg-dark text-white  pb-4 cor-unica-rodape">
  <div class="container-footer text-center text-md-left">
      <div class="row text-center text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Agradecimentos</h5>
              <p class="lead">Texto de agradecimento aqui.</p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Criadores</h5>
              <p class="lead"><i class="text-white" style="text-decoration: none;">Wesley Kilian</i></p>
              <p class="lead"><i class="text-white" style="text-decoration: none;">Roberto Guedes</i></p>
              <p class="lead"><i class="text-white" style="text-decoration: none;">Endrew</i></p>
              <p class="lead"><i class="text-white" style="text-decoration: none;">João Pacolla</i></p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Criadores</h5>
              <p class="lead"><i class="text-white" style="text-decoration: none;">William</i></p>
              <p class="lead"><i class="text-white" style="text-decoration: none;">Fernando Silva</i></p>
              <p class="lead"><i class="text-white" style="text-decoration: none;">Tiago</i></p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contato</h5>
              <p class="lead"><i class="fas fa-home mr-3"></i>New Work, NY 2333, US</p>
              <p class="lead"><i class="fas fa-envelope mr-3"></i><a href="mailto:vacinabrasil2023@gmail.com" class="email-link">vacinabrasil2023@gmail.com</a></p>
              <p class="lead"><i class="fas fa-phone mr-3"></i>+55 (19) 98957-9415</p>
              <p class="lead"><i class="fas fa-phone mr-3"></i>+55 (19) 3573-7458</p>
          </div>
      </div>
      <hr class="mb-4">
      <div class="row align-items-center">
          <div class="col-md-7 col-lg-8">
              <p class="lead">Direitos autorais &COPY; 2023 reservados por:
                  <a href="#" style="text-decoration: none;">
                      <strong class="text-warning">Vacina + Brasil</strong>
                  </a>
              </p>
          </div>
          <div class="col-md-5 col-lg-4">
              <div class="text-center text-md-right">
                  <ul class="list-unstyled list-inline">
                      <li class="list-inline-item">
                          <a href="#" class="btn-floating"><i class="bi bi-facebook"></i></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#" class="btn-floating"><i class="bi bi-twitter"></i></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#" class="btn-floating"><i class="bi bi-whatsapp"></i></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#" class="btn-floating"><i class="bi bi-instagram"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</footer>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46j
