<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>
            SysTransportes
        </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

        <script src="http://code.jquery.com/jquery-1.11.1.min.js"> </script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"> </script>

        
        <script type="text/javascript" src="../js/jquery-ui.js"> </script>
        <script type="text/javascript" src="../js/scriptsUsuarios.js"> </script>
        <script type="text/javascript" src="../js/scriptsCidades.js"> </script>


 <style type="text/css">
            body{ background-image: url("http://noticias.prestumseguros.com.br/wp-content/uploads/2013/12/seguro-caminhao.jpg");
            } 
            .transparent-style{ background-color: #000000; opacity: .9; }
            .navbar,
            .dropdown-menu{ background:rgba(255,255,255,0.70); border-bottom: 3px solid transparent; } 
            .nav>li>a,
            .dropdown-menu>li>a:focus, 
            .dropdown-menu>li>a:hover, 
            .dropdown-menu>li>a,
            .dropdown-menu>li{ border-bottom: 3px solid transparent; } 
            .nav>li>a:focus,
            .nav>li>a:hover,.nav .open>a, .nav .open>a:focus, .nav .open>a:hover, 
            .dropdown-menu>li>a:focus,
            .dropdown-menu>li>a:hover{ border-bottom: 3px solid transparent; background:rgba(245,255,255,0.10); } 
            .navbar a, 
            .dropdown-menu>li>a, 
            .dropdown-menu>li>a:focus, 
            .dropdown-menu>li>a:hover{ color: #071B39; } 
            .dropdown-menu{ -webkit-box-shadow: none; box-shadow:none;} 
            .nav li:hover:nth-child(8n+1), 
            .nav li.active:nth-child(8n+1){ border-bottom: #C4E17F 3px solid; } 
            .nav li:hover:nth-child(8n+2), 
            .nav li.active:nth-child(8n+2){border-bottom: #F7FDCA 3px solid; } 
            .nav li:hover:nth-child(8n+3), 
            .nav li .active:nth-child(8n+3){ border-bottom: #FECF71 3px solid; } 
            .nav li:hover:nth-child(8n+4),
            .nav li.active:nth-child(8n+4){ border-bottom: #F0776C 3px solid; } 
            .nav li:hover:nth-child(8n+5), 
            .nav li.active:nth-child(8n+5){ border-bottom: #DB9DBE 3px solid; } 
            .nav li:hover:nth-child(8n+6), 
            .nav li.active:nth-child(8n+6){ border-bottom: #C49CDE 3px solid; } 
            .nav li:hover:nth-child(8n+7), 
            .nav li.active:nth-child(8n+7){ border-bottom: #669AE1 3px solid; } 
            .nav li:hover:nth-child(8n+8),
            .nav li.active:nth-child(8n+8){ border-bottom: #62C2E4 3px solid; }
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
                                    <a href="index.php" class="">Home</a>
                                </li>
                                <li class=" dropdown">
                                    <a href="view/about.php" class="dropdown-toggle " >Empresa</a>
                                <li class=" dropdown">
                                    <a href="view/frota.php" class="dropdown-toggle " >Atuação</a>
                                </li>
                                <li class=" dropdown">
                                    <a href="view/cotacaoCadastro.php" class="dropdown-toggle " >Cotação</a>
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
                                    <a href="view/contact.php" class="dropdown-toggle " >Contatos</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav pull-right">
                                <li class=" dropdown">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Signed in as  <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="view/login.php">Meu Perfil</a>
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

                            <hr>
                            <center>
                                
                            <h1 class="brand-name">SysTransporte</h1>
                            <h2>Nosso Trabalho é com <strong>Rapidez e Confiança!</strong></br>
                            <small>Sejam Bem vindos!!</small></h2>
                            
                            </center>
                            <hr>
                            <h4>
                            A SysTransporte posiciona-se no segmento de logística com uma estratégia de negócios que visa a agregação de valor aos seus Clientes, gerenciando parte ou todas as atividades da cadeia de suprimentos relacionadas à gestão de materiais e/ou sua distribuição, oferecendo serviços qualificados em conformidade e adequação às exigências e necessidades do transporte, com preços competitivos e atendimento diferenciado.
                            </h4>
                            <br><br><br><br><br><br>
                    </div>
                </nav>
        </div>
    </body>

</html>