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
        <link rel="stylesheet" type="text/css" href="../css/loginCadastro.css">
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
        <style type="text/css">
            body{ background-image: url("http://noticias.prestumseguros.com.br/wp-content/uploads/2013/12/seguro-caminhao.jpg");
            } .transparent-style{ background-color: #000000; opacity: .9; } .navbar,
            .dropdown-menu{ background:rgba(255,255,255,0.75); border-bottom: 3px solid
            transparent; } .nav>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover,
            .dropdown-menu>li>a, .dropdown-menu>li{ border-bottom: 3px solid transparent;
            } .nav>li>a:focus, .nav>li>a:hover,.nav .open>a, .nav .open>a:focus, .nav
            .open>a:hover, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{ border-bottom:
            3px solid transparent; background:rgba(245,255,255,0.10); } .navbar a,
            .dropdown-menu>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
            color: #071B39; } .dropdown-menu{ -webkit-box-shadow: none; box-shadow:none;}
            .nav li:hover:nth-child(8n+1), .nav li.active:nth-child(8n+1){ border-bottom:
            #C4E17F 3px solid; } .nav li:hover:nth-child(8n+2), .nav li.active:nth-child(8n+2){border-bottom:
            #F7FDCA 3px solid; } .nav li:hover:nth-child(8n+3), .nav li .active:nth-child(8n+3){
            border-bottom: #FECF71 3px solid; } .nav li:hover:nth-child(8n+4), .nav
            li.active:nth-child(8n+4){ border-bottom: #F0776C 3px solid; } .nav li:hover:nth-child(8n+5),
            .nav li.active:nth-child(8n+5){ border-bottom: #DB9DBE 3px solid; } .nav
            li:hover:nth-child(8n+6), .nav li.active:nth-child(8n+6){ border-bottom:
            #C49CDE 3px solid; } .nav li:hover:nth-child(8n+7), .nav li.active:nth-child(8n+7){
            border-bottom: #669AE1 3px solid; } .nav li:hover:nth-child(8n+8), .nav
            li.active:nth-child(8n+8){ border-bottom: #62C2E4 3px solid; }
        </style>
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
                                                <form id="login-form" action="#" method="post"
                                                role="form" style="display: block;">
                                                    <div class="form-group">
                                                        <input type="text" size="30" class="form-control" placeholder="Digíte seu usuário de acesso"
                                                        tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');"
                                                        value="" id="nome" name="nome">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" size="30" class="form-control" placeholder="Digíte sua senha"
                                                        tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');"
                                                        value="" id="razaoSocial" name="razaoSocial">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                                                                class="form-control btn btn-login" value="Acessar">
                                                            </div>
                                                        </div>
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
                                                                <center>
                                                                    <div class="botoes">
                                                                        <a href="usuarioCadastroPJ.php" class="btn btn-large btn-primary float-left"
                                                                        style="float:left: ;">Pessoa Juridica</a>
                                                                        <a href="usuarioCadastroPF.php" class="btn btn-large btn-primary float-left"
                                                                        style="float:left: ;">Pessoa Fisica</a>

                                                                    </div>
                                                                </center>
                                                            </div>
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