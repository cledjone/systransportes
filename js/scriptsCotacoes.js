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
	
	//EXIBE Cotações
	function exibeCotacao(cota) {					
		$("#btnIncluir").show(50);			   												
		$("#btnAlterar").show(50);			   												
		if (typeof cota == "undefined"){				
			$("#btnAlterar").hide("slow");								
		} else {
			$("#btnIncluir").hide("slow");				
		}		
		var dialogCotacao;        					
		dialogCotacao = $( "#dialogCotacao-form" ).dialog({});   					
		dialogCotacao.dialog( "open" );			
	}	
	
	// MUDAR A COR DA CAIXA DE TEXTO E COLOCA TUDO EM MAIUSCULO
	function focus_Blur(cota, cor) {	 
	  cota.style.background = cor;	 
	  cota.style.color = "black";	
	  var minusculo = new String(cota.value);
	  var maiusculo = minusculo.toUpperCase();
	  cota.value = maiusculo;	  
	}	
	
	//CONSULTA AJAX
	function consultaAJAX( ) {	
		var servicoHttp = "../webServices/cotacaoWebService.php";				
		
		var altura = docucotant.getElecotantById('altura');										
		var largura = docucotant.getElecotantById('largura');								
		var peso = docucotant.getElecotantById('peso');								
		var compricotanto = docucotant.getElecotantById('compricotanto');								
		var qtdCaixas = docucotant.getElecotantById('qtdCaixas');								
		var valor = docucotant.getElecotantById('valor');										
		
		jsonParacotatros = {incluirCotacao: 'sim',  altura: altura.value, largura: largura.value, peso: peso.value, compricotanto: compricotanto.value, qtdCaixas: qtdCaixas.value, valor: valor.value};
	
		var $xhr = $.getJSON(servicoHttp, jsonParacotatros);		
		
			
		$xhr.done(function(resultadoXml) {
			alert('ok');
		});

		$xhr.fail(function(data) {
			alert(data.responseText);
		});	
		
	}	