<?php 
include './controle/mostrar.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova de Estágio</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- CSS Principal -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header id="inicio">
        <nav class="container transparent z-depth-0">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo logo-in8">
                <img src="./img/logo-in8-dev.svg" width="100vw" alt="Logo In8">
              </a>
              <a href="#" data-activates="nav-mobile" class="button-collapse">
                <span class="large material-icons">menu</span>
              </a>
              <ul class="right hide-on-med-and-down">
                <li><a href="#cadastro">cadastro</a></li>
                <li><i class="tiny material-icons">brightness_1</i></li>
                <li><a href="#lista">lista</a></li>
                <li><i class="tiny material-icons">brightness_1</i></li>
                <li><a href="#sobre-mim">sobre mim</a></li>
              </ul>
              <ul id="nav-mobile" class="side-nav nav-mobile">
                <li><a href="#"><span class="large material-icons menu-hamburger-mobile" onclick="$('.button-collapse').sideNav('hide');">menu</span></a></li>
                <li><a href="#cadastro">cadastro</a></li>
                <li><a href="#lista">lista</a></li>
                <li><a href="#sobre-mim">sobre mim</a></li>
              </ul>
            </div>
        </nav>
        <section class="container">
            <h1 class="texto-cabecalho">ESTÁGIO</h1>
            <p class="flow-text texto-cabecalho">PROVA DE SELEÇÃO</p>  
        </section>
        <div class="fixed-action-btn">
          <a href="#inicio" class="btn-floating blue darken-4">
            <i class="large material-icons">arrow_upward</i>
          </a>
        </div>
    </header>
  
    <!-- Cadastro Principal -->
    <main id="cadastro">
      <section class="container form-cadastro">
          <form class="container transparent z-depth-0" action="./controle/inserir.php" method="POST">
            <div class="white-text center">
              <h3>CADASTRO</h3>
            </div>
              <div class="form-field">
                <label for="Nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
              </div>
              <div class="form-field">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="form-field">
                <label for="nascimento">Nascimento</label>
                <input type="date" id="nascimento" name="nascimento" required>
              </div>
              <div class="form-field">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" required placeholder="(00) 0 0000 0000" maxlength="11">
              </div>
              <div class="form-field center-align">
                <input type="submit" value="CADASTRAR" name="cadastrar" class="btn-large blue darken-4 z-depth-0" />
              </div>
          </form>
      </section>
    </main>     
    
    <!-- Tabela: Lista de candidatos -->
    <section id="lista" class="container tabela-cadastro">
      <div class="blue-text center">
        <h3>LISTA DE CADASTRO</h3>
      </div>
      <table class="bordered centered highlight responsive-table">
        <thead>
          <tr>
              <th></th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Nascimento</th>
              <th>Telefone</th>
              <th>Ações</th>
          </tr>
        </thead>

        <tbody>
          <?php
            $result = mostrarCandidatos();
            $contador = 1; 
            foreach($result as $value) { 
          ?>
          <tr>
            <td><?= $contador++; ?></td>
            <td><?= $value["nome"]; ?></td>
            <td><?= $value['email']; ?></td>
            <td><?= $value['nascimento']; ?></td>
            <td><?= $value['telefone']; ?></td>
            <td class="btn-acoes">
                <button data-target="modal-atualizar" class="modal-trigger" type="submit">
                  <i class="material-icons" title="Atualizar dados">create</i>
                </button>

              <form action="./controle/deletar.php" method="POST">
                <input type="hidden" name="id" value="<?= $value['id'] ?>" />
                <button type="submit">
                  <i class="material-icons" title="Excluir dados">delete_forever</i>
                </button>
              </form>
            </td>
          </tr>

          <!-- Modal para atualizar as informações do candidato -->
          <div id="modal-atualizar" class="modal modal-trigger">
            <section class="container form-cadastro">
            <i class="material-icons btn-fechar-modal" title="Fechar Modal" onclick="$('#modal-atualizar').modal('close');">close</i>
              <form class="container transparent z-depth-0" action="./controle/atualizar.php" method="POST">
              <div class="white-text center">
                <h3>ALTERAR DADOS</h3>
              </div>
                <input type="hidden" name="id" value="<?= $value['id']; ?>">
                <div class="form-field">
                  <label for="Nome">Nome</label>
                  <input type="text" id="nome" name="nome" value="<?= $value['nome']; ?>" required>
                </div>
                <div class="form-field">
                  <label for="email">E-mail</label>
                  <input type="email" id="email" name="email" value="<?= $value['email']; ?>" required>
                </div>
                <div class="form-field">
                  <label for="nascimento">Nascimento</label>
                  <input type="date" id="nascimento" name="nascimento" value="<?= $value['nascimento']; ?>" required>
                </div>
                <div class="form-field">
                  <label for="telefone">Telefone</label>
                  <input type="tel" id="telefone" name="telefone" value="<?= $value['telefone']; ?>" required placeholder="(00) 0 0000 0000" maxlength="11">
                </div>
                <div class="form-field center-align">
                  <input type="submit" value="ATUALIZAR" name="atualizar" class="btn-large blue darken-4 z-depth-0" />
                </div>
              </form>
            </section>
          </div>

          <?php } ?>
        </tbody>
      </table>
    </section>

    <!-- Rodapé -->
    <footer id="sobre-mim" class="center">
      <p>Fulano Beltrano de Oliveira da Silva</p>
      <p>fulanobos@gmail.com</p>
      <p>(31) 9 9666-1111</p>
      <p>Faculdade de Belo Horizonte</p>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- Plugin de Máscara JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <!-- Javascript próprio -->
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>