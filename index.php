<!DOCTYPE html>
<html lang="en">
 <head>
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Login</title>
  <link href='https://fonts.googleapis.com/css?family=Amatic+SC|Rokkitt|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <style type="text/css">
  body{
    font-family: 'Open Sans Condensed', sans-serif;
    font-size: 26px;
    overflow: hidden;
    background-image: url('imgs/login.jpg');
    background-attachment: 500px 200px;
  }
  </style>
</head>
  <body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" style=" background: rgba(255,255,255,0.3); border: rgba(0,0,0,0.9); ">
                    <div class="panel-heading"  style="background: rgba(255,255,255,0.5); border-bottom: none;">
                        <div class="p   el-title">Login</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="validar.php" method="GET">
                                 <!-- LOGIN   -->    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login" type="text" class="form-control" name="login" value="" placeholder="usuario">                                        
                                    </div>
                                     <!-- campo SENHA -->
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="senha" type="password" class="form-control" name="senha" placeholder="senha">
                                    </div>
                                    

                                
                                   <div style="margin-top:10px" class="form-group">
                                   <!-- Button -->
                                    <div class="col-sm-12 controls">
                                    <input type="submit" class="btn btn-success" value="Login"> 
                                   </div>
                                </div>


                                
                            </form>     



                        </div>                     
                    </div>  
        </div>
    </div>
</div>
</body>
</html>