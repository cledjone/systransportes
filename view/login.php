<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>
            SysTransportes
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
        rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/paginaTemplate.css">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js">
         
        </script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">
         
        </script>
        <script type="text/javascript" src="../js/jquery-ui.js">
         
        </script>
        <script type="text/javascript" src="../js/scriptsUsuarios.js">
         
        </script>
        <script type="text/javascript" src="../js/scriptsCidades.js">
         
        </script>
        <script type="text/javascript" src="../js/scriptsLoginUsuarios.js">
         
        </script>
    </head>
    
    <body>
        <div class="navbar-wrapper">
            <div class="container-fluid">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">
                                    Toggle navigation
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                            </button>
                            <a class="navbar-brand" href="#">SysTransportes</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="../index.php" class="">Home</a>
                                </li>
                                <li class=" dropdown">
                                    <a href="about.php" class="dropdown-toggle " >Empresa</a>
                                <li class=" dropdown">
                                    <a href="frota.php" class="dropdown-toggle " >Atuação</a>
                                </li>
                                <li class=" dropdown">
                                    <a href="cotacaoCadastro.php" class="dropdown-toggle " >Cotação</a>
                                </li>
                                <li class=" dropdown">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Serviços <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">View Staff</a>
                                        </li>
                                        <li>
                                            <a href="#">Add New</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" dropdown">
                                    <a href="contact.php" class="dropdown-toggle " >Contatos</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav pull-right">
                                <li class=" dropdown">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Signed in as  <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="login.php">Meu Perfil</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


        
        <div class="navbar-wrapper">
            <nav class="navbar">
                <div class="container">
                    <br>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="panel panel-login">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <a href="#" class="active" id="login-form-link">Login</a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" id="register-form-link">Registre-se</a>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="login-form" action="#" method="post"role="form" style="display: block;">
                                                    
                                                    <div class="form-group">
                                                        <input type="text" size="30" class="form-control" placeholder="Digíte seu usuário de acesso"
                                                        type="text" onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');"
                                                        value="" id="nome" name="nome">
                                                    
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <input type="password" size="30" class="form-control" placeholder="Digíte sua senha"
                                                        type="text" onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');"
                                                        value="" id="razaoSocial" name="razaoSocial">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <center>
                                                            <input type="submit" name="" id="" value="Acessar" class="btn btn-lg btn-primary" class="btn btn-default">
                                                        </center>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="text-center">
                                                                    <a href="#" tabindex="5" class="forgot-password">Esqueceu sua senha?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                                <form id="register-form" method="post"
                                                role="form" style="display: none;">
                                                    <center>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                
                                                                <ul class="ds-btn">
                                                                    <li>
                                                                    <a class="btn btn-lg btn-info" href="usuarioCadastroPF.php">
                                                                    <i class="glyphicon glyphicon-user pull-left"></i><span>Pessoa Física<br><small>Cadastre-se como PF</small></span></a> 
                                                                    </li>

                                                                    <li>
                                                                    <a class="btn btn-lg btn-info" href="usuarioCadastroPJ.php">
                                                                    <i class="glyphicon glyphicon-user pull-left"></i><span>Pessoa Jurídica<br><small>Cadastre-se como PJ</small></span></a> 
                                                                    </li>
                                                                </ul>    
                                                        </div>
                                                    </center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </nav>
        </div>
    </body>

</html>