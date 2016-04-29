<?php
  $conn = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u852405828_educa', 'u852405828_root', '21agosto21');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="SELECT * FROM tb_aluno";
  $dados=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>ICEBERG - Módulo Educacional</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Amatic+SC|Rokkitt|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <style type="text/css">
  body{
    font-family: 'Open Sans Condensed', sans-serif;
    background-image: url('imgs/login.jpg');
    background-attachment: 500px 200px;
  }
  .icefont{
    font-size: 22px;
    font-family: 'Rokkitt', serif;
  }
  .campo-central{
    background: #fff;
    margin: 0px 1px 10px 0px;
    padding: 10px;
    border: 1px solid #ddd;
    border-top: none;
  }
  </style>
</head>
<body>
  <big>
    <div class="container" style="margin-top: 15px; background: rgba(255,255,255,0.7);">
      <h1>&nbsp;&nbsp;&nbsp;<span style="font-family: 'Amatic SC', sans-serif; font-size: 50px;">ICEBERG</span><small> 1.6</small></h1>
      <br/>
      <ul class="nav nav-tabs icefont">
        <li role="presentation"><a href="inicio.php"><span class="glyphicon glyphicon-home" style="font-size: 15px;"></span> Início</a></li>
        <li role="presentation"><a href="cadastro.php"><span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> Novo Cadastro</a></li>
        <li role="presentation" class="active"><a href="consulta.php"><span class="glyphicon glyphicon-search" style="font-size: 15px;"></span> Consultar Registros</a></li>
      </ul>
      <div class="campo-central">
        <a href="consulta.php">Consultar Registros</a> / <a href="tab-alunos.php">Registros de Alunos</a>
        <hr>
        <table class="table table-bordered">
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Data de Nasc.</th>
          <th>Colégio</th>
          <th>Info. da Turma</th>
          <th>E-mail</th>
          <th>Celular</th>
        </tr>

        <?php foreach($dados as $linha){  ?>
          <tr>
            <td><?=$linha['codigo']; ?></td>
            <td><?=$linha['nome']; ?></td>
            <td><?=$linha['nasc']; ?></td>
            <td><?=$linha['colegio']; ?></td>
            <td><?=$linha['infoturma']; ?></td>
            <td><?=$linha['email']; ?></td>
            <td><?=$linha['celular']; ?></td>
          </tr>
        <?php } unset($conn); ?>
      </div>
    </div>
  </big>
</body>
</html>