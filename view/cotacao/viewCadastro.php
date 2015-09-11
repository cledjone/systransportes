<?php	
	extract ($_REQUEST);
?>
<html lang="en">    
    <head>
        <meta charset="utf-8">        
        <title>SysTransportes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">    
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script> 		
		<link href="../../css/style.css" rel="stylesheet" type="text/css" charset="utf-8" />
		<script type="text/javascript" src="../../js/jquery.js"> </script>		
		<script type="text/javascript" src="../../js/scriptsCotacoes.js"> </script>		
		<script type="text/javascript" src="../../js/scriptsCidades.js"> </script>		
		<script type="text/javascript" src="../../js/validacoes.js"> </script>		
    </head>    
    <body onload="consultaCotacao('<?php echo($idCotacao); ?>')">
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
			<nav class="navbar">
				<div class="container">                        
					<div class="container">        
						<div class="box">         						
							<center>
							<br><br>    
								 <h1>
											Cadastro de Cotações
                                 </h1>
							<br>
							<table>
								<tr>
									<td>
									  <table style="border: 1px solid;">
											<tr>
												<td colspan="2" style="border: 1px solid;">
													<b><font size="3" >ORIGEM</font></b>
												</td>																	
											</tr>																				
											<tr>								
												<td>UF</td>			
												<td>Cidade</td>																		
											</tr>								
											<tr>								
												<td>					
													<select tabindex="1" onfocus="focus_Blur(this, 'yellow');" onblur="focus_Blur(this, 'white');" id="ufOrigem" onChange="consultaCidades('cidadeOrigem', 'ufOrigem','0','Escolha a Cidade!')">  
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
													<select onfocus="focus_Blur(this, 'yellow');" tabindex="2" onblur="focus_Blur(this, 'white');" id="cidadeOrigem" name="cidadeOrigem"  onChange="juntaCidadeUf(); CalculaDistancia();">
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
													<b><font size="3">DESTINO</font></b>
												</td>																	
											</tr>																				
											<tr>								
												<td>UF</td>			
												<td>Cidade</td>																		
											</tr>								
											<tr>								
												<td>					
													<select tabindex="3" onfocus="focus_Blur(this, 'yellow');" onblur="focus_Blur(this, 'white');" id="ufDestino" onChange="consultaCidades('cidadeDestino', 'ufDestino', '0','Escolha a Cidade!')" >  
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
													<select onfocus="focus_Blur(this, 'yellow');" tabindex="4" onblur="focus_Blur(this, 'white');" id="cidadeDestino" name="cidadeDestino"  onChange="juntaCidadeUf(); CalculaDistancia();">
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
										<center><font size="4"><b>MERCADORIAS A SEREM TRANSPORTADAS:</b></font></center>
									</td> 															
									</tr>
									<tr style="border: 1px solid;">			
										<td width="530"><center>Descrição<center></td>
										<td width="110" colspan="2">Peso/Kgs</td>																
									</tr>						
									<tr style="border: 1px solid;">	
										<td>								
											<input type="text" size="60" tabindex="5" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value="" id="descricaoMercadoria">
										</td>					
										<td>													
											<input type="text" size="7" tabindex="6" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value=""  id="largura" name="largura"  onKeyPress="return(MascaraMoeda(this,'.',',',event))">
										</td>  							
										<td style="border-right: 1px solid;" width="35">	
											<center><input type="image" src='../../img/salvar.gif'  onClick="incluirMercadoria();"></center>
										</td>
									</tr>
							</table>	
							</br>	
							<table id="itensMercadoria">
							</table>
							</br>
							<table style="border: 1px solid;">
								<tr>
									<td colspan="20" style="border: 1px solid;"> 
										<center><font size="4"><b>DADOS DA CARGA:</b></font></center>
									</td> 															
									</tr>
									<tr style="border: 1px solid;">			
										<td width="105">Altura/Mts</td>
										<td width="105">Largura/Mts</td>
										<td width="100">Peso/Kgs</td>
										<td width="130">Comprim/Mts</td>
										<td width="110">QtdVolumes</td>						
										<td width="110">Valor/R$</td>						
									</tr>						
									<tr style="border: 1px solid;">	
										<td>								
											<input type="text" size="7" tabindex="7" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value="" id="altura" name="altura"  onKeyPress="return(MascaraMoeda(this,'.',',',event))">
										</td>					
										<td >													
											<input type="text" size="7" tabindex="8" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value=""  id="largura" name="largura"  onKeyPress="return(MascaraMoeda(this,'.',',',event))">
										</td>  														
										<td>								
											<input type="text" size="7" tabindex="9" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white'); CalculaDistancia();" value="" id="peso" name="peso"  onKeyPress="return(MascaraMoeda(this,'.',',',event))">
										</td>					
										<td >													
											<input type="text" size="7" tabindex="10" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value="" id="comprimento" name="comprimento"  onKeyPress="return(MascaraMoeda(this,'.',',',event))">
										</td>  								
										<td>								
											<input type="text" size="7" tabindex="11" type="text" onfocus="focus_Blur(this, 'yellow');"onblur="focus_Blur(this, 'white');" value=""  id="qtdCaixas" name="qtdCaixas" onKeyPress="return(mascaraInteiro())">
										</td>															
										<td style="border-right: 1px solid;">									
											<input type="text" size="7" tabindex="12" type="text" onfocus="focus_Blur(this, 'yellow');"  value=""  id="valor" name="valor"  onKeyPress="return(MascaraMoeda(this,'.',',',event))"  onBlur="focus_Blur(this, 'white'); CalculaDistancia();">
										</td>								
									</tr>
							</table>	
							</br>
							<table style="border: 1px solid;">
								<tr>
									<td colspan="20" style="border: 1px solid;"> 
										<center><font size="4"><b>OBSERVAÇÕES:</b></font></center>
									</td> 															
								</tr>
								<tr>			
									<td>
										<textarea name="descricao"  id="descricao" cols="80" rows="5"  tabindex="13" title="Informações sobre o Transporte"></textarea>		
									</td>														
								</tr>	
							</table>
							</br>
							<table style="border: 1px solid;"  id="totalGeral">
								<tr>
									<td colspan="20" style="border: 1px solid;"> 
										<center><font size="4"><b>TOTAL ESTIMADO:</b></font></center>
									</td> 															
									</tr>
									<tr style="border: 1px solid;" height="20">			
										<td width="120" ><center>DISTANCIA</center> </td>
										<td width="130"><center>FRETE</center></td>
										<td  width="120"style="border-right: 1px solid;"><center>PRAZO</center></td>
										<td  width="150" colspan="2" style="border-right: 1px solid;"><center>STATUS</center></td>								
									</tr>						
									<tr style="border: 1px solid;">	
										<td>								
											<input name="distancia" size="8" readonly type="text" id="txtDistancia" value="" /> 	  
										</td>															
										<td>								
											<input type="text" size="11" readonly tabindex="1" type="text" id="valorFrete" value="">
										</td>										
										<td >													
											<center><input name="tempo" readonly size="8" type="text" id="txtTempo" value=""  style="border-right: 1px solid;"/></center>	 
										</td>  																					
										<td>													
											<input readonly size="1" type="text" id="idStatus" value="1" />
										</td>													
										<td>													
											<input readonly size="25" type="text" id="status" value="EM DIGITAÇÃO"  style="border-right: 1px solid;"/>	 
										</td>  													
									</tr>
							</table>	     
							<div><span id="litResultado">&nbsp;</span></div>    						
							 <div  id="mapaGoogle"  style="padding: 10px 0 0; clear: both">
								 <iframe width="650" scrolling="no" height="300" frameborder="0" id="map" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=S&atilde;o Paulo&daddr=Rio de Janeiro&output=embed"></iframe>
							</div>
							
							<input type="hidden" id="idCotacao" value="<?php echo($idCotacao);?>">						 	
							<input name="resultadoOrigem" type="hidden" id="txtOrigemResultado" class="field"  value="" />
							<input name="resultadoDestino" type="hidden" id="txtDestinoResultado" class="field" value="" />
							<input name="pesquisaOrigem" type="hidden" id="txtOrigem" class="field" value="S&atilde;o Paulo" />
							<input name="pesquisaDestino" type="hidden" id="txtDestino" class="field" value="Rio de Janeiro" />
							<input type="image" src='../../img/<?php echo($acao);?>Btn.png' onClick="crudCotacao('<?php echo($acao);?>')">
							<input type="image" src='../../img/sairBtn.png' id="btnSair" onClick="irPara('viewConsulta.php','consultar')">
							</br>							
							</center>
						</div>
					</div>
                </div>
            </nav>
        </div>
    </body>
</html>            
                    
                