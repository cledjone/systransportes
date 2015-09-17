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
        <link rel="stylesheet" type="text/css" href="../../css/paginaTemplate.css">
        
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.js"> </script>      
        <script type="text/javascript" src="../../js/jquery-ui.js"></script>
        <script type="text/javascript" src="../../js/scriptsUsuarios.js"></script>
        <script type="text/javascript" src="../../js/scriptsCidades.js"></script>
        <script type="text/javascript" src="../../js/validacaoCampo.js"></script> 

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
                                    <a href="../../index.php" class="">Home</a>
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
                                        Dados Pessoa Jurídica
                                        </h1>
                                        <tr>
                                            <td>
                                                <b>
                                                    Razão Social
                                                </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" 
                                                        id="razaoSocial"
                                                        maxlength="40" 
                                                        style="text-transform:uppercase"
                                                        onkeyup="validar(this,'text');"
                                                        name="" 
                                                        size="95" 
                                                        class="form-control" 
                                                        placeholder="Razão Social" 
                                                        tabindex="1" 
                                                        type="text">
                                            </td>
                                        </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>
                                            <b>
                                                Nome Fantasia
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                CNPJ
                                            </b>
                                        </td>
                                        <td>
                                            <b>
                                                Tipo de Empresa
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" 
                                                    id="nomeFantasia" 
                                                    maxlength="40"
                                                    style="text-transform:uppercase"
                                                    onkeyup="validar(this,'text');"
                                                    name="" 
                                                    size="30" 
                                                    class="form-control" 
                                                    placeholder="Nome Fantasia" 
                                                    tabindex="1" 
                                                    type="text">
                                        </td>
                                        <td>
                                            <input type="text" 
                                                    id="cnpj" 
                                                    onkeyup="formataCampo(this, event)"
                                                    maxlength="14"
                                                    name="" 
                                                    size="14"
                                                    class="form-control"
                                                    placeholder="CNPJ" 
                                                    tabindex="1" 
                                                    type="text" >
                                        </td>
                                        <td>
                                            <select class="form-control" id="tipoEmpresa" name="">
                                                <option value="0">
                                                    --- Selecione o tipo ---
                                                </option>
                                                <option value="Empresa Privada">
                                                    Empresa Privada
                                                </option>
                                                <option value="Empresa Publica">
                                                    Empresa Publica
                                                </option>
                                            </select>
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
                                                    onkeypress="mascaraCep(this, '#####-###')" 
                                                    onkeyup="validar(this,'num');" 
                                                    maxlength="9"
                                                    name="" 
                                                    size="30" 
                                                    class="form-control"
                                                    placeholder="CEP" 
                                                    tabindex="1" 
                                                    type="text">
                                            <td>
                                                <input type="text" 
                                                        id="logradouro"
                                                        maxlength="40"
                                                        style="text-transform:uppercase"
                                                        name="" 
                                                        size="58" 
                                                        class="form-control" 
                                                        placeholder="Logradouro" 
                                                        tabindex="1" 
                                                        type="text">
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
                                                    onkeyup="validar(this,'num');"
                                                    maxlength="5"
                                                    name="" 
                                                    size="30" 
                                                    class="form-control"
                                                    placeholder="Número" 
                                                    tabindex="1" type="text">
                                        </td>
                                        <td>
                                            <input type="text" 
                                                    id="bairro" 
                                                    maxlength="40"
                                                    style="text-transform:uppercase"
                                                    name="" 
                                                    size="20" 
                                                    class="form-control"
                                                    placeholder="Bairro" 
                                                    tabindex="1" 
                                                    type="text"
                                                     onkeyup="validar(this,'text');">
                                        </td>
                                        <td>
                                            <input type="text" 
                                                    id="complemento" 
                                                    maxlength="40"
                                                    style="text-transform:uppercase"
                                                    name="" 
                                                    size="30" 
                                                    class="form-control" 
                                                    placeholder="Complemento" 
                                                    tabindex="1" 
                                                    type="text">
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
                                      <select tabindex="3" class="form-control" id="ufDestino" onChange="consultaCidades('cidadeDestino', 'ufDestino', '0','Escolha a Cidade!')" >  
                                                        <option value="">Escolha o seu Estado</option>            
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
                                            <select tabindex="4" class="form-control" id="cidadeDestino" name="cidadeDestino" >
                                                <option size="35" value="">Escolha a sua Cidade</option>                                    
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
                                                    style="text-transform:uppercase"
                                                    name="" 
                                                    maxlength="40"
                                                    size="40" 
                                                    class="form-control"
                                                    placeholder="E-mail" 
                                                    tabindex="1" 
                                                    type="text">
                                        </td>
                                        <td>
                                            <input type="text" 
                                                    id="telefone1" 
                                                    maxlength="14"  
                                                    name="" 
                                                    size="20" 
                                                    class="form-control" 
                                                    placeholder="Telefone Residencial" 
                                                    tabindex="1" 
                                                    type="text"
                                                    onkeypress="telefoneMascara(this)"
                                                    onkeypress="mascara(this, '## ####-####')" 
                                                    onkeyup="validar(this,'num');">
                                        </td>
                                        <td>
                                            <input type="text" 
                                                    id="telefone2" 
                                                    maxlength="14"
                                                    name="" 
                                                    size="20" 
                                                    class="form-control" 
                                                    placeholder="Telefone Celular" 
                                                    tabindex="1" 
                                                    type="text"
                                                    onkeyup="validar(this,'num');"
                                                    onkeypress="telefoneMascara(this)"
                                                    onkeypress="mascara(this, '## ####-####')" >
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <!--Login/Senha -->
                                    <h2>
                                        Login/Senha
                                    </h2>
                                    <select class="form-control" id="perfil" name="perfil"
                                    disabled>
                                        <option value="2">
                                            Pessoa Jurídica
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
                                            <input type="text" id="login" name="" size="30" maxlength="40" class="form-control"
                                            placeholder="Usuário" tabindex="1" type="text" >
                                        </td>
                                        <td>
                                            <input type="password" 
                                                    size="25" 
                                                    class="form-control" 
                                                    id="senha"
                                                    placeholder="Senha" 
                                                    tabindex="1" 
                                                    type="text" >
                                        </td>
                                        <td>
                                            <input type="password" 
                                                    id="confirmaSenha" 
                                                    name="" 
                                                    size="25" 
                                                    class="form-control" 
                                                    placeholder="Confirme  sua senha" 
                                                    tabindex="1" 
                                                    type="text"
                                                    onChange="verificacaoSenha()">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <input type="submit" id="btnIncluir" onClick="consultaAJAXPJ()">
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