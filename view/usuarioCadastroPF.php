<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>
            SysTransportes
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
        rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js">
         
        </script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">
         
        </script>
        <script type="text/javascript" src="../js/jquery-ui.js">
         
        </script>
        <script type="text/javascript" src="../js/scriptsUsuarios.js">
         
        </script>
        <script type="text/javascript" src="../js/scriptsCidades.js">
         
        </script>
        <style type="text/css">
            body{ background-image: url("http://noticias.prestumseguros.com.br/wp-content/uploads/2013/12/seguro-caminhao.jpg");
            } .transparent-style{ background-color: #000000; opacity: .9; } .navbar,
            .dropdown-menu{ background:rgba(255,255,255,0.75); border-bottom: 3px solid
            transparent; } .nav>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover,
            .dropdown-menu>li>a, .dropdown-menu>li{ border-bottom: 3px solid transparent;
            } .nav>li>a:focus, .nav>li>a:hover,.nav .open>a, .nav .open>a:focus, .nav
            .open>a:hover, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{ border-bottom:
            3px solid transparent; background:rgba(245,255,255,0.10); } .navbar a,
            .dropdown-menu>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
            color: #071B39; } .dropdown-menu{ -webkit-box-shadow: none; box-shadow:none;}
            .nav li:hover:nth-child(8n+1), .nav li.active:nth-child(8n+1){ border-bottom:
            #C4E17F 3px solid; } .nav li:hover:nth-child(8n+2), .nav li.active:nth-child(8n+2){border-bottom:
            #F7FDCA 3px solid; } .nav li:hover:nth-child(8n+3), .nav li .active:nth-child(8n+3){
            border-bottom: #FECF71 3px solid; } .nav li:hover:nth-child(8n+4), .nav
            li.active:nth-child(8n+4){ border-bottom: #F0776C 3px solid; } .nav li:hover:nth-child(8n+5),
            .nav li.active:nth-child(8n+5){ border-bottom: #DB9DBE 3px solid; } .nav
            li:hover:nth-child(8n+6), .nav li.active:nth-child(8n+6){ border-bottom:
            #C49CDE 3px solid; } .nav li:hover:nth-child(8n+7), .nav li.active:nth-child(8n+7){
            border-bottom: #669AE1 3px solid; } .nav li:hover:nth-child(8n+8), .nav
            li.active:nth-child(8n+8){ border-bottom: #62C2E4 3px solid; }
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
                        <ul class="nav navbar-nav">
                            <form>
                                <table>
                                    <!--Dados Pessoais -->
                                    <h2>
                                        Dados Pessoais
                                        </h1>
                                        <tr>
                                            <td>
                                                <b>
                                                    Nome Completo
                                                </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" id="nomeCompleto" name="" size="96" required="required"
                                                class="form-control" placeholder="Nome Completo" tabindex="1" type="text"
                                                onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');">
                                            </td>
                                        </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>
                                            <b>
                                                CPF
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                RG
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Orgão Expedidor
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" id="cpf" name="" size="30" required="required" class="form-control"
                                            placeholder="CPF" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" id="rg" name="" size="30" required="required" class="form-control"
                                            placeholder="RG" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" id="orgaoExpedidor" name="" size="20" required="required"
                                            class="form-control" placeholder="Orgão Expedidor" tabindex="1" type="text"
                                            onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');">
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <!--Endereço -->
                                    <h2>
                                        Endereço
                                    </h2>
                                    <tr>
                                        <td>
                                            <b>
                                                CEP
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Logradouro
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" id="cep" name="" size="30" required="required" class="form-control"
                                            placeholder="CEP" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                            <td>
                                                <input type="text" id="logradouro" name="" size="58" required="required"
                                                class="form-control" placeholder="Logradouro" tabindex="1" type="text"
                                                onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');">
                                            </td>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>
                                            <b>
                                                Número
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Bairro
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Complemento
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" id="numero" name="" size="30" required="required" class="form-control"
                                            placeholder="Número" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" id="bairro" name="" size="20" required="required" class="form-control"
                                            placeholder="Bairro" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" id="complemento" name="" size="30" required="required"
                                            class="form-control" placeholder="Complemento" tabindex="1" type="text"
                                            onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');">
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>
                                            <b>
                                                Estado
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Cidade
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select tabindex="1" required="required" class="form-control" onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');" id="ufDestino" onChange="consultaCidades('cidadeDestino', 'ufDestino')">
                                                <option value="">
                                                    Escolha seu Estado
                                                </option>
                                                <option value="PE">
                                                    PE
                                                </option>
                                                <option value="AC">
                                                    AC
                                                </option>
                                                <option value="AL">
                                                    AL
                                                </option>
                                                <option value="AM">
                                                    AM
                                                </option>
                                                <option value="AP">
                                                    AP
                                                </option>
                                                <option value="BA">
                                                    BA
                                                </option>
                                                <option value="CE">
                                                    CE
                                                </option>
                                                <option value="DF">
                                                    DF
                                                </option>
                                                <option value="ES">
                                                    ES
                                                </option>
                                                <option value="GO">
                                                    GO
                                                </option>
                                                <option value="MA">
                                                    MA
                                                </option>
                                                <option value="MG">
                                                    MG
                                                </option>
                                                <option value="MS">
                                                    MS
                                                </option>
                                                <option value="MT">
                                                    MT
                                                </option>
                                                <option value="PA">
                                                    PA
                                                </option>
                                                <option value="PB">
                                                    PB
                                                </option>
                                                <option value="PI">
                                                    PI
                                                </option>
                                                <option value="PR">
                                                    PR
                                                </option>
                                                <option value="RJ">
                                                    RJ
                                                </option>
                                                <option value="RN">
                                                    RN
                                                </option>
                                                <option value="RO">
                                                    RO
                                                </option>
                                                <option value="RR">
                                                    RR
                                                </option>
                                                <option value="RS">
                                                    RS
                                                </option>
                                                <option value="SC">
                                                    SC
                                                </option>
                                                <option value="SE">
                                                    SE
                                                </option>
                                                <option value="SP">
                                                    SP
                                                </option>
                                                <option value="TO">
                                                    TO
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            <select onfocus="focus_Blur(this, '#E0FFFF');" required="required" class="form-control"
                                            tabindex="7" onblur="focus_Blur(this, 'white');" id="cidadeDestino" name="cidadeDestino"
                                            onChange="juntaCidadeUf()">
                                                <option size="30" value="">
                                                    Escolha sua Cidade
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <!--Contato -->
                                    <h2>
                                        Contato
                                    </h2>
                                    <tr>
                                        <td>
                                            <b>
                                                E-mail
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Telefone Resiencial
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Telefone Celular
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="email" id="email" name="email" size="40" required="required"
                                            class="form-control" placeholder="E-mail" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" id="telefone1" name="telefone1" size="20" required="required"
                                            class="form-control" placeholder="Telefone Residencial" tabindex="1" type="text"
                                            onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" id="telefone2" name="telefone2" size="20" required="required"
                                            class="form-control" placeholder="Telefone Celular" tabindex="1" type="text"
                                            onfocus="focus_Blur(this, '#E0FFFF');" onblur="focus_Blur(this, 'white');">
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <!--Login/Senha -->
                                    <h2>
                                        Login/Senha
                                    </h2>
                                    <select class="form-control" required="required" id="idPerfil" name="idPerfil"
                                    disabled>
                                        <option value="1">
                                            Pessoa Física
                                        </option>
                                    </select>
                                    <tr>
                                        <td>
                                            <b>
                                                Usuário
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Senha
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Confirmar Senha
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" id="login" name="" size="30" required="required" class="form-control"
                                            placeholder="Usuário" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" size="25" required="required" class="form-control"
                                            placeholder="Senha" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" id="senha" name="" size="25" required="required" class="form-control"
                                            placeholder="Confirme  sua senha" tabindex="1" type="text" onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <input type="submit" id="btnIncluir" onClick="consultaAJAXPF()">
                                <br>
                                <br>
                                <br>
                                <br>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </body>

</html>