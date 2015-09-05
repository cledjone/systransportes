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
        <link rel="stylesheet" type="text/css" href="../css/paginaTemplate.css">
        
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"> </script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"> </script>

        
        <script type="text/javascript" src="../js/jquery-ui.js"> </script>
        <script type="text/javascript" src="../js/scriptsUsuarios.js"> </script>
        <script type="text/javascript" src="../js/scriptsCidades.js"> </script>

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
                <nav class="navbar">
                    <div class="container">                        

                                    <div class="container">        
        <div class="box">         
            <center>
            <br><br>    
                <div class="col-lg-12">                     
                    <b><font color="red" size="4">CADASTRO DE COTAÇÕES</font></b>                       
                </div>          
                <br><br><br>
                <table>
                    <tr>                                
                        <td>
                            <table border="1" width="100%">
                                <tr>
                                    <td width="220">
                                        <center><font color="green">CIDADE ORIGEM:</font></center>
                                    </td>                                                           
                                    <td width="220">
                                        <center><font color="green" >CIDADE DESTINO:</font></center>                                        
                                    </td>                                       
                                    <td width="120">
                                        <center><font color="green" >VALOR:</font></center>                                     
                                    </td>                                       
                                    <td width="120">
                                        <center><font color="green" >PESO:</font></center>                                      
                                    </td>                                       
                                    <td width="150">
                                        <center><font color="green" >COMPRIMENTO:</font></center>                                       
                                    </td>                                                               
                                    <td width="120">
                                        <center><font color="green" >FRETE:</font></center>                                     
                                    </td>                                       
                                    <td width="80">
                                        <center><font color="green" >PRAZO:</font></center>                                     
                                    </td>                                       
                                    <td width="120">
                                        <center><font color="green" >STATUS:</font></center>                                        
                                    </td>                                                                       
                                </tr>                                                               
                                <tr class="itensCotacao" onClick="exibeCotacao();">
                                    <td>
                                                RECIFE - PE
                                    </td>                                                           
                                    <td >
                                                RIO DE JANEIRO - RJ
                                    </td>                                       
                                    <td >
                                                1.000,00
                                    </td>                                       
                                    <td >
                                                11.000,00
                                    </td>                                       
                                    <td >
                                                0,00
                                    </td>                                                               
                                    <td >
                                                2.000,00
                                    </td>                                       
                                    <td >
                                                8 DIAS
                                    </td>                                       
                                    <td >
                                                APROVADO
                                    </td>                                                                       
                                </tr>                               
                                <tr class="itensCotacao" onClick="exibeCotacao();">
                                    <td>
                                                RECIFE - PE
                                    </td>                                                           
                                    <td >
                                                RIO DE JANEIRO - RJ
                                    </td>                                       
                                    <td >
                                                1.000,00
                                    </td>                                       
                                    <td >
                                                11.000,00
                                    </td>                                       
                                    <td >
                                                0,00
                                    </td>                                                               
                                    <td >
                                                2.000,00
                                    </td>                                       
                                    <td >
                                                8 DIAS
                                    </td>                                       
                                    <td >
                                                APROVADO
                                    </td>       
                                </tr>           
                                <tr class="itensCotacao" onClick="exibeCotacao();">
                                    <td>
                                                RECIFE - PE
                                    </td>                                                           
                                    <td >
                                                RIO DE JANEIRO - RJ
                                    </td>                                       
                                    <td >
                                                1.000,00
                                    </td>                                       
                                    <td >
                                                11.000,00
                                    </td>                                       
                                    <td >
                                                0,00
                                    </td>                                                               
                                    <td >
                                                2.000,00
                                    </td>                                       
                                    <td >
                                                8 DIAS
                                    </td>                                       
                                    <td >
                                                APROVADO
                                    </td>                                                                       
                                </tr>                                                               
                                <tr class="itensCotacao" onClick="exibeCotacao();">
                                    <td>
                                                RECIFE - PE
                                    </td>                                                           
                                    <td >
                                                RIO DE JANEIRO - RJ
                                    </td>                                       
                                    <td >
                                                1.000,00
                                    </td>                                       
                                    <td >
                                                11.000,00
                                    </td>                                       
                                    <td >
                                                0,00
                                    </td>                                                               
                                    <td >
                                                2.000,00
                                    </td>                                       
                                    <td >
                                                8 DIAS
                                    </td>                                       
                                    <td >
                                                APROVADO
                                    </td>                                                                       
                                </tr>                               
                                <tr class="itensCotacao" onClick="exibeCotacao();">
                                    <td>
                                                RECIFE - PE
                                    </td>                                                           
                                    <td >
                                                RIO DE JANEIRO - RJ
                                    </td>                                       
                                    <td >
                                                1.000,00
                                    </td>                                       
                                    <td >
                                                11.000,00
                                    </td>                                       
                                    <td >
                                                0,00
                                    </td>                                                               
                                    <td >
                                                2.000,00
                                    </td>                                       
                                    <td >
                                                8 DIAS
                                    </td>                                       
                                    <td >
                                                APROVADO
                                    </td>                                                                       
                                </tr>                               
                                <tr class="itensCotacao" onClick="exibeCotacao();">
                                    <td>
                                                RECIFE - PE
                                    </td>                                                           
                                    <td >
                                                RIO DE JANEIRO - RJ
                                    </td>                                       
                                    <td >
                                                1.000,00
                                    </td>                                       
                                    <td >
                                                11.000,00
                                    </td>                                       
                                    <td >
                                                0,00
                                    </td>                                                               
                                    <td >
                                                2.000,00
                                    </td>                                       
                                    <td >
                                                8 DIAS
                                    </td>                                       
                                    <td >
                                                APROVADO
                                    </td>                                                                       
                                </tr>                               
                                <tr class="itensCotacao" onClick="exibeCotacao();">
                                    <td>
                                                RECIFE - PE
                                    </td>                                                           
                                    <td >
                                                RIO DE JANEIRO - RJ
                                    </td>                                       
                                    <td >
                                                1.000,00
                                    </td>                                       
                                    <td >
                                                11.000,00
                                    </td>                                       
                                    <td >
                                                0,00
                                    </td>                                                               
                                    <td >
                                                2.000,00
                                    </td>                                       
                                    <td >
                                                8 DIAS
                                    </td>                                       
                                    <td >
                                                APROVADO
                                    </td>                                                                       
                                </tr>                               
                                <tr class="itensCotacao" onClick="exibeCotacao();">
                                    <td>
                                                RECIFE - PE
                                    </td>                                                           
                                    <td >
                                                RIO DE JANEIRO - RJ
                                    </td>                                       
                                    <td >
                                                1.000,00
                                    </td>                                       
                                    <td >
                                                11.000,00
                                    </td>                                       
                                    <td >
                                                0,00
                                    </td>                                                               
                                    <td >
                                                2.000,00
                                    </td>                                       
                                    <td >
                                                8 DIAS
                                    </td>                                       
                                    <td >
                                                APROVADO
                                    </td>                                                                       
                                </tr>                               
                                <tr class="itensCotacao" onClick="exibeCotacao();">
                                    <td>
                                                RECIFE - PE
                                    </td>                                                           
                                    <td >
                                                RIO DE JANEIRO - RJ
                                    </td>                                       
                                    <td >
                                                1.000,00
                                    </td>                                       
                                    <td >
                                                11.000,00
                                    </td>                                       
                                    <td >
                                                0,00
                                    </td>                                                               
                                    <td >
                                                2.000,00
                                    </td>                                       
                                    <td >
                                                8 DIAS
                                    </td>                                       
                                    <td >
                                                APROVADO
                                    </td>                                                                       
                                </tr>                               
                                <tr class="itensCotacao" onClick="exibeCotacao();">
                                    <td>
                                                RECIFE - PE
                                    </td>                                                           
                                    <td >
                                                RIO DE JANEIRO - RJ
                                    </td>                                       
                                    <td >
                                                1.000,00
                                    </td>                                       
                                    <td >
                                                11.000,00
                                    </td>                                       
                                    <td >
                                                0,00
                                    </td>                                                               
                                    <td >
                                                2.000,00
                                    </td>                                       
                                    <td >
                                                8 DIAS
                                    </td>                                       
                                    <td >
                                                APROVADO
                                    </td>                                                                       
                                </tr>                               
                                
                            </table> 
                            <br>
                            <br>
                            <br>             
                        </td>   
                    </tr>
                </table>
            </center>
        </div>
    </div>
                    </div>
                </nav>
        </div>
    </body>

</html>