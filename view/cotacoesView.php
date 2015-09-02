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
	  <!-- Parâmetro sensor é utilizado somente em dispositivos com GPS -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script> 
</head>
<body>
	<input name="pesquisaOrigem" type="hidden" id="txtOrigem" class="field" value="S&atilde;o Paulo" />
	<input name="pesquisaDestino" type="hidden" id="txtDestino" class="field" value="Rio de Janeiro" />
	<!--  CAIXA DADOS COTACAO-->
			<div id="dialogCotacao-form" title="CADASTRO DE COTAÇÕES">			  								
					<center>					  
					<table>
						<tr>
							<td>
							  <table style="border: 1px solid;">
									<tr>
										<td colspan="2" style="border: 1px solid;">
											<b><font size="3" color="red">ORIGEM</font></b>
										</td>																	
									</tr>																				
									<tr>								
										<td>UF</td>			
										<td>Cidade</td>																		
									</tr>								
									<tr>								
										<td>					
											<select tabindex="14" onfocus="focus_Blur(this, 'yellow');" onblur="focus_Blur(this, 'white');" id="ufOrigem" onChange="consultaCidades('cidadeOrigem', 'ufOrigem')">  
												<option value="">??</option>			
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
										<td>							
											<select onfocus="focus_Blur(this, 'yellow');" tabindex="7" onblur="focus_Blur(this, 'white');" id="cidadeOrigem" name="cidadeOrigem"  onChange="juntaCidadeUf()">
												<option size="35" value="">ESCOLHA O ESTADO ORIGEM</option>									
											</select>																	
										</td>																	
									</tr>						
								</table>
							</td>
							<td>
								&nbsp;&nbsp;&nbsp;
							</td>
							<td>
							  <table style="border: 1px solid;">
									<tr>
										<td colspan="2"  style="border: 1px solid;">
											<b><font size="3" color="red">DESTINO</font></b>
										</td>																	
									</tr>																				
									<tr>								
										<td>UF</td>			
										<td>Cidade</td>																		
									</tr>								
									<tr>								
										<td>					
											<select tabindex="14" onfocus="focus_Blur(this, 'yellow');" onblur="focus_Blur(this, 'white');" id="ufDestino" onChange="consultaCidades('cidadeDestino', 'ufDestino')" >  
												<option value="">??</option>			
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
										<td>							
											<select onfocus="focus_Blur(this, 'yellow');" tabindex="7" onblur="focus_Blur(this, 'white');" id="cidadeDestino" name="cidadeDestino"  onChange="juntaCidadeUf()">
												<option size="35" value="">ESCOLHA O ESTADO DESTINO</option>									
											</select>																	
										</td>																	
									</tr>						
								</table>
							</td>
						</tr>
					</table>
					</br>
					<table style="border: 1px solid;">
						<tr>
							<td colspan="20" style="border: 1px solid;"> 
								<center><font color="red" size="4">DADOS DA CARGA:</font></center>
							</td> 															
							</tr>
							<tr style="border: 1px solid;">			
								<td width="80">Altura</td>
								<td width="80">Largura</td>
								<td width="80">Peso</td>
								<td width="80">Comprimento</td>
								<td width="80">QtdCaixas</td>						
								<td width="80">Valor</td>						
							</tr>						
							<tr style="border: 1px solid;">	
								<td>								
									<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value="" id="altura" name="altura"  onKeyPress="return(MascaraMoeda(this,'.',',',event))">
								</td>					
								<td >													
									<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value=""  id="largura" name="largura"  onKeyPress="return(MascaraMoeda(this,'.',',',event))">
								</td>  														
								<td>								
									<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value="" id="peso" name="peso"  onKeyPress="return(MascaraMoeda(this,'.',',',event))">
								</td>					
								<td >													
									<input type="text" size="10" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value="" id="comprimento" name="comprimento"  onKeyPress="return(MascaraMoeda(this,'.',',',event))">
								</td>  								
								<td>								
									<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value=""  id="qtdCaixas" name="qtdCaixas" onKeyPress="return(mascaraInteiro())">
								</td>															
								<td style="border-right: 1px solid;">									
									<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"  value=""  id="valor" name="valor"  onKeyPress="return(MascaraMoeda(this,'.',',',event))"  onBlur="CalculaDistancia()">
								</td>								
							</tr>
					</table>	
					</br>
					<center>
					<table style="border: 1px solid;">
						<tr>
							<td colspan="20" style="border: 1px solid;"> 
								<center><font color="red" size="4">TOTAL:</font></center>
							</td> 															
							</tr>
							<tr style="border: 1px solid;" height="20">			
								<td width="80">DISTANCIA </td>
								<td width="80">FRETE<sup><font color="red"><b>*</b></font></sup> </td>
								<td width="80" style="border-right: 1px solid;">PRAZO</td>								
							</tr>						
							<tr style="border: 1px solid;">	
								<td>								
									<input name="distancia" readonly="readonly" type="text" id="txtDistancia" value="" /> 	  
								</td>					
								<td>								
									<input type="text" size="7" tabindex="1" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" id="valorFrete" value="">
								</td>					
								<td style="border-right: 1px solid;">													
									<input name="tempo" readonly="readonly" type="text" id="txtTempo" value="" />	 
								</td>  																						
							</tr>
					</table>
					</center>						
					
      <label for="txtDistancia"><strong>Dist&acirc;ncia</strong></label>
      
      <label for="txtTempo"><strong>Tempo</strong></label>
      
      


