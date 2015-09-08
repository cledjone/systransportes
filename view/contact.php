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
        <link rel="stylesheet" type="text/css" href="../css/paginaTemplate.css">

        <script src="http://code.jquery.com/jquery-1.11.1.min.js"> </script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"> </script>

        
        <script type="text/javascript" src="../js/jquery-ui.js"> </script>
        <script type="text/javascript" src="../js/scriptsUsuarios.js"> </script>
        <script type="text/javascript" src="../js/scriptsCidades.js"> </script>

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
                            
                            <center>
                            <hr>
                            <h2>CONTATO SYSTRANSPORTES</h2>
                            <hr>
                            
                            <h4>Telefone: 55 - (81)98768-7786</h4>
                            <h4>Email: systransporte@gmail.com</h4>
                            <h4>Endereço: 1000 Avenida Recife Vila Tamadare</h4>
                            </center>
                            
                            <br><br>
                    </div>
                </nav>
        </div>

<?php

?>

        <div class="navbar-wrapper">
                <nav class="navbar">
                    <div class="container">                        
                            
                        <hr>
                        <h2 class="intro-text text-center"><strong>Formulario</strong> para contato </h2>
                        <hr>
                        <p>
                            SysTransportes tem um enorme prazer de levar suas mecadorias para onde voçê precisar e com grande sastifação que nossa empresa faz isso e da melhor forma possivel e contamos com seu feedback para melhorar nosso trabalho.
                        </p>
                        <form role="form">
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label>Nome</label>
                                    <input type="text" class="form-control">
                                </div>


                                <div class="form-group col-lg-12">
                                    <label>Descrição</label>
                                    <textarea class="form-control" rows="6"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="hidden" name="save" value="contact">
                                    <button type="submit" class="btn btn-default">Enviar</button>
                                </div>
                            </div>
                    </div>
                </nav>
        </div>
    </body>

</html>