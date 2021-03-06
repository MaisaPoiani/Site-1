<?php
include_once '../connections/database.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../styles/estilo.css">
  <link rel="stylesheet" type="text/css" href="../styles/estilo3.css">
  <link rel="stylesheet" type="text/css" href="../styles/quemSomos.css">

  <title>Quem Somos</title>
</head>

<body>

  <head>
    <!-- inicio cabecalho -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container-fluid">
        <a href="#" class="navbar-brand">
          <img src="https://i.ibb.co/jD36ZX1/logobranco.jpg" width="142">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home | </a>
            </li>
            <li class="nav-item">
              <a href="blog.php" class="nav-link">Blog | </a>
            </li>
            <li class="nav-item">
              <a href="cursos.php" class="nav-link">Cursos | </a>
            </li>
            <li class="nav-item">
              <a href="projetos.php" class="nav-link">Projetos | </a>
            </li>
            <li class="nav-item">
              <a href="quemSomos.php" class="nav-link">Quem Somos </a>
            </li>
            <!-- <li class="nav-item">
                    <a href="loja.php" class="nav-link">Loja </a>
                  </li>   -->
          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-dark my-sm-0" type="submit">
              <i class="fas fa-search"></i>
        </div>
      </div>
    </nav>
  </head><!-- fim cabecalho -->

  <main>
    <div class="dividir">
      <img id="epta_logo" class="test" src="https://i.ibb.co/17BkS7z/42521677-1118288338330299-4395508705123106816-n-2.jpg" >
    </div>
    <h1 class="centro"> Quem somos </h1>
    <p class="centro">
      Apesar de nova a Equipe de Propuls??o e Tecnologia Aeroespacial conquistou muitos
      feitos, e continua ainda hoje se desafiando, se superando e buscando espa??o no meio do foguete
      modelismo universit??rio assim como conquistou seu espa??o no meio acad??mico e de pesquisa.
      A equipe se orgulha por defender e apoiar a pesquisa brasileira gratuita e de qualidade
      fornecida por nossa universidade. Se orgulha tamb??m por defender qualquer tipo de
      preconceito e injusti??a, e buscar acima de tudo igualdade dentro e fora da equipe.
    </p>
    <h1 class="centro">??reas</h1>

    <section class="caixa">
      <!-- primeira area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Avi??nica</h2>
              <p>
              A avi??nica ?? o subsistema respons??vel pela parte eletr??nica e eletromec??nica de um foguete, tanto o sistema
              embarcado, quanto o de igni????o. Abrangendo conhecimentos de instrumenta????o, eletr??nica e programa????o, a
              subequipe visa a capta????o de dados de voo e a utiliza????o de telemetria para an??lise em tempo real de informa????es.
              Al??m disso, ?? a ??rea a que se encarrega a elabora????o e a confec????o dos circuitos de igni????o do foguete e de
              acionamento do sistema de recupera????o
              </p>
            </div>

          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/0FWVTH9/avionica.jpg" class="img-fluid img_quemsomos" ></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->

    <section class="caixa">
      <!-- segunda area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/yXwYskX/9705978-1041x739.jpg" class="img-fluid img_quemsomos" ></a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Propuls??o</h2>
              <p>
              A Propuls??o ?? respons??vel por fornecer movimento ao foguete. Ela desenvolve tanto os
              motores, como o combust??vel a ser utilizado. ?? rodeado de grande complexidade e perigos.
              Por isso, ela ?? tratada com extrema seriedade e seguindo com afinco os protocolos de
              seguran??a . Essa ??rea carrega consigo um pouco do nome da equipe e isso ?? uma pequena
              amostra do peso que a ??rea carrega.
              </p>


            </div>

          </div>

        </div>

      </div>

    </section><!-- fim conteudo -->

    <section class="caixa">
      <!-- terceira area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Entertainment</h2>
              <p>
                Desenvolvimento de aplicativos e jogos para android e computador, a princ??pio utilizando 
                a linguagem C# e a Unity engine. O objetivo da ??rea ?? de divulga????o da equipe de forma
                descontra??da, al??m de servir como um dos meios de arrecada????o da mesma (Monetiza????o dos
                jogos atrav??s de an??ncios ou venda de jogos). EPTA Space Program foi o primeiro jogo
                desenvolvido pela equipe e em seu lan??amento teve mais de 1000 downloads, em 8 pa??ses diferentes.
                Todas as ilustra????es, sons e m??sicas s??o desenvolvidas de forma autoral, dentro da equipe.
              </p>

            </div>



          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/3B2yk9x/entertaiment.png" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->

    <section class="caixa">
      <!-- quarta area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/DtDz4Mx/LEARNING-capa-site.png" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Learning</h2>
              <p>
              O EPTA Learning tem como objetivo alcan??ar o p??blico geral levando a eles n??o s?? o conhecimento das tecnologias aeroespaciais,
              mas tamb??m de engenharias e ci??ncia. Portanto, al??m da transmiss??o de conhecimento tem como fun????o inspirar novas mentes e 
              incentivar os sonhos daqueles que se interessam por essas ??reas.
              </p>
            </div>

          </div>

        </div>

      </div>

    </section><!-- fim conteudo -->

    <section class="caixa">
      <!-- quinta area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Administra????o e financeiro</h2>
              <p>
              A ??rea visa melhorar os resultados apresentados pela equipe atrav??s do direcionamento em rela????o a metas e planejamentos, al??m
              de aumentar o valor do patrim??nio por meio da gera????o de lucro l??quido
              </p>

            </div>



          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/MfDBRnz/financeir.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->

    <section class="caixa">
      <!-- sexta area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/L6kqz5n/marketing-1024x536.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Marketing</h2>
              <p>
              Sendo o primeiro contato de uma pessoa externa com a EPTA, ?? a ??rea respons??vel pela identidade visual da
              equipe, gerenciamento das redes sociais, envolvendo tamb??m o estudo do p??blico alvo, para a cria????o de
              conte??do mais efetiva!
              </p>


            </div>

          </div>

        </div>

      </div>

    </section><!-- fim conteudo -->
    <section class="caixa">
      <!-- setima area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Recupera????o</h2>
              <p>
              A recupera????o ?? a ??rea que se certifica do retorno do foguete ao solo de maneira mais segura e menos
              prejudicial ??s suas estruturas e ??s pessoas presentes no lan??amento. Para isso, ?? escolhida e projetada
              a geometria e as dimens??es do paraquedas assim como o tamanho do conjunto de cordas, levando em considera????o
              principalmente o apogeu e o raio de busca dispon??vel. Nesta ??rea, avaliamos diferentes m??todos de eje????o do
              paraquedas, utilizando o que mais nos convweedsfr??m e projetando seu sistema de travas e atuadores, como molas, el??sticos
              e motores. O compromisso da recupera????o ?? garantir um bom pouso ao foguete sem maiores danos.
              </p>

            </div>



          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/2ccNrR7/recuperacao.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->
    <section class="caixa">
      <!-- oitava area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/0BbzWxL/aerodin.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Estruturas</h2>
              <p>
                A ??rea de estruturas da EPTA ?? respons??vel por determinar os efeitos de carga sofridos pela estrutura do
                foguete ao longo de toda sua miss??o garantindo assim que o mesmo completar?? sua opera????o sem sofrer danos.
                Para isso, a ??rea de estruturas realiza c??lculos e determina materiais e jun????es que possam suportar os
                esfor??os requeridos do fogueet. Al??m de realizar sua constru????o, uma tarefa complexa e que demanda tempo.
                Tamb??m ?? respons??vel pela base de lan??amento.
              </p>


            </div>

          </div>

        </div>

      </div>

    </section><!-- fim conteudo -->

    <section class="caixa">
      <!-- nona area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Aerodin??mica</h2>
              <p>
              De um simples avi??o de papel a um ??nibus espacial a Aerodin??mica ?? primordial para o projeto de qualquer
              aeronave, especialmente para nossa ??rea de foguetemodelismo. Reduzir o arrasto, garantir a estabilidade em
              voo e a integra????o fluido-estrutural s??o os focos da ??rea. Para isso, utilizamos simula????es em CFD (Fluidodin??mica
              Computacional) e m??todos anal??ticos - empregando Python??? e suas bibliotecas de forma a discretizar o modelo.
              Enfim, fabricamos nossos componentes e concretizamos o projeto com valida????es por t??nel de vento e testes estruturais
              para efetuarmos um lan??amento eficiente e seguro.
              </p>

            </div>

          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/82fJ3Lv/aerodinamica.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->

    <section class="caixa">
      <!-- decima area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/GTGqwh5/pesquisa.png" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Pesquisa</h2>
              <p>
                O incentivo a busca pelo conhecimento e a produ????o cient??fica ?? muito importante para todos, e a equipe
                est?? inserida nesse meio. No diret??rio de pesquisa, os membros da equipe recebem o aux??lio necess??rio para 
                desenvolverem artigos acad??micos. Desde a busca por um tema, e encontrar um orientador, at?? a submis??o do
                artigo, o diret??rio est?? a disposi????o do aluno. Qualquer membro pode realizar pesquisa referente a qualquer
                ??rea com temas trabalhados pela EPTA.
              </p>


            </div>

          </div>

        </div>

      </div>

    </section><!-- fim conteudo -->

    <section class="caixa">
      <!-- nona area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Gest??o de Pessoas</h2>
              <p>
              A gest??o de pessoas gerencia os recursos humanos da equipe, respons??vel pela coleta de indicadores de engajamento
              por meio de pesquisas, manuten????o do clima organizacional, supervis??o e aux??lio em feedbacks individuais e de equipe
              e a elabora????o de capacita????es gerais (lideran??a, comunica????o, feedbacks, etc);
              </p>
            </div>

          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/dmBdjWk/gp.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->
  </main>

  <section class="caixa">
    <!-- inicio fotos membros -->
    <div class="container">
      <div class="row members">
            <?php
            $query = "SELECT * FROM membros ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
                  <div class='member_div'>
                    <img src='{$row['Imagem']}' class = 'member_img' width='100' height='100'>
                    <b class='info_membro'>{$row['Nome']}</b>
                    <p class='info_membro'>{$row['Area']}</p>
                  </div>              
                ";
              }
            } else {
              echo "Ainda n??o h?? nada por aqui";
            }
            ?>
      </div>
    </div>
  </section>




  <footer class="mt-4 mb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p>
            <a href="index.php">Home</a>
            <a href="blog.php">Blog</a>
            <a href="projetos.php">Projetos</a>
            <a href="cursos.php">Cursos</a>
            <a href="quemSomos.php">Quem Somos</a>
          </p>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
          <a href="https://www.facebook.com/eptarocketdesign/" class="btn btn-outline-dark ml-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://github.com/Epta-space" class="btn btn-outline-dark ml-2">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://www.instagram.com/equipe_epta/" class="btn btn-outline-dark ml-2">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://bo.linkedin.com/company/equipe-de-propuls%C3%A3o-e-tecnologia-aeroespacial-epta" class="btn btn-outline-dark ml-2">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>

    </div>
  </footer>
</body>

</html>