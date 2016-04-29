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
    height: 420px;
  }
  </style>
</head>
<body>
  <big>
    <div class="container" style="margin-top: 15px; background: rgba(255,255,255,0.7);">
      <h1>&nbsp;&nbsp;&nbsp;<span style="font-family: 'Amatic SC', sans-serif; font-size: 50px;">ICEBERG</span><small> 1.6</small></h1>
      <br/>
      <ul class="nav nav-tabs icefont">
        <li role="presentation" class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home" style="font-size: 15px;"></span> Início</a></li>
        <li role="presentation"><a href="cadastro.php"><span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> Novo Cadastro</a></li>
        <li role="presentation"><a href="consulta.php"><span class="glyphicon glyphicon-search" style="font-size: 15px;"></span> Consultar Registros</a></li>
      </ul>
      <div class="campo-central">
        <a href="inicio.php">Início</a>
        <hr>
        <div class="col-lg-5">
          <img src="imgs/iceberg.jpg" style="width: 100%; height: auto;"/>
        </div>
        <div class="col-lg-7">
        <div class="alert alert-info" role="alert">
          <strong>ATENÇÃO</strong>: Antes de cadastrar quaisquer colaboradores verifique o padrão dos campos, evitando deixar os mesmos em branco ou com informações incorretas, isto mantém o banco de dados integro.
        </div>
        <h2>Acesso Rápido</h2>
        <br/>
        <p>
        <div  style="width: 120px;">Novos Cadastros </div>
        <a href="cad-alunos.php" class="btn btn-primary" role="button" style="width: 120px;">Cadastrar Alunos</a> 
        <a href="cad-professores.php" class="btn btn-primary" role="button" style="width: 120px;">Cadastrar Professores</a>
        </p>
        <p>
        <div  style="width: 120px;">Consultar Registros </div>
        <a href="tab-alunos.php" class="btn btn-primary" role="button" style="width: 120px;">Consultar Alunos</a> 
        <a href="tab-professores.php" class="btn btn-primary" role="button" style="width: 120px;">Consultar Professores</a>
        </p>
        </div>
      </div>
    </div>
  </big>
</body>
</html>