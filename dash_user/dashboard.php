<?php 
	session_start();
	include_once("../login/seguranca2.php");
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 	<title>Usuários</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/estilo.css">
 </head>
 <body class="body_user">
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Repórter Junino</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li class="active"><a href="dashboard.php">Pagina Inicial</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pautas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="pauta_finalizadas.php">Pautas Finalizadas</a></li>
              <li><a href="pauta_conclusao.php">Pautas em conclusão</a></li>
            </ul>
          </li>
            <li><a href="sobre.php">Sobre</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['usuarioNome']; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="troca_senha.php">Alterar Senha</a></li>
                <li><a href="../login/sair.php">Sair</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
        <h2>Bem vindo ao aplicativo do Reporter Junino, <?php echo $_SESSION['usuarioNome']; ?></h2>
      </div>
      </div>
     </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
 </body>
 </html>