<html lang="en">    
    <head>
        <meta charset="utf-8">        
        <title>SysTransportes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">                        
		<link href="../../css/style.css" rel="stylesheet" type="text/css" charset="utf-8" />
		<script type="text/javascript" src="../../js/jquery.js"> </script>		
		<script type="text/javascript" src="../../js/scriptsCotacoes.js"> </script>		
		<script type="text/javascript" src="../../js/validacoes.js"> </script>		
    </head>    
    <body onload="consultaCotacoes('false')">
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
                                    <a href="aboutViewNew.php" class="dropdown-toggle " >Empresa</a>
                                <li class=" dropdown">
                                    <a href="frotaViewNew.php" class="dropdown-toggle " >Atuação</a>
                                </li>
                                <li class=" dropdown">
                                    <a href="cotacaoViewCadastroNew.php" class="dropdown-toggle " >Cotação</a>
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
                                    <a href="contactViewNew.php" class="dropdown-toggle " >Contatos</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav pull-right">
                                <li class=" dropdown">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Signed in as  <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="loginViewNew.php">Meu Perfil</a>
                                        </li>
                                        <li>
                                            <a href="usuarioViewCadastroNew.php">Registrar-se</a>
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
            <div class="container-fluid">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
							<center>                         
									
									<br><br> 
										<center>	
										<h1>
											Consulta Cotações
										</h1>  
											<sup><b>*</b></sup>Selecione uma Cotação para Interagir Com a Mesma
										</center>
									<br>
									<table border="1" width="100%" id="tabelaConsulta">
								
									</table>
									<br><br>
									<input type="image" src='../../img/incluirBtn.png' id="btnIncluir" onClick="irPara('viewCadastro.php','incluir')">
									<input type="image" src='../../img/visualizarBtn.png' id="btnVisualizar" onClick="irPara('viewCadastro.php','visualizar')">
									<input type="image" src='../../img/alterarBtn.png' id="btnAlterar" onClick="irPara('viewCadastro.php','alterar')">
									<input type="image" src='../../img/aprovarBtn.png' id="btnAprovar" onClick="irPara('viewCadastro.php', 'aprovar')">
									<input type="image" src='../../img/cancelarBtn.png' id="btnCancelar" onClick="irPara('viewCadastro.php','cancelar')">
									<input type="image" src='../../img/sairBtn.png' id="btnSair" onClick="irPara('../../index.php','index')">
                                                           
							</center>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </body>
</html>