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
		<!--  <script type="text/javascript" src="../js/scriptsCotacoes.js"></script>  
		<script type="text/javascript" src="../js/scriptsCidades.js"></script>  -->
		<script type="text/javascript" src="../js/scriptsUsuarios.js"></script>
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
						<a href="frota.php">Logística</a>
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

		<form method="POST" action="" >
			<div class="box divDimensoes">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Entre com seu login e senha</h2>
					<hr>
				</div>

				<div id="login">

					<label id="labelLogin" name="labelLogin">Login:</label>
					<input type="text" id="loginId" name="loginId" size="12">
					<br />
					<label id="labelSenha" name="labelSenha">Senha:</label>
					<input type="password" id="senhaId"  name="senhaId" size="11">
					<br />
					<br />
					   <img src="../img/loginBtn.png"  id="btnLogin" onClick="validaUsuario(); consultaUsuario();" />
					<br>
					<br />
					<br />

					<table>
						<tr class="itens" onClick="exibeUsuario();">
							<td><font size="3" color="green">Cadastre-se</font></td>
						</tr>
					</table>
				</div>
			</div>
		</form>
		
		<!--  CAIXA DADOS LOGINUSUARIO-->
		<div id="dialogUsuario-form" title="Cadastro de Usuários" style="align: center">
			</br>

			<center>
				<table style="width: 100%">
				<tr>
                    <tr>
                        <td>
                            <p align="justify"><font size="2">Nome:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="nome" name="nome"></font></p>
                        </td>

                        <td>
                            <p align="justify"><font size="2">Razão Social:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="razaoSocial" name="razaoSocial"></font></p>
                        </td>
					<tr>

					</tr>
                        <td>
                            <p align="justify"><font size="2">Nome Fantasia:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="fantasia" name="fantasia"></font></p>
                        </td>

                        <td>
                            <p align="justify"><font size="2">CPF/CNPJ:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="cpfcnpj" name="cpfcnpj"></font></p>
                        </td>
					<tr>
					</tr>
                        <td>
                            <p align="justify"><font size="2">E-mail:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="email" name="email"></font></p>
                        </td>

                        <td>
                            <p align="justify"><font size="2">Telefone 1:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="telefone1" name="telefone1"></font></p>
                        </td>
					<tr>
					</tr>
                        <td>
                            <p align="justify"><font size="2">Telefone 2:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                           <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="telefone2" name="telefone2"></font></p>
                        </td>

                        <td>
                            <p align="justify"><font size="2">Logradouro:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="logradouro" name="logradouro"></font></p>
                        </td>
					<tr>
					</tr>
                        <td>
                            <p align="justify"><font size="2">Bairro:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="bairro" name="bairro"></font></p>
                        </td>

                        <td>
                            <p align="justify"><font size="2">CEP:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="cep" name="cep"></font></p>
                        </td>
					<tr>
					</tr>
                        <td>
                            <p align="justify"><font size="2">Estado:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                        <p align="justify"><font size="2"><select tabindex="14"  onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');"
						id="ufDestino" onChange="consultaCidades('cidadeDestino', 'ufDestino')" >
                                                <option value="">Escolha seu estado</option>
                                                <option value="PE">PE</option>
                                                <option value="AC">AC</option>
                                                <option value="AL">AL</option>
                                                <option value="AM">AM</option>
                                                <option value="AP">AP</option>
                                                <option value="BA">BA</option>
                                                <option value="CE">CE</option>
                                                <option value="DF">DF</option>
                                                <option value="ES">ES</option>
                                                <option value="GO">GO</option>
                                                <option value="MA">MA</option>
                                                <option value="MG">MG</option>
                                                <option value="MS">MS</option>
                                                <option value="MT">MT</option>
                                                <option value="PA">PA</option>
                                                <option value="PB">PB</option>
                                                <option value="PI">PI</option>
                                                <option value="PR">PR</option>
                                                <option value="RJ">RJ</option>
                                                <option value="RN">RN</option>
                                                <option value="RO">RO</option>
                                                <option value="RR">RR</option>
                                                <option value="RS">RS</option>
                                                <option value="SC">SC</option>
                                                <option value="SE">SE</option>
                                                <option value="SP">SP</option>
                                                <option value="TO">TO</option>
                                            </select></font></p>
                        </td>

                        <td>
                            <p align="justify"><font size="2">Cidade:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                        <p align="justify"><font size="2"><select onfocus="focus_Blur(this, '#E0FFFF');" tabindex="7" onblur="focus_Blur(this, 'white');"
						id="cidadeDestino" name="cidadeDestino"  onChange="juntaCidadeUf()">
                            <option size="35" value="">Escolha sua cidade</option></font></p>
                        </select>
                        </td>
					<tr>
					</tr>
                        <td>
                            <p align="justify"><font size="2">Login:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="login" name="login"></font></p>
                        </td>

                        <td>
                            <p align="justify"><font size="2">Senha:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
                            <p align="justify"><font size="2"><input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="senha" name="senha"></font></p>
                        </td>
					<tr>
					</tr>
                        <td>
                            <p align="justify"><font size="2">Perfil Usuário:</font></p>
                        </td>
						<td>
							&nbsp;
						</td>
                        <td>
						<p align="justify"><font size="2"><font size="2">
                            <select  id="idPerfil" name="idPerfil">
                                    <option value="0">Escolha seu Perfil</option>
                                    <option value="1">Cliente</option>
                                    <option value="2">Observador</option>
                                    <option value="3">Atendente</option>
                                    <option value="4">Motorista</option>
                                </select>
								</font></p>
                        </td>
                    </tr>
                </table>

				</br>

				</br>

				<input type="image" src='../img/incluirBtn.png' id="btnIncluir" onClick="">
				<a href="#dialog" name="cliente" id="alterar" >
				<input type="image" src='../img/alterarBtn.png' id="btnAlterar">
				</a>
				&nbsp;
				<input type="image" src='../img/sairBtn.png' onClick="">
			</center>
		</div>
		
				<!--  CAIXA FINAL ESCURER CONFIRMAR-->
			<div id="boxes"> 
				<div id="dialog" class="window"> 
					<table align="center">
						<tr>
							<td id="acaoCliente" colspan="2">
								
							</td>
						</tr>												
						<tr>
							<td  colspan="2">
								&nbsp;								
							</td>
						</tr>												
						<tr id="botoesFinais">
							
						</tr>
					</table>					
				</div> 
				<div id="mask"></div> 
			</div> 
			<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>			
	<!-- FIM DAS CAIXAS -->
	</body>
</html>

