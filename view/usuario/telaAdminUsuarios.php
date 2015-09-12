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
      <link rel="stylesheet" type="text/css" href="../../css/easyui.css">
      <link rel="stylesheet" type="text/css" href="../../css/icon.css">
      <link rel="stylesheet" type="text/css" href="../../css/demo.css">

      <script type="text/javascript" src="../../js/jquery-1.6.min.js"></script>
      <script type="text/javascript" src="../../js/jquery.easyui.min.js"></script>
      <script type="text/javascript" src="../../js/jquery.edatagrid.js"></script>
      <script type="text/javascript" src="../../js/datagrid-filter.js"></script>

      <link rel="stylesheet" type="text/css" href="../../css/paginaTemplate.css">
      
      <script type="text/javascript">
         $(function(){
             $("div.easyui-layout").layout();
             $('#dg').edatagrid({
                 url: '../../webServices/usuariosWebService.php?editSave=carregarUsuario',
                 saveUrl: '../../webServices/usuariosWebService.php?editSave=incluirUsuarioAdmin',
                 updateUrl: '../../webServices/usuariosWebService.php?editSave=alterarUsuario',
                 destroyUrl: '../../webServices/usuariosWebService.php?editSave=deletarUsuario',
                 fitColumns: true
             });
             var dg = $('#dg');
             dg.edatagrid();    // create datagrid
             dg.edatagrid('enableFilter');    // enable filter
         });
      </script>

   </head>
   <body>
            <nav class="navbar">
               <div class="container">
                  
                  <div class="navbar-header">
                     <a class="navbar-brand" href="#">SysTransportes</a>
                  </div>
                     <ul class="nav navbar-nav">
                        <li class="active">
                           <a href="telaAdmin.php" class="">ADMIN</a>
                        </li>
                     </ul>

               </div>
            </nav>


        <pre>
        <strong>ATENÇÃO!</strong>
        <strong>Número</strong> de Perfil de Usuário: (1) PF, (2) PJ, (3) Atendente e (4) Motorista.
        <strong>Número</strong> de Status do Usuário: (1) Habilitado e (2) Desabilitado.
        <strong>Número</strong> de Código da Cidade: (2611606) Recife.
        </pre>

      <center>
         <table id="dg" title="Cadastro de Usuários" style="width:1250px;height:450px; border:1px solid #ccc;"
            toolbar="#toolbar" pagination="true" idField="id"
            rownumbers="true" fitColumns="true" resizable="true">
            <thead>

               <tr>
                  <th field="idStatus" width="45" editor="{type:'validatebox',options:{required:true}}">Status</th>
                  <th field="idPerfil" width="35" editor="{type:'validatebox',options:{required:true}}">Perfil</th>
                  <th field="nomeCompleto" width="70" editor="text">Nome.C</th>
                  <th field="razaoSocial" width="50" editor="text">Razão.S</th>
                  <th field="nomeFantasia" width="50" editor="text">Nome.F</th>
                  <th field="tipoEmpresa" width="50" editor="text">Tipo.E</th>
                  <th field="rg" width="50" editor="text">RG</th>
                  <th field="orgaoExpedidor" width="50" editor="text">Orgão.E</th>
                  <th field="cpf" width="50" editor="text">CPF</th>
                  <th field="cnpj" width="50" editor="text">CNPJ</th>
                  <th field="email" width="50" editor="{type:'validatebox',options:{validType:'email'}}">E-mail</th>
                  <th field="telefone1" width="50" editor="{type:'validatebox',options:{required:true}}">Tel.1</th>
                  <th field="telefone2" width="50" editor="text">Tel.2</th>
                  <th field="logradouro" width="50" editor="{type:'validatebox',options:{required:true}}">Lograd.</th>
                  <th field="bairro" width="50" editor="{type:'validatebox',options:{required:true}}">Bairro</th>
                  <th field="numero" width="30" editor="{type:'validatebox',options:{required:true}}">Nm</th>
                  <th field="complemento" width="50" editor="text">Compl.</th>
                  <th field="codCidade" width="65" editor="{type:'validatebox',options:{required:true}}">Cod.Cidade</th>
                  <th field="cep" width="50" editor="{type:'validatebox',options:{required:true}}">CEP</th>
                  <th field="login" width="50" editor="{type:'validatebox',options:{required:true}}">Login</th>
                  <th field="senha" width="50" editor="{type:'validatebox',options:{required:true}}">Senha</th>
               </tr>
            </thead>
         </table>
         <div id="toolbar">
            <a href="#" class="easyui-linkbutton" iconCls="icon-users-add-icon" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">Criar Usuário</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-save-as-icon" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Editar/Salvar</a>
                        <a href="#" class="easyui-linkbutton" iconCls="icon-delete-icon" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Deletar</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancelar</a>
         </div>
         </div>
      </center>

   </body>
</html>
