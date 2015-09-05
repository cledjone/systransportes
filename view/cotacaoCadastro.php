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

        
    <script type="text/javascript" src="../js/jquery.js"></script>  
    <script type="text/javascript" src="../js/jquery-ui.js"></script>   
    <script type="text/javascript" src="../js/scriptsCotacoes.js"></script> 
    <script type="text/javascript" src="../js/scriptsCidades.js"></script>  


 <style type="text/css">
            body{ background-image: url("http://noticias.prestumseguros.com.br/wp-content/uploads/2013/12/seguro-caminhao.jpg");
            } 
            .transparent-style{ background-color: #000000; opacity: .9; }
            .navbar,
            .dropdown-menu{ background:rgba(255,255,255,0.75); border-bottom: 3px solid transparent; } 
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
            <div class="container-fluid">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <div id="topo-esquerda">

                                    <br><br>
                                    <b>Altura:</b>
                                    <br>
                                    <input type="text" size="50" class="form-control" placeholder="Digíte uma altura" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                    onblur="focus_Blur(this, 'white');" value="" id="altura" name="altura">
                                    <br>
                                    <b>Largura:</b>
                                    <br>
                                    <input type="text" size="50" class="form-control" placeholder="Digíte uma largura" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                    onblur="focus_Blur(this, 'white');" value="" id="largura" name="largura">
                                    <br>
                                    <b>Peso:</b>
                                    <br>
                                    <input type="text" size="50" class="form-control" placeholder="Digíte um peso" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                    onblur="focus_Blur(this, 'white');" value="" id="peso" name="peso">
                                    <br>
                                    <b>Comprimento:</b>
                                    <br>
                                    <input type="text" size="50" class="form-control" placeholder="Digíte um comprimento" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                    onblur="focus_Blur(this, 'white');" value="" id="comprimento" name="comprimento">
                                    <br>
                                    <b>Qtd. Caixa(as):</b>
                                    <br>
                                    <input type="text" size="50" class="form-control" placeholder="Digíte Qtd. Caixa(as)" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                    onblur="focus_Blur(this, 'white');" value="" id="qtdCaixas" name="qtdCaixas">
                                    <br>
                                </div>
                                <div id="topo-direita">
                                    <b>Valor:</b>
                                    <br>
                                    <input type="text" size="50" class="form-control" placeholder="Digíte o valor total" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                    onblur="focus_Blur(this, 'white');" value="" id="valor" name="valor">
                                    <br>
                                    <b>Prazo:</b>
                                    <br>
                                    <input type="text" size="50" class="form-control" placeholder="Prazo" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                    onblur="focus_Blur(this, 'white');" value="" id="tempConsulta" name="tempConsulta">
                                    <br>
                                    <b>Frete:</b>
                                    <br>
                                    <input type="text" size="50" class="form-control" placeholder="Frete" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                    onblur="focus_Blur(this, 'white');" value="" id="tempConsulta" name="tempConsulta">
                                    <br><br><br>
                                    <b>Estado Origem:</b>
                                    </tr>                               
                                    <tr>                                
                                        <td>                    
                                            <select tabindex="14" class="form-control" onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');" id="ufOrigem" onChange="consultaCidades('cidadeOrigem', 'ufOrigem')">  
                                                <option value="">Escolha seu estado de Origem</option>            
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
                                        <br>                               
                                        <td> 
                                        </b><b>Cidade Origem:</b>
                                        <br>                           
                                            <select onfocus="focus_Blur(this, '#E0FFFF');" class="form-control" tabindex="7" onblur="focus_Blur(this, 'white');" id="cidadeOrigem" name="cidadeOrigem"  onChange="juntaCidadeUf()">
                                                <option size="35" value="">Escolha sua cidade de Origem</option>                                    
                                            </select>
                                            <br>                                                                 
                                        </td>     

                                        
                                    <b>Estado Destino:</b>
                                    </tr>                               
                                    <tr>                                
                                        <td>                    
                                            <select tabindex="14" class="form-control" onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');" id="ufDestino" onChange="consultaCidades('cidadeDestino', 'ufDestino')" >  
                                                <option value="">Escolha seu estado de Destino</option>            
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
                                        <br>                               
                                        <td> 
                                        </b><b>Cidade Destino:</b>
                                        <br>                           
                                            <select onfocus="focus_Blur(this, '#E0FFFF');" class="form-control" tabindex="7" onblur="focus_Blur(this, 'white');" id="cidadeDestino" name="cidadeDestino"  onChange="juntaCidadeUf()">
                                                <option size="35" value="">Escolha sua cidade de Destino</option>                                    
                                            </select>
                                            <br>  
                                            <input type="submit" id="btnIncluir" onClick="consultaAJAX()">                                                                 
                                        </td>                                                                                 
                                    </tr>
                                </div>
                                <br><br><br>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </body>

</html>