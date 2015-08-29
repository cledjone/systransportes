	//CONSULTA CIDADES	
	function consultaCidades(listaCidades, ufEscolhida) {	
		var servicoHttp = "../webServices/cidadeWebService.php";				
		
		var caixaUfEscolhida = document.getElementById(ufEscolhida); 
		var caixalistaCidades = document.getElementById(listaCidades);												
		
		
		jsonParametros = {consultaCidades: 'sim',  consultaUf: caixaUfEscolhida.value};
	
		var $xhr = $.getJSON(servicoHttp, jsonParametros);		
		
			
		$xhr.done(function(resultadoXml) {

			var options = '<option value="">Escolha a Cidade!</option>';	
			for (var i = 0; i < resultadoXml.length; i++) {
				options += '<option value="' + resultadoXml[i].codigo + resultadoXml[i].descricao +'">' + resultadoXml[i].descricao + '</option>';
			}	
			caixalistaCidades.innerHTML= options;	

		});

		$xhr.fail(function(data) {
			alert(data.responseText);
		});	
		
	}