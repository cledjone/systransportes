<!DOCTYPE html>
<html lang="en">
    
    <head>
        <!--JavaScript de validações de campos-->
        <script type="text/javascript" src="../js/validacaoCampo.js"></script> 
        <!--JavaScript de validações de campos-->

        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>
            SysTransportes
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/paginaTemplate.css">
        
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
                                        Dados Pessoa Fisica
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
                                                <input type="text" 
                                                style="text-transform:uppercase"
                                                onkeyup="validar(this,'text');"
                                                id="nomeCompleto" 
                                                name="" 
                                                size="96" 
                                                required="required"                                                                                
                                                class="form-control" 
                                                placeholder="Nome Completo" 
                                                tabindex="1" 
                                                type="text"
                                                onfocus="focus_Blur(this, '#E0FFFF');" 
                                                onblur="focus_Blur(this, 'white');">    
                                            </td>
                                        </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>
                                            <b>
                                                CPF(Somente numeros)
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
                                            onblur="javascript: validarCPF(this.value);" 
                                            onkeypress="javascript: mascara(this, cpf_mask);"
                                            maxlength="14"
                                            placeholder="CPF" 
                                            tabindex="1" 
                                            type="text" 
                                            onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" 
                                            id="rg" 
                                            name="" 
                                            size="30" 
                                            required="required" 
                                            class="form-control"
                                            onkeypress="javascript: mascara(this, Rg);" 
                                            maxlength="9"
                                            placeholder="RG" 
                                            tabindex="1" type="text" 
                                            onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" 
                                            id="orgaoExpedidor" 
                                            onkeyup="validar(this,'text');"
                                            style="text-transform:uppercase"
                                            name="" size="20" 
                                            maxlength="8"
                                            required="required"
                                            class="form-control" 
                                            placeholder="Orgão Expedidor" 
                                            tabindex="1" 
                                            type="text"
                                            onfocus="focus_Blur(this, '#E0FFFF');" 
                                            onblur="focus_Blur(this, 'white');">
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
                                            <input type="text" 
                                            id="cep" 
                                            name="" 
                                            size="30" w
                                            required="required" 
                                            class="form-control"
                                            onkeypress="mascaraCep(this, '#####-###')" 
                                            onkeyup="validar(this,'num');"
                                            maxlength="9"
                                            placeholder="CEP" 
                                            tabindex="1"
                                            type="text" 
                                            onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                            <td>
                                                <input type="text" 
                                                id="logradouro" 
                                                onkeyup="validar(this,'text');"
                                                name="" 
                                                size="58" 
                                                required="required"
                                                class="form-control" 
                                                placeholder="Logradouro" 
                                                tabindex="1" 
                                                type="text"
                                                style="text-transform:uppercase"
                                                onfocus="focus_Blur(this, '#E0FFFF');" 
                                                onblur="focus_Blur(this, 'white');">
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
                                            <input type="text" 
                                            id="numero" 
                                            name="" 
                                            onkeyup="validar(this,'num');"
                                            size="30" 
                                            maxlength="5"
                                            required="required" 
                                            class="form-control"
                                            placeholder="Número" 
                                            tabindex="1" 
                                            type="text" 
                                            onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" 
                                            id="bairro" 
                                            name="" 
                                            style="text-transform:uppercase"
                                            size="20" 
                                            required="required" 
                                            class="form-control"
                                            onkeyup="validar(this,'text');"
                                            placeholder="Bairro" 
                                            tabindex="1" 
                                            type="text" 
                                            onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text"
                                            id="complemento" 
                                            name="" 
                                            size="30" 
                                            style="text-transform:uppercase"
                                            required="required"
                                            class="form-control"
                                            placeholder="Complemento"
                                            tabindex="1" type="text"
                                            onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
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
                                            <input type="email" 
                                            id="email" 
                                            name="email" 
                                            style="text-transform:uppercase"
                                            size="40" 
                                            required="required"
                                            class="form-control" 
                                            placeholder="E-mail" 
                                            tabindex="1" 
                                            type="email" 
                                            onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="text" 
                                            id="telefone1" 
                                            onkeypress="telefoneMascara(this)"
                                            name="telefone1" 
                                            maxlength="15"
                                            size="20" 
                                            required="required"                                            
                                            onkeypress="mascara(this, '## ####-####')" 
                                            maxlength="12"                                            
                                            class="form-control" 
                                            placeholder="Telefone Residencial" 
                                            tabindex="1" type="text"
                                            onfocus="focus_Blur(this, '#E0FFFF');" 
                                            onblur="focus_Blur(this, 'white');">

                                        </td>
                                        <td>
                                            <input type="text" 
                                            id="telefone2" 
                                            name="telefone2" 
                                            onkeypress="telefoneMascara(this)"
                                            size="20" 
                                            onkeypress="mascara(this, '## #####-####')" 
                                            maxlength="14"
                                            required="required"
                                            class="form-control"                                     
                                            placeholder="Telefone Celular"
                                            tabindex="1" type="text"
                                            onfocus="focus_Blur(this, '#E0FFFF');" 
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <!--Login/Senha -->
                                    <h2>
                                        Login/Senha
                                    </h2>
                                    <select class="form-control" required="required" id="perfil" name="perfil"
                                    disabled>
                                        <option value="Pessoa Física">
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
                                            <input 
                                            type="password" 
                                            size="25" 
                                            required="required" 
                                            class="form-control" 
                                            id="senha"
                                            placeholder="Senha" 
                                            tabindex="1" 
                                            type="text" 
                                            onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">
                                        </td>
                                        <td>
                                            <input type="password" 
                                            id="confirmaSenha" 
                                            name="" 
                                            size="25" 
                                            required="required" 
                                            class="form-control" 
                                            placeholder="Confirme  sua senha" 
                                            tabindex="1" 
                                            type="text" 
                                            onChange="verificacaoSenha()"
                                            onfocus="focus_Blur(this, '#E0FFFF');"
                                            onblur="focus_Blur(this, 'white');">

                                        </td>
                                        
                                    </tr>

                                </table>
                                  
                                  <br>
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