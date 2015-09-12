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
                 url: '../../webServices/veiculoWebService.php?editSave=carregarVeiculo',
                 saveUrl: '../../webServices/veiculoWebService.php?editSave=incluirVeiculo',
                 updateUrl: '../../webServices/veiculoWebService.php?editSave=alterarVeiculo',
                 destroyUrl: '../../webServices/veiculoWebService.php?editSave=deletarVeiculo',
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
         <table id="dg" title="Cadastro de Veículos" style="width:1250px;height:450px; border:1px solid #ccc;"
            toolbar="#toolbar" pagination="true" idField="id"
            rownumbers="true" fitColumns="true" resizable="true">
            <thead>
               <tr>
                  <th field="placa" width="50" editor="{type:'validatebox',options:{required:true}}">Placa</th>
                  <th field="capacidadeKg" width="70" editor="text">Capacidade(Kg)</th>
                  <th field="capacidadeM3" width="50" editor="text">Capacidade(M3)</th>
                  <th field="ano" width="50" editor="text">Ano</th>
                  <th field="tipo" width="50" editor="text">Tipo</th>
               </tr>
            </thead>
         </table>
         <div id="toolbar">
            <a href="#" class="easyui-linkbutton" iconCls="icon-users-add-icon" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">Criar Veículo</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-save-as-icon" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Editar/Salvar</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-delete-icon" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Deletar</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancelar</a>
         </div>
         </div>
      </center>
   </body>
</html>
