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
		
		var idPerfil = document.getElementById('idPerfil');										
		var nome = document.getElementById('nome');								
		var razaoSocial = document.getElementById('razaoSocial');								
		var fantasia = document.getElementById('fantasia');								
		var cpfcnpj = document.getElementById('cpfcnpj');								
		var email = document.getElementById('email');	
		var telefone1 = document.getElementById('telefone1');								
		var telefone2 = document.getElementById('telefone2');								
		var logradouro = document.getElementById('logradouro');								
		var bairro = document.getElementById('bairro');								
		var cep = document.getElementById('cep');			
		var codCidade = document.getElementById('cidadeDestino').value;
		codCidade = codCidade.substring(0, 7);
		var login = document.getElementById('login');					
		var senha = document.getElementById('senha');							
		
		jsonParametros = {incluirUsuario: 'sim',  idPerfil: idPerfil.value, nome: nome.value, razaoSocial: razaoSocial.value, fantasia: fantasia.value, cpfcnpj: cpfcnpj.value, email: email.value, telefone1: telefone1.value, telefone2: telefone2.value, logradouro: logradouro.value, bairro: bairro.value, cep: cep.value, login: login.value, senha: senha.value, codCidade};
	
		var $xhr = $.getJSON(servicoHttp, jsonParametros);		
		
			
		$xhr.done(function(resultadoXml) {
			alert('Usuário inserido com sucesso!');
		});

		$xhr.fail(function(data) {
			alert(data.responseText);
		});	
		
	}	

	function validarCampos() {
		var idPerfil = document.getElementById('idPerfil');										
		var nome = document.getElementById('nome');								
		var razaoSocial = document.getElementById('razaoSocial');								
		var fantasia = document.getElementById('fantasia');								
		var cpfcnpj = document.getElementById('cpfcnpj');								
		var email = document.getElementById('email');	
		var telefone1 = document.getElementById('telefone1');								
		var telefone2 = document.getElementById('telefone2');								
		var logradouro = document.getElementById('logradouro');								
		var bairro = document.getElementById('bairro');								
		var cep = document.getElementById('cep');			
		var codCidade = document.getElementById('cidadeDestino').value;
		codCidade = codCidade.substring(0, 7);
		var login = document.getElementById('login');					
		var senha = document.getElementById('senha');

		if (idPerfil.value.length == 0) {
			alert('Por favor, informe o id do usuário');
			return;	
		} 
		if (nome.value.length == 0) {
			alert('Por favor, informe o id do usuário');
			return;	
		} 
		if (razaoSocial.value.length == 0) {
			alert('Por favor, informe o nome do usuário');
			return;	
		} 
		if (fantasia.value.length == 0) {
			alert('Por favor, informe a marca fantasia do usuário');
			return;	
		} 
		if (cpfcnpj.value.length == 0) {
			alert('Por favor, informe o cpf/cnpj do usuário');
			return;	
		} 
		if (email.value.length == 0) {
			alert('Por favor, informe o email do usuário');
			return;	
		} 
		if (telefone1.value.length == 0) {
			alert('Por favor, informe o email do usuário');
			return;	
		}
		if (telefone2.value.length == 0) {
			alert('Por favor, informe o email do usuário');
			return;	
		}
		if (logradouro.value.length == 0) {
			alert('Por favor, informe o email do usuário');
			return;	
		}
		if (bairro.value.length == 0) {
			alert('Por favor, informe o email do usuário');
			return;	
		}
		if (cpf.value.length == 0) {
			alert('Por favor, informe o email do usuário');
			return;	
		}
		if (logradouro.value.length == 0) {
			alert('Por favor, informe o email do usuário');
			return;	
		}
		if (logradouro.value.length == 0) {
			alert('Por favor, informe o email do usuário');
			return;	
		}

	}