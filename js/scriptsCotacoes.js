	//CAIXA DE CONSULTAS 
	 $(function() { 
		var dialogCotacao;        
		dialogGeral = $( "#dialogCotacao-form" ).dialog({
		  autoOpen: false,
		  height: 370,
		  width: 550,
		  modal: true,      
		});   	  		 	
	});		
	
	//EXIBE CLIENTES
	function exibeCotacao(me) {					
		$("#btnIncluir").show(50);			   												
		$("#btnAlterar").show(50);			   												
		if (typeof me == "undefined"){				
			$("#btnAlterar").hide("slow");								
		} else {
			$("#btnIncluir").hide("slow");				
		}		
		var dialogCotacao;        					
		dialogCotacao = $( "#dialogCotacao-form" ).dialog({});   					
		dialogCotacao.dialog( "open" );			
	}	
	
	// MUDAR A COR DA CAIXA DE TEXTO E COLOCA TUDO EM MAIUSCULO
	function focus_Blur(me, cor) {	 
	  me.style.background = cor;	 
	  me.style.color = "black";	
	  var minusculo = new String(me.value);
	  var maiusculo = minusculo.toUpperCase();
	  me.value = maiusculo;	  
	}	
	
	//CONSULTA AJAX
	function consultaAJAX( ) {	
		var servicoHttp = "../webServices/cotacaoWebService.php";				
		
		var altura = document.getElementById('altura');										
		var largura = document.getElementById('largura');								
		var peso = document.getElementById('peso');								
		var comprimento = document.getElementById('comprimento');								
		var qtdCaixas = document.getElementById('qtdCaixas');								
		var valor = document.getElementById('valor');										
		
		jsonParametros = {incluirCotacao: 'sim',  altura: altura.value, largura: largura.value, peso: peso.value, comprimento: comprimento.value, qtdCaixas: qtdCaixas.value, valor: valor.value};
	
		var $xhr = $.getJSON(servicoHttp, jsonParametros);		
		
			
		$xhr.done(function(resultadoXml) {
			alert('ok');
		});

		$xhr.fail(function(data) {
			alert(data.responseText);
		});	
		
	}	