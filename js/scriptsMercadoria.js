	//CAIXA DE CONSULTAS 
	 $(function() { 
		var dialogMercadoria;        
		dialogGeral = $( "#dialogMercadoria-form" ).dialog({
		  autoOpen: false,
		  height: 370,
		  width: 950,
		  modal: true,      
		});   	  		 	
	});		
	
	//EXIBE Mercadoria
	function exibeMercadoria(me) {					
		$("#btnIncluir").show(50);			   												
		$("#btnAlterar").hide(50);			   												
		
		if (typeof me == "undefined"){				
			$("#btnAlterar").hide("slow");								
		} 
		else {
			$("#btnIncluir").hide("slow");				
		}

		var dialogMercadoria;        					
		dialogMercadoria = $( "#dialogMercadoria-form" ).dialog({});   					
		dialogMercadoria.dialog( "open" );			
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
		var servicoHttp = "../webServices/mercadoriaWebService.php";				
		
		var idMercadoria = document.getElementById('idMercadoria');										
		
		jsonParametros = {incluirMercadoria: 'sim',  idMercadoria: idMercadoria.value};
	
		var $xhr = $.getJSON(servicoHttp, jsonParametros);		
		
			
		$xhr.done(function(resultadoXml) {
			alert('Mercadoria inserida com sucesso!');
		});

		$xhr.fail(function(data) {
			alert(data.responseText);
		});			
	}	
