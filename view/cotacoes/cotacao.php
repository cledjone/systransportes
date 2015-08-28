<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SysTransporte</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/business-casual.css" rel="stylesheet">    
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
                        <a href="#">Usuarios</a>
                    </li>
					<li>
                        <a href="#">Cotações</a>
                    </li>
					<li>
                        <a href="#">Veiculos</a><!--Ajeitar-->
                    </li>					
                    <li>
                        <a href="#">CTEs</a>
                    </li>               
                    <li>
                        <a href="#">Manifestos</a>
                    </li>
					 <li>
                        <a href="#">Faturamentos</a><!--Ajeitar-->
                    </li>										
                </ul>
            </div>
    </nav>		
	<div class="container">
        <div class="row">
            <div class="box">                    
					<div class="col-lg-12">
						<hr>
						  <h2 class="intro-text text-center">Cotação</h2>
						</hr>
					</div>			
					<table>
						<tr>
							<td>				
								<table style="border: 1px solid;" width="100%">				
									<tr>
										<td colspan="20" style="border: 1px solid;"> 
											<center><font color="red" size="4">CIDADE ORIGEM:</font></center>
										</td> 															
									</tr>
									<tr>
										<td>Cidade</td>
										<td>UF</td>			
									</tr>								
									<tr>							
										<td>							
											<select onfocus="focus_Blur(this, 'yellow');" tabindex="7" onblur="focus_Blur(this, 'white');" id="cidOrigem" name="cidOrigem"  onChange="juntaCidadeUf()">
												<option size="35" value="">ESCOLHA O ESTADO ORIGEM</option>									
											</select>																	
										</td>						
										<td >					
											<select tabindex="14" onfocus="focus_Blur(this, 'yellow');" onblur="focus_Blur(this, 'white');" id="ufCliente">  
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
												</select>
										</td>  											
									</tr>
								</table>
							</td>
							<td>
								<table style="border: 1px solid;" width="100%">
									<tr>
										<td colspan="20" style="border: 1px solid;"> 
											<center><font color="red" size="4">CIDADE DESTINO:</font></center>
										</td> 															
									</tr>
									<tr>			
										<td>Cidade</td>
										<td>UF</td>						
									</tr>						
									<tr>	
										<td>								
											<select onfocus="focus_Blur(this, 'yellow');" tabindex="7" onblur="focus_Blur(this, 'white');" id="cidOrigem" name="cidDestino"  onChange="juntaCidadeUf()">
												<option size="35" value="">ESCOLHA O ESTADO DESTINO</option>									
											</select>					
										</td>					
										<td>																					
											<select tabindex="14" onfocus="focus_Blur(this, 'yellow');" onblur="focus_Blur(this, 'white');" id="ufCliente" tabindex="0">  
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
												</select>
										</td>  														
									</tr>
								</table>			  
							</td>	
							<td>
								<table style="border: 1px solid;" width="100%">
									<tr>
										<td colspan="20" style="border: 1px solid;"> 
											<center><font color="red" size="4">TOTAIS DA CARGA:</font></center>
										</td> 															
									</tr>
									<tr>			
										<td>Altura</td>
										<td>Largura</td>
										<td>Peso</td>
										<td>Comprimento</td>
										<td>QtdCaixas</td>						
										<td>Valor</td>						
									</tr>						
									<tr>	
										<td>								
											<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" id="tempConsulta" value="">
										</td>					
										<td >													
											<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" id="tempConsulta" value="">
										</td>  														
										<td>								
											<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" id="tempConsulta" value="">
										</td>					
										<td >													
											<input type="text" size="10" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" id="tempConsulta" value="">
										</td>  								
										<td>								
											<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" id="tempConsulta" value="">
										</td>															
										<td>								
											<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" id="tempConsulta" value="">
										</td>								
									</tr>
								</table>			  
							</td>	
						</tr>
					</table>
					
				</div>
			</div>
		</div>
	<div class="container">
        <div class="row">
            <div class="box">         
				<center>
					<div class="col-lg-12">						
						<h2 class="intro-text text-center">Estimativa</h2>						
					</div>			
					<table>
						<tr>								
							<td>
								<table style="border: 1px solid;" width="100%">
									<tr>
										<td colspan="20" style="border: 1px solid;"> 
											<center><font color="red" size="4">VALORES ESTIMADOS:</font></center>
										</td> 															
									</tr>
									<tr>			
										<td>FRETE</td>
										<td>PRAZO</td>										
									</tr>						
									<tr>	
										<td>								
											<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" id="tempConsulta" value="">
										</td>					
										<td >													
											<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" id="tempConsulta" value="">
										</td>  																								
									</tr>
								</table>			  
							</td>	
						</tr>
					</table>
					</center>
				</div>
			</div>
		</div>
</body>
</html>


