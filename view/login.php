<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SysTransporte</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>
	
	<div class="brand">SysTransportes</div>
    <div class="address-bar">Transporte suas mercadorias com rapidez e segurança!!</div>
	
	<nav class="navbar navbar-default" role="navigation">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../index.php">Principal</a>
                    </li>
					<li>
                        <a href="frota.php">LOGÍSTICA</a>
                    </li>   
                    <li>
                        <a href="about.php">Sobre</a>
                    </li>               
                    <li>
                        <a href="contact.php">Fale Conosco</a>
                    </li>
					 <li>
                        <a href="login.php">Login</a><!--Ajeitar-->
                    </li>				
                </ul>
            </div>
    </nav>
	
	
	
	<form method="POST" action="login.php">
		<div class="box_login">
			<div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Entre com seu login e senha</h2>
                    <hr>
            </div>
			
			<div id="login">
				<label>Login:</label><input type="text" name="login" id="login" size="12"><br>
				<label>Senha:</label><input type="password" name="senha" id="senha" size="11"><br>
				<br />
				<input type="submit" value="entrar" name="entrar"><br>
			</div>
			
			<div id="cadastro">
				<a href="cadastro.php">Cadastre-se</a>
			</div>			
			
		</div>
		
	</form>
</body>
</html>


