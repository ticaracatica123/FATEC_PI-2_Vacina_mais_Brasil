<?php
require_once("../PHP/header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOBRE MIM</title>
        <link rel="stylesheet" href="../CSS/sobre.css">
        <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <!--HEADER----------------->
        <header class="menu-principal">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-tranparente">
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
                                <a href="../HTML/index.php" class="nav-link text-white">INÍCIO</a>
                            </li>
        
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">MINHAS VACINAS</a>
                            </li>
        
                            <li class="nav-item">
                                <a href="../HTML/index.php#acessar" id="scroll-link-perfil" class="nav-link text-white">CONTEÚDO</a>
                            </li>
                            <li class="nav-item">
                                <a href="../HTML/perfil.php" class="nav-link text-white"><?php echo $_SESSION["usuario"]; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="../HTML/sobre.php" class="nav-link text-white">SOBRE NÓS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--MAIN-->
        <main>
            <!-- PRIMEIRO NOME -->
            <div class="description">
                <div class="main_photo">
                    <img src="../IMAGENS/wesley.jpeg" alt="A Picture of LC Codes">
                </div>
                <div class="description_text">
                    <p class="greeting">Olá!</p>
                    <h1><span>WESLEY</span> KILIAN</h1>
                    <p class="smalldescription">
                        <span>Desenvolvedor Web Front-End</span> 
                        Transformando ideias em experiências visuais cativantes,
                        unindo design e código para criar sites.
                    </p>
                    <div class="socialmedia">
                        <ul class="sociallist">
                            <li><a class="Resumonlink" href="#about-wesley" target="_blank">Resumo</a></li>
                            <li><a href="https://www.linkedin.com/in/wesley-kilian" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="https://github.com/WesleyGustavoKilian" target="_blank"><i class="lni lni-github-original"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section>
                <div class="about">
                    <h2 class="titulo-about" id="about-wesley">SOBRE MIM</h2>
                    <p class="information">
                        Eu tenho 19 anos, comecei minha Faculdade em 2023, atualmente cursando o 2° semestre na Fatec-Araras,
                        não possuo experiência em desenvolvimento profissional. Sinto muita vontade de trabalhar e aprimorar meus 
                        conhecimentos nesse campo, sempre em busca de mais informações, esforçando-me para dar o meu melhor a cada dia.
                    </p>
                </div>
            </section>
            <!-- SEGUNDO NOME -->
            <div class="description">
                <div class="main_photo">
                    <img src="../IMAGENS/roberto.enc" alt="A Picture of LC Codes">
                </div>
                <div class="description_text">
                    <p class="greeting">Olá!</p>
                    <h1><span>ROBERTO</span> GUEDES</h1>
                    <p class="smalldescription">
                        <span>Desenvolvedor Web Front-End</span> Passionate
                        about creating interactive applications and experiences on the web.
                    </p>
                    <div class="socialmedia">
                        <ul class="sociallist">
                            <li><a class="Resumonlink" href="#about-roberto" target="_blank">Resumo</a></li>
                            <li><a href="https://www.linkedin.com/in/wesley-kilian" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="https://github.com/wesley-gustavo-kilian" target="_blank"><i class="lni lni-github-original"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section>
                <div class="about">
                    <h2 class="titulo-about" id="about-roberto">SOBRE MIM</h2>
                    <p class="information">
                        I am 19 years old, I started my university in 2023 and
                        I have a little experience in professional development. I
                        have a lot of wishes to work and learn more about this gorgeous field.
                    </p>
                </div>
            </section>
            <!-- TERCEIRO NOME -->
            <div class="description">
                <div class="main_photo">
                    <img src="../IMAGENS/william.enc" alt="A Picture of LC Codes">
                </div>
                <div class="description_text">
                    <p class="greeting">Olá!</p>
                    <h1><span>WILLIAM</span> FONSECA</h1>
                    <p class="smalldescription">
                        <span>Desenvolvedor Web back-End</span>
                        <p class="smalldescription">Usando a lógica para transformar ideias em realidade</p>
                    </p>
                    <div class="socialmedia">
                        <ul class="sociallist">
                            <li><a class="Resumonlink" href="#about-william" target="_blank">Resumo</a></li>
                            <li><a href="https://www.linkedin.com/in/william-fonseca-geralde" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="https://github.com/William-Fonseca-Geralde" target="_blank"><i class="lni lni-github-original"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section>
                <div class="about">
                    <h2 class="titulo-about" id="about-william">SOBRE MIM</h2>
                    <p class="information">
                        Eu tenho 19 anos, comecei minha Faculdade em 2023, atualmente cursando o 2° semestre na Fatec-Araras, possuo uma certa experiência na parte lógica. Sinto muita vontade de trabalhar e aprimorar meus conhecimentos nesse campo, sempre em busca de mais informações, esforçando-me para dar o meu melhor a cada dia.
                    </p>
                </div>
            </section>
            <!-- QUARTO NOME -->
            <div class="description">
                <div class="main_photo">
                    <img src="../IMAGENS/joao.enc" alt="A Picture of LC Codes">
                </div>
                <div class="description_text">
                    <p class="greeting">Olá!</p>
                    <h1><span>JOAO</span> PACOLLA</h1>
                    <p class="smalldescription">
                        A <span>Documentação</span> Passionate
                        about creating interactive applications and experiences on the web.
                    </p>
                    <div class="socialmedia">
                        <ul class="sociallist">
                            <li><a class="Resumonlink" href="#about-joao" target="_blank">Resumo</a></li>
                            <li><a href="https://www.linkedin.com/in/wesley-kilian" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="https://github.com/wesleykilian" target="_blank"><i class="lni lni-github-original"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section>
                <div class="about">
                    <h2 class="titulo-about" id="about-joao">SOBRE MIM</h2>
                    <p class="information">
                        I am 19 years old, I started my university in 2023 and
                        I have a little experience in professional development. I
                        have a lot of wishes to work and learn more about this gorgeous field.
                    </p>
                </div>
            </section>
            <!-- QUINTO NOME -->
            <div class="description">
                <div class="main_photo">
                    <img src="../IMAGENS/endrew.enc" alt="A Picture of LC Codes">
                </div>
                <div class="description_text">
                    <p class="greeting">Olá!</p>
                    <h1><span>ENDREW </span> CAMARGO</h1>
                    <p class="smalldescription">
                        <span>Designer</span> Passionate
                        about creating interactive applications and experiences on the web.
                    </p>
                    <div class="socialmedia">
                        <ul class="sociallist">
                            <li><a class="Resumonlink" href="#about-endriw" target="_blank">Resumo</a></li>
                            <li><a href="https://www.linkedin.com/in/wesley-kilian" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="https://github.com/wesleykilian" target="_blank"><i class="lni lni-github-original"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section>
                <div class="about">
                    <h2 class="titulo-about" id="about-endriw">SOBRE MIM</h2>
                    <p class="information">
                        I am 19 years old, I started my university in 2023 and
                        I have a little experience in professional development. I
                        have a lot of wishes to work and learn more about this gorgeous field.
                    </p>
                </div>
            </section>
            <!-- SEXTO NOME -->
            <div class="description">
                <div class="main_photo">
                    <img src="../IMAGENS/fernando.jfif" alt="A Picture of LC Codes">
                </div>
                <div class="description_text">
                    <p class="greeting">Olá!</p>
                    <h1><span>FERNANDO </span> SILVA</h1>
                    <p class="smalldescription">
                        <span>Designer</span> Passionate
                        about creating interactive applications and experiences on the web.
                    </p>
                    <div class="socialmedia">
                        <ul class="sociallist">
                            <li><a class="Resumonlink" href="#about-fernando" target="_blank">Resumo</a></li>
                            <li><a href="https://www.linkedin.com/in/wesley-kilian" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="https://github.com/wesleykilian" target="_blank"><i class="lni lni-github-original"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section>
                <div class="about">
                    <h2 class="titulo-about" id="about-fernando">SOBRE MIM</h2>
                    <p class="information">
                        I am 19 years old, I started my university in 2023 and
                        I have a little experience in professional development. I
                        have a lot of wishes to work and learn more about this gorgeous field.
                    </p>
                </div>
            </section>
            <!-- SÉTIMO NOME -->
            <div class="description">
                <div class="main_photo">
                    <img src="../IMAGENS/tiago.jpg" alt="A Picture of LC Codes">
                </div>
                <div class="description_text">
                    <p class="greeting">Olá!</p>
                    <h1><span>THIAGO </span> BORGES</h1>
                    <p class="smalldescription">
                        <span>Documentação</span> Passionate
                        about creating interactive applications and experiences on the web.
                    </p>
                    <div class="socialmedia">
                        <ul class="sociallist">
                            <li><a class="Resumonlink" href="#about-TIAGO" target="_blank">Resumo</a></li>
                            <li><a href="https://www.linkedin.com/in/wesley-kilian" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="https://github.com/wesleykilian" target="_blank"><i class="lni lni-github-original"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section>
                <div class="about">
                    <h2 class="titulo-about" id="about-TIAGO">SOBRE MIM</h2>
                    <p class="information">
                        I am 19 years old, I started my university in 2023 and
                        I have a little experience in professional development. I
                        have a lot of wishes to work and learn more about this gorgeous field.
                    </p>
                </div>
            </section>
            <!-- TERCEIRA PARTE DA PÁGINA -->
            <section class="contact">
                <h2 class="titulo-contact" id="contact">Contato</h2>
                <div class="contact-details">
                    <div class="contact-details-email">
                        <img src="../IMAGEM/envelope.png" alt="">
                        <a href="mailto:vacinamaisbrasil@gmail.com">vacinamaisbrasil@gmail.com</a>
                        <p>Email Mec</p>
                    </div>
                    <h3 class="titulo-contact_form">Entre em contato</h3>
                    <form class="form-contact">
                        <input type="text" class="name" required placeholder="Nome *" autocomplete="none">
                        <input type="email" class="email" required placeholder="Email *" autocomplete="none">
                        <input type="text" class="subject" required placeholder="Assunto *" autocomplete="none">
                        <textarea id="mensagem" placeholder="Sua mensagem *"></textarea>
                        <input class="submit" type="submit" value="Enviar">
                    </form>
                </div>
            </section>
        </main>
        <script src="../JAVASCRIPT/sobre.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>