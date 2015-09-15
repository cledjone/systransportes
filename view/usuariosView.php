<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
            SysTransporte
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/business-casual.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
        rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../js/jquery.js">
                        
        </script>
        <script type="text/javascript" src="../js/jquery-ui.js">
                        
        </script>
        <script type="text/javascript" src="../js/scriptsUsuarios.js">
                        
        </script>
        <script type="text/javascript" src="../js/scriptsCidades.js">
                        
        </script>

        <script language="JavaScript" type="text/javascript" src="../js/cidades-estados.js"></script>
    </head>
    
    <body>
        <!-- CAIXA DADOS USUÁRIOS-->
        <div id="dialogUsuario-form" title="CADASTRO DE USUÁRIOS">



<form class="form-horizontal">
<table style="width: 100%">
                    <tr>
                        <td>
                            Nome:&nbsp;
                        </td>
                        <td>
                            <input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="nome" name="nome">
                        </td>
                        <td>
                            Razão Social:
                        </td>
                        <td>
                            <input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="razaoSocial" name="razaoSocial">
                        </td>
                        <td>
                            Nome Fantasia:
                        </td>
                        <td>
                            <input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="fantasia" name="fantasia">
                        </td>
                    </tr>
</table>
<table width="100%">
                    <tr>

                        <td>
                            CPF/CNPJ:&nbsp;
                        </td>
                        <td>
                            <input type="text" size="35" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="cpfcnpj" name="cpfcnpj">
                        </td>
                        <td>
                            E-mail:
                        </td>
                        <td>
                            <input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="email" name="email">
                        </td>
                        <td>
                            Telefone 1:
                        </td>
                        <td>
                            <input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="telefone1" name="telefone1">
                        </td>
                    </tr>
</table>
<table width="100%">
                    <tr>
                        <td>
                            Telefone 2:
                        </td>
                        <td>
                            <input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="telefone2" name="telefone2">
                        </td>
                        <td>
                            Logradouro:
                        </td>
                        <td>
                            <input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="logradouro" name="logradouro">
                        </td>
                        <td>
                            Bairro:
                        </td>
                        <td>
                            <input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="bairro" name="bairro">
                        </td>
                    </tr>
</table>
<table>
                    <tr>
                        <td>
                            CEP:
                        </td>
                        <td>
                            <input type="text" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="cep" name="cep">
                        </td>

                        <td>
                            Estado:
                        </td>
                        <td>
                        <select tabindex="14"  onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');" id="ufDestino" onChange="consultaCidades('cidadeDestino', 'ufDestino')" >  
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
                                            </select>
                        </td>
                        <td>
                            Cidade:
                        </td>
                        <td>
                        <select onfocus="focus_Blur(this, '#E0FFFF');" tabindex="7" onblur="focus_Blur(this, 'white');" id="cidadeDestino" name="cidadeDestino"  onChange="juntaCidadeUf()">
                            <option size="35" value="">Escolha sua cidade</option>                                    
                        </select>
                        </td>

                    </tr>
</table>
<table>
                    <tr>
                        <td>
                            Login:
                        </td>
                        <td>
                            <input type="text" size="40" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="login" name="login">
                        </td>
                        <td>
                            Senha:
                        </td>
                        <td>
                            <input type="password" size="30" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                            onblur="focus_Blur(this, 'white');" value="" id="senha" name="senha">
                        </td>

                        <td>
                            Perfil Usuário:
                        </td>
                        <td>
                            <select  id="idPerfil" name="idPerfil">
                                    <option value="0">Escolha seu Perfil</option>
                                    <option value="1">Cliente</option>
                                    <option value="2">Observador</option>
                                    <option value="3">Atendente</option>
                                    <option value="4">Motorista</option>
                                </select>
                        </td>
                    </tr>
                </table>
    </form>
      
            <center>
                </br>
                </br>
                <input type="image" src='../img/incluirBtn.png' id="btnIncluir" onClick="consultaAJAX()">
                <a href="#dialog" name="cliente" id="alterar"><input type="image" src='../img/alterarBtn.png' id="btnAlterar"></a>
                &nbsp; &nbsp;
                <input type="image" src='../img/sairBtn.png' onClick="fechaClientes();">
            </center>
        </div>
        
        <!-- CAIXA FINAL ESCURER CONFIRMAR-->
        <div id="boxes">
            <div id="dialog" class="window">
                <table align="center">
                    <tr>
                        <td id="acaoCliente" colspan="2">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            &nbsp;
                        </td>
                    </tr>
                    <tr id="botoesFinais">
                    </tr>
                </table>
            </div>
            <div id="mask">
            </div>
        </div>
        <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;">
        </div>
        <!-- FIM DAS CAIXAS -->
        <div class="brand">
            SysTransportes
        </div>
        <div class="address-bar">
            Transporte suas mercadorias com rapidez e segurança!!
        </div>
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
                            <a href="#">Veiculos</a>
                            <!--Ajeitar-->
                        </li>
                        <li>
                            <a href="#">CTEs</a>
                        </li>
                        <li>
                            <a href="#">Manifestos</a>
                        </li>
                        <li>
                            <a href="#">Faturamentos</a>
                            <!--Ajeitar-->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="box">
                <center>
                    <div class="col-lg-12">
                        <b>
                            <font color="red" size="4">
                                CADASTRO DE COTAÇÕES
                            </font>
                        </b>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <table border="1" width="100%">
                                    <tr>
                                        <td width="220">
                                            <center>
                                                <font color="green">
                                                    CIDADE ORIGEM:
                                                </font>
                                            </center>
                                        </td>
                                        <td width="220">
                                            <center>
                                                <font color="green">
                                                    CIDADE DESTINO:
                                                </font>
                                            </center>
                                        </td>
                                        <td width="120">
                                            <center>
                                                <font color="green">
                                                    VALOR:
                                                </font>
                                            </center>
                                        </td>
                                        <td width="120">
                                            <center>
                                                <font color="green">
                                                    PESO:
                                                </font>
                                            </center>
                                        </td>
                                        <td width="150">
                                            <center>
                                                <font color="green">
                                                    COMPRIMENTO:
                                                </font>
                                            </center>
                                        </td>
                                        <td width="120">
                                            <center>
                                                <font color="green">
                                                    FRETE:
                                                </font>
                                            </center>
                                        </td>
                                        <td width="80">
                                            <center>
                                                <font color="green">
                                                    PRAZO:
                                                </font>
                                            </center>
                                        </td>
                                        <td width="120">
                                            <center>
                                                <font color="green">
                                                    STATUS:
                                                </font>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr class="itens" onClick="exibeUsuario();">
                                        <td>
                                            RECIFE - PE
                                        </td>
                                        <td>
                                            RIO DE JANEIRO - RJ
                                        </td>
                                        <td>
                                            1.000,00
                                        </td>
                                        <td>
                                            11.000,00
                                        </td>
                                        <td>
                                            0,00
                                        </td>
                                        <td>
                                            2.000,00
                                        </td>
                                        <td>
                                            8 DIAS
                                        </td>
                                        <td>
                                            APROVADO
                                        </td>
                                    </tr>
                                    <tr class="itens" onClick="exibeUsuario();">
                                        <td>
                                            RECIFE - PE
                                        </td>
                                        <td>
                                            RIO DE JANEIRO - RJ
                                        </td>
                                        <td>
                                            1.000,00
                                        </td>
                                        <td>
                                            11.000,00
                                        </td>
                                        <td>
                                            0,00
                                        </td>
                                        <td>
                                            2.000,00
                                        </td>
                                        <td>
                                            8 DIAS
                                        </td>
                                        <td>
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
    </body>

</html>