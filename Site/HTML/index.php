<?php
require_once("../PHP/header.php");
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
        <link rel="stylesheet" type="text/css" href="../CSS/index.css">

        <title>Vacina Mais Brasil</title>
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
                                <a href="../HTML/minhasvacinas.php" class="nav-link">MINHAS VACINAS</a>
                            </li>
                        
                            <li class="nav-item">
                                <a href="#acessar" id="scroll-link" class="nav-link">CONTEÚDO</a>
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
            <div class="col-100">
                <div class="slider-principal hidden">
                    <div>
                        <img src="../IMAGENS/Photo1.jpg">
                    </div>
                    <div>
                        <img src="../IMAGENS/tipo2.jpg">
                    </div>
                    <div>
                        <img src="../IMAGENS/edit2.jpg">
                    </div>
                </div>        
            </div>
        </header>
        <main id="main">
            <section class="caixa">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                      <h2>Cidadão</h2>
                      <p>
                        Acesse o sistema online garantindo um acompanhamento preciso do histórico de imunização. 
                        Além disso, consulte a agenda disponível no mesmo portal para ficar informado sobre futuras doses, 
                        proporcionando uma gestão eficiente de sua saúde e contribuindo para a prevenção de doenças.
                      </p>
                      <a href="../HTML/login.php" class="btn btn-primary">Acessar</a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img src="../IMAGENS/imagem11.jpg" class="img-fluid imagem-fixada">
                  </div>
                </div>
              </div>
            </section>
            <section class="caixa">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="../IMAGENS/imagem12.jpg" class="img-fluid imagem-fixada">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="align-self-center">
                                <h2>Profissional</h2>
                                <p>
                                    Como profissional de saúde, sua contribuição é essencial para manter registros precisos e promover a 
                                    saúde pública. Acesse agora para cadastrar as vacinas aplicadas, assegurando um acompanhamento
                                    confiável do histórico de imunização dos cidadãos. Além disso, consulte a agenda para garantir que 
                                    todos estejam atualizados nas próximas doses.
                                </p>
                                <a href="cadastro_vacinas.php" class="btn btn-primary2" id="acessar">Acessar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="featured-section" class="featured-services mb-5">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="fas fa-syringe"></i></div>
                                <h4 class="title"><a>Proteja-se, Vacine-se</a></h4>
                                <p class="description">A vacinação é a chave para a prevenção de doenças. Cuide da sua saúde e da saúde da sua comunidade.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="fas fa-dna"></i></div>
                                <h4 class="title"><a>Imunização Duradoura</a></h4>
                                <p class="description">As vacinas fortalecem o sistema imunológico, proporcionando uma proteção duradoura contra várias doenças infecciosas.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="fas fa-shield-alt"></i></div>
                                <h4 class="title"><a>Vacinas: Escudo Protetor</a></h4>
                                <p class="description">Pense nas vacinas como um escudo que protege você e sua comunidade contra doenças perigosas. Seja um defensor da saúde!</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                <h4 class="title"><a>Vacinação Salva Vidas</a></h4>
                                <p class="description">Proteja quem você ama e contribua para um futuro mais saudável. A vacinação é um ato de amor e cuidado.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--ABOUT SECTION-->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title text-center">
                        <h2>Rumo à Saúde Inteligente</h2>
                        <p>
                            Seja bem-vindo(a) a uma exploração inovadora sobre a gestão eficiente de vacinação através de um 
                            sistema online. Nesta jornada, vamos mergulhar em diversas facetas que moldam um cenário de 
                            saúde mais robusto e preparado. Cada ponto discutido representa um passo significativo rumo a 
                            uma administração de vacinas mais ágil, transparente e acessível.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                            <a href="https://www.youtube.com/watch?v=YVkUvmDQ3HY" class="glightbox play-btn mb-4"></a>
                        </div>
                        <div class="col-xl-7 col-lg-6 icon-box justify-content-center align-items-stretch py-4 px-lg-5">
                            <div class="icon-box">
                                <div class="icon"><i class="far fa-smile"></i></div>
                                <h4 class="title"><a>Fácil</a></h4>
                                <p class="description">Desenvolvemos nosso site com a simplicidade em mente, proporcionando uma 
                                    experiência intuitiva para que a gestão eficiente de vacinação seja acessível a todos, 
                                    garantindo facilidade de navegação e compreensão."
                                </p>
                            </div>
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-bolt"></i></div>
                                <h4 class="title"><a>Rápido</a></h4>
                                <p class="description">Nossa plataforma foi projetada visando a eficiência e agilidade.
                                     garantimos que a gestão de vacinação seja rápida e eficaz, proporcionando respostas 
                                     instantâneas e contribuindo para uma administração eficiente e oportuna das vacinas.
                                </p>
                            </div>
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-question-circle"></i></div>
                                <h4 class="title"><a>Dúvidas??</a></h4>
                                <p class="description">Não se preocupe! Para esclarecer qualquer dúvida, disponibilizamos 
                                    um vídeo explicativo à sua esquerda. Basta clicar e obter informações detalhadas 
                                    sobre o funcionamento da nossa plataforma.
                                </p>
                            </div>
                        </div>
                    </div>                                   
                </div>
            </section>
            <!--ABOUT SECTION-->
            <section id="counts" class="counts">
                <div class="container" data-aos="fade-up">
                    <div class="row no-gutters">
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="fas fa-hourglass"></i>
                                <span>1796</span>
                                <p>
                                    <strong>Edward Jenner</strong> criador da primeira vacina de que se tem registro
                                    dedicou cerca de <strong> 20 anos</strong> de sua vida aos estudos sobre varíola.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="fas fa-flag"></i>
                                <span>Brasil</span>
                                <p>
                                    de <strong>2015</strong> a <strong>2005</strong>, a média nacional de cobertura vacinal se manteve sempre acima dos <strong>70%</strong>, mas,
                                    em <strong>2016</strong>, diminuiu para <strong>59,9%</strong> e vem caindo desde <strong>2019</strong>, atingindo os <strong> 52,1%</strong>
                                     em <strong>2021.</strong> 
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="fas fa-syringe"></i>
                                <span>Vidas</span>
                                <p><strong>A vacinação em massa evita de duas a três milhões de mortes </strong> anualmente e poderia salvar mais <strong>1,5 milhões</strong> 
                                    de vidas se sua aplicação fosse ampliada.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="fas fa-award"></i>
                                <span>N° 1</span>
                                <p><strong>Colocamos a excelência na prática</strong>, e é por isso que, sem dúvida,  que nossa plataforma está em primeiro lugar quando o assunto se torna consultas de vacinação
                                     online. Com inovações em <strong>2023.</strong> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <!--SERVICES SECTION-->
             <section id="services" class="services my-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-pencil-alt"></i></div>
                                <h4><a>Registro Eficiente</a></h4>
                                <p>
                                    Um cadastro online permite que as informações sobre as vacinas administradas sejam registradas de 
                                    maneira eficiente. Isso é crucial para manter um banco de dados atualizado e preciso sobre a 
                                    cobertura vacinal.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-desktop"></i></div>
                                <h4><a>Monitoramento da Cobertura Vacinal</a></h4>
                                <p>
                                    Com um sistema online, as autoridades de saúde podem monitorar a cobertura vacinal em tempo real. 
                                    Isso é vital para identificar áreas ou grupos populacionais com baixa cobertura e implementar 
                                    estratégias para melhorar a proteção contra doenças.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-warehouse"></i></div>
                                <h4><a>Gestão de Estoque e Distribuição</a></h4>
                                <p>
                                    O cadastro online ajuda na gestão do estoque de vacinas, permitindo um planejamento mais eficaz da 
                                    istribuição. Isso ajuda a evitar escassez em determinadas regiões e garante que as vacinas estejam 
                                    disponíveis onde são mais necessárias.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                                <h4><a>Rastreabilidade e Controle de Lotes</a></h4>
                                <p>
                                    O registro online permite o rastreamento das vacinas até o nível dos lotes. Isso é crucial em caso de 
                                    problemas de segurança ou eficácia, permitindo que as autoridades identifiquem rapidamente as vacinas 
                                    afetadas e tomem medidas corretivas.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-users"></i></div>
                                <h4><a>Facilidade de Acesso para a População</a></h4>
                                <p>
                                    Um sistema online facilita o acesso dos cidadãos às informações sobre suas próprias vacinas. Isso pode 
                                    ser útil para a verificação do status vacinal, a obtenção de certificados de vacinação (por exemplo, 
                                    para viagens internacionais) e para a participação em campanhas de imunização.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-link"></i></div>
                                <h4><a>Integração com Outros Sistemas de Saúde</a></h4>
                                <p>
                                    Um sistema de cadastro de vacinas online pode ser integrado a outros sistemas de saúde, facilitando 
                                    a troca de informações entre diferentes instituições e garantindo uma visão abrangente do status de 
                                    imunização de uma pessoa.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
        </main>
        <!-- RODAPÉ -->
        <footer class="bg-dark text-white pt-5 pb-4 cor-unica-rodape">
            <div class="container text-center text-md-left">
                <div class="row text-center text-md-left">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Agradecimentos</h5>
                        <p>Sua confiança e participação são inestimáveis. Estamos comprometidos em continuar 
                            proporcionando uma experiência excepcional, e é graças a vocês que isso se torna possível.
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Criadores</h5>
                        <p>
                            <iclass="text-white" style="text-decoration: none;">Wesley Kilian</i> 
                        </p>
                        <p>
                            <iclass="text-white" style="text-decoration: none;">Roberto Guedes</i> 
                        </p>
                        <p>
                            <iclass="text-white" style="text-decoration: none;">Endrew Camargo</i> 
                        </p>
                        <p>
                            <iclass="text-white" style="text-decoration: none;">João Pacolla</i> 
                        </p>
                        
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Criadores</h5>
                        <p>
                            <iclass="text-white" style="text-decoration: none;">William Fonseca</i> 
                        </p>
                        <p>
                            <iclass="text-white" style="text-decoration: none;">Fernando Silva</i> 
                        </p>
                        <p>
                            <iclass="text-white" style="text-decoration: none;">Tiago Borges</i> 
                        </p>
                    </div>
                    <div class="col-md4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contato</h5>
                        <p>
                            <i class="fas fa-home mr-3"></i>New Work, NY 2333, US
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i><a href="mailto:vacinabrasil2023@gmail.com" class="email-link">vacinabrasil2023@gmail.com</a>
                        </p>                                        
                            <i class="fas fa-phone mr-3"></i>+55 (19) 98957-9415
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i>+55 (19) 3573-7458
                        </p>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row align-itens-center">
                    <div class="col-md-7 col-lg-8">
                        <p>
                            Direitos autorais @2023 reservados por:
                            <a href="#" id="vacinaBrasilLink" style="text-decoration: none;">
                                <strong class="text-warning">Vacina + Brasil</strong>
                            </a>
                        </p>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating"><i class="bi bi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating"><i class="bi bi-whatsapp"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating"><i class="bi bi-instagram"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating"><i class="bi bi-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>                
                </div>
            </div>
        </footer>
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="../JAVASCRIPT/index.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>