<?php

  @$nome = $_GET['nome'];
  @$nasc = $_GET['nasc'];
  @$cpf = $_GET['cpf'];
  @$colegio = $_GET['colegio'];
  @$infoturma = $_GET['infoturma'];
  @$endereco = $_GET['endereco'];
  @$cidade = $_GET['cidade'];
  @$email = $_GET['email'];
  @$responsavel = $_GET['responsavel'];
  @$obsv = $_GET['obsv'];
  @$telefone = $_GET['telefone'];
  @$celular = $_GET['celular'];
  @$transporte = $_GET['transporte'];

  $conn = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u852405828_educa', 'u852405828_root', '21agosto21');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if($nome){
    $query="INSERT INTO tb_aluno set nome='{$nome}', nasc='{$nasc}', cpf='{$cpf}', colegio='{$colegio}', infoturma='{$infoturma}', endereco='{$endereco}', cidade='{$cidade}', email='{$email}', responsavel='{$responsavel}', obsv='{$obsv}', telefone='{$telefone}', celular='{$celular}', transporte='{$transporte}'";
    $conn->query($query);
    unset($conn);
    ?>
    <script type="text/javascript">
      alert("Cadastro realizado com sucesso!");
      window.location="cadastro.php";
    </script>
    <?php
  }
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
  .entradas{
    font-size: 18px;
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
        <li role="presentation" class="active"><a href="cadastro.php"><span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> Novo Cadastro</a></li>
        <li role="presentation"><a href="consulta.php"><span class="glyphicon glyphicon-search" style="font-size: 15px;"></span> Consultar Registros</a></li>
      </ul>
      <div class="campo-central">
        <a href="cadastro.php">Novo Cadastro</a> / <a href="cad-alunos.php">Cadastro de Alunos</a>
        <hr>
        <form class="form-horizontal" action="cad-alunos.php" method="GET">
          <div class="form-group">
            <label for="nome" class="col-sm-1 control-label">NOME</label>
            <div class="col-sm-7">
              <input type="text" class="form-control entradas" id="nome" name="nome">
            </div>
            <label for="nasc" class="col-sm-2 control-label">DATA DE NASCIMENTO</label>
            <div class="col-sm-2">
              <input type="text" class="form-control entradas" id="nasc" name="nasc">
            </div>
          </div>
          <div class="form-group">
            <label for="cpf" class="col-sm-1 control-label">CPF</label>
            <div class="col-sm-2">
              <input type="text" class="form-control entradas" id="cpf" name="cpf">
            </div>
            <label for="colegio" class="col-sm-1 control-label">COLÉGIO</label>
            <div class="col-sm-4">
              <input type="text" class="form-control entradas" id="colegio" name="colegio">
            </div>
            <label for="infoturma" class="col-sm-2 control-label">INFORMAÇÕES DA TURMA</label>
            <div class="col-sm-2">
              <input type="text" class="form-control entradas" id="infoturma" name="infoturma">
            </div>
          </div>
          <div class="form-group">
            <label for="endereco" class="col-sm-1 control-label">ENDEREÇO</label>
            <div class="col-sm-7">
              <input type="text" class="form-control entradas" id="endereco" name="endereco">
            </div>
            <label for="cidade" class="col-sm-1 control-label">CIDADE</label>
            <div class="col-sm-3">
              <input type="text" class="form-control entradas" id="cidade" name="cidade">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-1 control-label">E-MAIL</label>
            <div class="col-sm-3">
              <input type="text" class="form-control entradas" id="email" name="email">
            </div>
            <label for="responsavel" class="col-sm-2 control-label">NOME DO RESPONSÁVEL</label>
            <div class="col-sm-6">
              <input type="text" class="form-control entradas" id="responsavel" name="responsavel">
            </div>
          </div>
          <div class="form-group">
            <label for="obsv" class="col-sm-1 control-label">OBSERVAÇÕES</label>
            <div class="col-sm-11">
              <input type="text" class="form-control entradas" id="obsv" name="obsv">
            </div>
          </div>
          <div class="form-group">
            <label for="telefone" class="col-sm-1 control-label">TELEFONE</label>
            <div class="col-sm-3">
              <input type="text" class="form-control entradas" id="telefone" name="telefone">
            </div>
            <label for="celular" class="col-sm-1 control-label">CELULAR</label>
            <div class="col-sm-3">
              <input type="text" class="form-control entradas" id="celular" name="celular">
            </div>
            <label for="transporte" class="col-sm-2 control-label">TRANSPORTE ESCOLAR</label>
            <div class="col-sm-2">
              <input type="text" class="form-control entradas" id="transporte" name="transporte">
            </div>
          </div>
          <br/>
          <div class="form-group">
            <span class="col-sm-1"></span>
            <div class="col-sm-3">
              <button type="submit" class="btn btn-success">
                <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span><span style="font-size: 20px">&nbsp;&nbsp;SALVAR INFORMAÇÕES</span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </big>
</body>
</html>