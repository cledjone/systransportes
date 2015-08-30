<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>SysTransporte</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/business-casual.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery-ui.js"></script>
		<script type="text/javascript" src="../js/scriptsCotacoes.js"></script>
		<script type="text/javascript" src="../js/scriptsCidades.js"></script>
	</head>
	<body>

		<div class="brand">
			SysTransportes
		</div>
		<div class="address-bar">
			Transporte suas mercadorias com rapidez e segurança!!
		</div>

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

		<form method="POST" action="login.php" >
			<div class="box divDimensoes">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Entre com seu login e senha</h2>
					<hr>
				</div>

				<div id="login">
					<label>Login:</label>
					<input type="text" name="login" id="login" size="12">
					<br />
					<label>Senha:</label>
					<input type="password" name="senha" id="senha" size="11">
					<br />
					<br />
					<input type="image" src='../img/loginBtn.png' id="btnIncluir" onClick="" /><br>
					<br />
					<br />
					<table>
					<tr class="itens" onClick="exibeCotacao();">
						<td><font size="3" color="green">Cadastre-se</font> </td>
					</tr>

				</table>
					
				</div>

				

			</div>

		</form>

		<!--  CAIXA DADOS LOGINUSUARIO-->
		<div id="dialogCotacao-form" title="CADASTRO DE USUARIOS">
			<center>

				</br>
				<table style="border: 1px solid;" class="itens" onClick="exibeCotacao();">
					<tr>
						<td colspan="20" style="border: 1px solid;">
						<center>
							<font color="red" size="4">DADOS DO USUARIO:</font>
						</center></td>
					</tr>
					<tr style="border: 1px solid;">
						<td width="80">CPF/CNPJ</td>
						<td width="80">Nome</td>
						<td width="80">Email</td>
						<td width="80">Logradouro</td>
						<td width="80">Bairro</td>
						<td width="80">CEP</td>
					</tr>
					<tr style="border: 1px solid;">
						<td>
						<input type="text" size="10" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value="" id="cpfcnpj" name="cpfcnpj">
						</td>
						<td >
						<input type="text" size="10" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value=""  id="nome" name="nome">
						</td>
						<td>
						<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value="" id="email" name="email">
						</td>
						<td >
						<input type="text" size="10" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value="" id="logradouro" name="logradouro">
						</td>
						<td>
						<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value=""  id="bairro" name="bairro">
						</td>
						<td style="border-right: 1px solid;">
						<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');"  value=""  id="cep" name="cep">
						</td>
					</tr>
				</table>
				</br>
				</table>
				</br>
				<input type="image" src='../img/incluirBtn.png' id="btnIncluir" onClick="consultaAJAX()">
				<a href="#dialog" name="cliente" id="alterar" >
				<input type="image" src='../img/alterarBtn.png' id="btnAlterar">
				</a>
				&nbsp;
				&nbsp;
				<input type="image" src='../img/sairBtn.png' onClick="fechaClientes();">
			</center>
		</div>
	</body>
</html>

