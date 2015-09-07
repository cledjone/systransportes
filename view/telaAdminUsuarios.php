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
      <link rel="stylesheet" type="text/css" href="../css/paginaTemplate.css">
      <link rel="stylesheet" type="text/css" href="../css/easyui.css">
      <link rel="stylesheet" type="text/css" href="../css/icon.css">
      <link rel="stylesheet" type="text/css" href="../css/demo.css">

      <!-- 
      <link rel="stylesheet" type="text/php" href="../modelo/usuario/update_cadastroclientes.php">
      <link rel="stylesheet" type="text/php" href="../modelo/usuario/save_cadastroclientes.php">
      <link rel="stylesheet" type="text/php" href="../modelo/usuario/get_cadastroclientes.php">
      <link rel="stylesheet" type="text/php" href="../modelo/usuario/destroy_cadastroclientes.php">
      <link rel="stylesheet" type="text/php" href="../modelo/usuario/conn.php">
      -->

      <script type="text/javascript" src="../js/jquery-1.6.min.js"></script>
      <script type="text/javascript" src="../js/jquery.easyui.min.js"></script>
      <script type="text/javascript" src="../js/jquery.edatagrid.js"></script>
      <script type="text/javascript" src="../js/datagrid-filter.js"></script>
      



      <script type="text/javascript">
         $(function(){
             $("div.easyui-layout").layout();
             $('#dg').edatagrid({
                 url: 'get_cadastroclientes.php',
                 saveUrl: 'save_cadastroclientes.php',
                 updateUrl: 'update_cadastroclientes.php',
                 destroyUrl: 'destroy_cadastroclientes.php',
                 fitColumns: true
             });
             var dg = $('#dg');
             dg.edatagrid();    // create datagrid
             dg.edatagrid('enableFilter');    // enable filter
         });
      </script>
   </head>
   <body>
      <div class="navbar-wrapper">
         <div class="container-fluid">
            <nav class="navbar">
               <div class="container">
                  <div class="navbar-header">
                     <a class="navbar-brand" href="#">SysTransportes</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li class="active">
                           <a href="telaAdmin.php" class="">ADMIN</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <center>
         <table id="dg" title="Cadastro de Usuários" style="width:1250px;height:450px; border:1px solid #ccc;"
            toolbar="#toolbar" pagination="true" idField="id"
            rownumbers="true" fitColumns="true" resizable="true">
            <thead>
               <tr>
                  <th field="perfil" width="33" editor="text">Perfil</th>
                  <th field="nomeCompleto" width="70" editor="text">Nome.C</th>
                  <th field="razaoSocial" width="50" editor="text">Razão.S</th>
                  <th field="nomeFantasia" width="50" editor="text">Nome.F</th>
                  <th field="tipoEmpresa" width="50" editor="text">Tipo.E</th>
                  <th field="rg" width="50" editor="text">RG</th>
                  <th field="orgaoExpedidor" width="50" editor="text">Orgão.E</th>
                  <th field="cpf" width="50" editor="text">CPF</th>
                  <th field="cnpj" width="50" editor="text">CNPJ</th>
                  <th field="email" width="50" editor="text">E-mail</th>
                  <th field="telefone1" width="50" editor="text">Tel.1</th>
                  <th field="telefone2" width="50" editor="text">Tel.2</th>
                  <th field="logradouro" width="50" editor="text">Lograd.</th>
                  <th field="bairro" width="50" editor="text">Bairro</th>
                  <th field="numero" width="30" editor="text">Nm</th>
                  <th field="complemento" width="50" editor="text">Compl.</th>
                  <th field="uf" width="30" editor="text">UF</th>
                  <th field="cidade" width="50" editor="text">Cidade</th>
                  <th field="cep" width="50" editor="text">CEP</th>
                  <th field="login" width="50" editor="text">Login</th>
                  <th field="senha" width="50" editor="text">Senha</th>
               </tr>
            </thead>
         </table>
         <div id="toolbar">
            <a href="usuarioCadastroPF.php" class="easyui-linkbutton" iconCls="icon-male-user-add" plain="true">Criar PF</a>
            <a href="usuarioCadastroPJ.php" class="easyui-linkbutton" iconCls="icon-male-user-add" plain="true">Criar PJ</a>
            <a href="usuarioCadastroFuncionario.php" class="easyui-linkbutton" iconCls="icon-users-add-icon" plain="true">Criar Funcionário</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">Novo</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-delete-icon" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Deletar</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-save-as-icon" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Editar/Salvar</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancelar</a>
         </div>
         </div>
      </center>
   </body>
</html>