<div style="padding: 10px 0 0; clear: both">
      <iframe width="550" scrolling="no" height="220" frameborder="0" id="map" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=S&atilde;o Paulo&daddr=Rio de Janeiro&output=embed"></iframe>
    </div>			
					  
					  </br>					  
					   <input type="image" src='../img/incluirBtn.png' id="btnIncluir" onClick="consultaAJAX()">
					   <a href="#dialog" name="cliente" id="alterar" ><input type="image" src='../img/alterarBtn.png' id="btnAlterar"></a>
					   &nbsp;
					   &nbsp;					   
					   <input type="image" src='../img/sairBtn.png' onClick="fecharTela();">
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
	
	<div class="brand">SysTransportes</div>
    <div class="address-bar">Transporte suas mercadorias com rapidez e segurança!!</div>
	
	<div class="container">        
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
	</div>
	<div class="container">        
		<div class="box">         
			<center>
				<div class="col-lg-12">						
					<b><font color="red" size="4">CADASTRO DE COTAÇÕES</font></b>						
				</div>			
				<table>
					<tr>								
						<td>
							<table border="1" width="100%">
								<tr>
									<td width="220">
										<center><font color="green">CIDADE ORIGEM:</font></center>
									</td> 															
									<td width="220">
										<center><font color="green" >CIDADE DESTINO:</font></center>										
									</td> 										
									<td width="120">
										<center><font color="green" >VALOR:</font></center>										
									</td> 										
									<td width="120">
										<center><font color="green" >PESO:</font></center>										
									</td> 										
									<td width="150">
										<center><font color="green" >COMPRIMENTO:</font></center>										
									</td>																
									<td width="120">
										<center><font color="green" >FRETE:</font></center>										
									</td> 										
									<td width="80">
										<center><font color="green" >PRAZO:</font></center>										
									</td> 										
									<td width="120">
										<center><font color="green" >STATUS:</font></center>										
									</td> 																		
								</tr>																
								<tr class="itensCotacao" onClick="exibeCotacao();">
									<td>
												RECIFE - PE
									</td> 															
									<td >
												RIO DE JANEIRO - RJ
									</td> 										
									<td >
												1.000,00
									</td> 										
									<td >
												11.000,00
									</td> 										
									<td >
												0,00
									</td>																
									<td >
												2.000,00
									</td> 										
									<td >
												8 DIAS
									</td> 										
									<td >
												APROVADO
									</td> 																		
								</tr>								
								<tr class="itensCotacao" onClick="exibeCotacao();">
									<td>
												RECIFE - PE
									</td> 															
									<td >
												RIO DE JANEIRO - RJ
									</td> 										
									<td >
												1.000,00
									</td> 										
									<td >
												11.000,00
									</td> 										
									<td >
												0,00
									</td>																
									<td >
												2.000,00
									</td> 										
									<td >
												8 DIAS
									</td> 										
									<td >
												APROVADO
									</td> 		
								</tr>			
								<tr class="itensCotacao" onClick="exibeCotacao();">
									<td>
												RECIFE - PE
									</td> 															
									<td >
												RIO DE JANEIRO - RJ
									</td> 										
									<td >
												1.000,00
									</td> 										
									<td >
												11.000,00
									</td> 										
									<td >
												0,00
									</td>																
									<td >
												2.000,00
									</td> 										
									<td >
												8 DIAS
									</td> 										
									<td >
												APROVADO
									</td> 																		
								</tr>																
								<tr class="itensCotacao" onClick="exibeCotacao();">
									<td>
												RECIFE - PE
									</td> 															
									<td >
												RIO DE JANEIRO - RJ
									</td> 										
									<td >
												1.000,00
									</td> 										
									<td >
												11.000,00
									</td> 										
									<td >
												0,00
									</td>																
									<td >
												2.000,00
									</td> 										
									<td >
												8 DIAS
									</td> 										
									<td >
												APROVADO
									</td> 																		
								</tr>								
								<tr class="itensCotacao" onClick="exibeCotacao();">
									<td>
												RECIFE - PE
									</td> 															
									<td >
												RIO DE JANEIRO - RJ
									</td> 										
									<td >
												1.000,00
									</td> 										
									<td >
												11.000,00
									</td> 										
									<td >
												0,00
									</td>																
									<td >
												2.000,00
									</td> 										
									<td >
												8 DIAS
									</td> 										
									<td >
												APROVADO
									</td> 																		
								</tr>								
								<tr class="itensCotacao" onClick="exibeCotacao();">
									<td>
												RECIFE - PE
									</td> 															
									<td >
												RIO DE JANEIRO - RJ
									</td> 										
									<td >
												1.000,00
									</td> 										
									<td >
												11.000,00
									</td> 										
									<td >
												0,00
									</td>																
									<td >
												2.000,00
									</td> 										
									<td >
												8 DIAS
									</td> 										
									<td >
												APROVADO
									</td> 																		
								</tr>								
								<tr class="itensCotacao" onClick="exibeCotacao();">
									<td>
												RECIFE - PE
									</td> 															
									<td >
												RIO DE JANEIRO - RJ
									</td> 										
									<td >
												1.000,00
									</td> 										
									<td >
												11.000,00
									</td> 										
									<td >
												0,00
									</td>																
									<td >
												2.000,00
									</td> 										
									<td >
												8 DIAS
									</td> 										
									<td >
												APROVADO
									</td> 																		
								</tr>								
								<tr class="itensCotacao" onClick="exibeCotacao();">
									<td>
												RECIFE - PE
									</td> 															
									<td >
												RIO DE JANEIRO - RJ
									</td> 										
									<td >
												1.000,00
									</td> 										
									<td >
												11.000,00
									</td> 										
									<td >
												0,00
									</td>																
									<td >
												2.000,00
									</td> 										
									<td >
												8 DIAS
									</td> 										
									<td >
												APROVADO
									</td> 																		
								</tr>								
								<tr class="itensCotacao" onClick="exibeCotacao();">
									<td>
												RECIFE - PE
									</td> 															
									<td >
												RIO DE JANEIRO - RJ
									</td> 										
									<td >
												1.000,00
									</td> 										
									<td >
												11.000,00
									</td> 										
									<td >
												0,00
									</td>																
									<td >
												2.000,00
									</td> 										
									<td >
												8 DIAS
									</td> 										
									<td >
												APROVADO
									</td> 																		
								</tr>								
								<tr class="itensCotacao" onClick="exibeCotacao();">
									<td>
												RECIFE - PE
									</td> 															
									<td >
												RIO DE JANEIRO - RJ
									</td> 										
									<td >
												1.000,00
									</td> 										
									<td >
												11.000,00
									</td> 										
									<td >
												0,00
									</td>																
									<td >
												2.000,00
									</td> 										
									<td >
												8 DIAS
									</td> 										
									<td >
												APROVADO
									</td> 																		
								</tr>								
								
							</table>			  
						</td>	
					</tr>
				</table>
			</center>
		</div>
	</div>		
</html>


