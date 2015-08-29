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

		<!-- Navigation -->
		<nav class="divDimensoes navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
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
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>

		<div class="divDimensoes container">
			<div class="row">
				<div class="box" align="justify">
					<div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center"><strong>Cadastro de Usuario</strong></h2>
						<hr>
						<form  method="post" action="cadastro.php">
							<div class="form-group col-lg-4" style="size: 100">

								<label>CPFCNPJ:</label>
								<input type="text" name="cpfcnpj" id="cpfcnpj" size="20">
								<br />
								<label>Nome:</label>
								<input type="text" name="nome" id="nome" size="50">
								<br />
								<label>Nome Fantasia:</label>
								<input type="text" name="fantasia" id="fantasia" size="50">
								<br />
								<label>Razão Social:</label>
								<input type="text" name="razaoSocial" id="razaoSocial" size="50">
								<br />
								<label>Email:</label>
								<input type="text" name="email" id="email" size="40">
								<br />
								<label>Logradouro:</label>
								<input type="text" name="logradouro" id="logradouro" size="50">
								<br />
								<label>Bairro:</label>
								<input type="text" name="bairro" id="bairro" size="50">
								<br />
								<label>CEP:</label>
								<input type="text" name="cep" id="cep" size="9">
								<br />
								<label>Telefone1:</label>
								<input type="text" name="telefone1" id="telefone1" size="14">
								<br />
								<label>Telefone2:</label>
								<input type="text" name="telefone2" id="telefone2" size="14">
								<br />
								<label>Login:</label>
								<input type="text" name="login" id="login" size="20">
								<br />
								<label>Senha:</label>
								<input type="text" name="senha" id="senha" size="12">
								<br />
							</div>
							<div class="form-group col-lg-12">
								<input type="hidden" name="save" value="cadastro">
								<button type="submit" class="btn btn-default">
									Cadastrar
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

	</body>

</html>