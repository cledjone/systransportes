<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>
         SysTransportes
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="../../css/easyui.css">
      <link rel="stylesheet" type="text/css" href="../../css/icon.css">
      <link rel="stylesheet" type="text/css" href="../../css/demo.css">
	  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="../../css/paginaTemplate.css">

      <script type="text/javascript" src="../../js/jquery-1.6.min.js"></script>
      <script type="text/javascript" src="../../js/jquery.easyui.min.js"></script>
      <script type="text/javascript" src="../../js/jquery.edatagrid.js"></script>
      <script type="text/javascript" src="../../js/datagrid-filter.js"></script>
      <script type="text/javascript" src="../../js/scriptsMercadoria.js"></script>

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
                           <a href="../telaAdmin.php" class="">ADMIN</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <center>
         <table id="dg" style="width:1190px; height:450px; border:1px solid #ccc;" idField="id">
            <thead>
               <tr>
                  <th align ="center" field="idCotacoes" width="10" editor="{type:'validatebox',options:{required:true}}">Id Cotacao</th>
                  <th align ="center" field="descricao" width="60" editor="{type:'validatebox',options:{required:true}}">Descricao</th>
                  <th align ="center" field="peso" width="10" editor="{type:'validatebox',options:{required:true}}">Peso</th>
               </tr>
            </thead>
         </table>
         
         <div id="toolbar" align="center">
            <a href="#" class="easyui-linkbutton" iconCls="icon-users-add-icon" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">Criar Mercadoria</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="easyui-linkbutton" iconCls="icon-save-as-icon" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Salvar</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="easyui-linkbutton" iconCls="icon-delete-icon" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Deletar</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancelar</a>
         </div>
         
         </div>
      </center>
   </body>
</html>
