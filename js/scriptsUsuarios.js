	//CAIXA DE CONSULTAS 
	 $(function() { 
		var dialogUsuario;        
		dialogGeral = $( "#dialogUsuario-form" ).dialog({
		  autoOpen: false,
		  height: 370,
		  width: 950,
		  modal: true,      
		});   	  		 	
	});		
	
	//EXIBE Usuários
	function exibeUsuario(me) {					
		$("#btnIncluir").show(50);			   												
		$("#btnAlterar").hide(50);			   												
		/*
		if (typeof me == "undefined"){				
			$("#btnAlterar").hide("slow");								
		} 
		else {
			$("#btnIncluir").hide("slow");				
		}*/

		var dialogUsuario;        					
		dialogUsuario = $( "#dialogUsuario-form" ).dialog({});   					
		dialogUsuario.dialog( "open" );			
	}	
	
	// MUDAR A COR DA CAIXA DE TEXTO E COLOCA TUDO EM MAIUSCULOs
	function focus_Blur(me, cor) {	 
	  me.style.background = cor;	 
	  me.style.color = "black";	
	  var minusculo = new String(me.value);
	  var maiusculo = minusculo.toUpperCase();
	  me.value = maiusculo;	  
	}	
	
	//CONSULTA AJAX
	function consultaAJAX( ) {	
		var servicoHttp = "../webServices/usuariosWebService.php";				
		
		var idPerfil = document.getElementById('idPerfil').value;										
		var nomeCompleto = document.getElementById('nomeCompleto').value;								
		var razaoSocial = document.getElementById('razaoSocial').value;								
		var nomeFantasia = document.getElementById('nomeFantasia').value;								
		var tipoEmpresa = document.getElementById('tipoEmpresa').value;								
		var rg = document.getElementById('rg').value;
		var orgaoExpedidor = document.getElementById('orgaoExpedidor').value;
		var cpf = document.getElementById('cpf').value;
		var cnpj = document.getElementById('cnpj').value;

		var email = document.getElementById('email').value;	
		var telefone1 = document.getElementById('telefone1').value;								
		var telefone2 = document.getElementById('telefone2').value;

		var logradouro = document.getElementById('logradouro').value;								
		var bairro = document.getElementById('bairro').value;
		var numero = document.getElementById('numero').value;								
		var complemento = document.getElementById('complemento').value;																
		var cep = document.getElementById('cep').value;			
		var codCidade = document.getElementById('cidadeDestino').value;
		codCidade = codCidade.substring(0,7);

		var login = document.getElementById('login').value;								
		var senha = document.getElementById('senha').value;							
		
		jsonParametros = {incluirUsuario: 'sim',  idPerfil,nomeCompleto,razaoSocial,nomeFantasia,tipoEmpresa,rg,orgaoExpedidor,cpf,cnpj,email,telefone1,telefone2,logradouro,bairro,numero,complemento,cep,codCidade,login,senha};
	
		var $xhr = $.getJSON(servicoHttp, jsonParametros);		
		
			
		$xhr.done(function(resultadoXml) {
			alert('Usuário inserido com sucesso!');
		});

		$xhr.fail(function(data) {
			alert(data.responseText);
		});	
		
	}	