	//VARIAVEIS UTEIS
	var contaNumero = 0;
	var contaLinha = 0;
	var aguardaDigitar; 	
	var webServiceCotacao = '../../webServices/cotacaoWebService.php';	
	
	//VALIDA DIGITAÇÃO DO CAMPO DE CONSULTAS DA COTAÇÃO
	function consultaCotacao(campoDigitado) {			   		 
		var realizaConsulta=false;
		var argumento = "";
		if (typeof campoDigitado != "undefined"){
			if (campoDigitado.value.length!=contaNumero){
				contaNumero = campoDigitado.value.length; 						
				campoDigitado.style.background = "black";	 			
				campoDigitado.style.color = "white";
				argumento = campoDigitado.value;				
				realizaConsulta=true;
			}
		} else {
			realizaConsulta=true;				
		}			
		if (realizaConsulta){	
			var jsonParametros = {consultaCotacao: 'sim', argumento: argumento};			
			clearTimeout(aguardaDigitar);						
			aguardaDigitar = setInterval(function(){acessoWebService(jsonParametros, webServiceCotacao);},1000);				
		}	
	}
	
	
	//VALIDA DIGITAÇÃO DO CAMPO DE CONSULTAS DA COTAÇÃO
	function crudCotacao(acao) {			
		var idCotacao = document.getElementById('idCotacao');								
		var qtdCaixas = document.getElementById('qtdCaixas');										
		var cidadeOrigem = document.getElementById('cidadeOrigem').value;	
		var codCidadeOrigem = cidadeOrigem.substring(0,7);							
		var cidadeDestino = document.getElementById('cidadeDestino').value;
		var codCidadeDestino = cidadeDestino.substring(0,7);						
		
		var altura = document.getElementById('altura');	
		var tira_Virgula = altura.value.replace(".", "");
		altura = tira_Virgula.replace("," ,".");	
		
		var largura = document.getElementById('largura');								
		var tira_Virgula = largura.value.replace(".", "");
		largura = tira_Virgula.replace("," ,".");	
	  
		var peso = document.getElementById('peso');								
		var tira_Virgula = peso.value.replace(".", "");
		peso = tira_Virgula.replace("," ,".");	
		
		var comprimento = document.getElementById('comprimento');										
		var tira_Virgula = comprimento.value.replace(".", "");
		comprimento = tira_Virgula.replace("," ,".");	
		
		var valorCarga = document.getElementById('valor');		
		var tira_Virgula = valorCarga.value.replace(".", "");
		valorCarga = tira_Virgula.replace("," ,".");	
			
		var prazo = '0';
		var valorFrete = '0';
		var descricao = 'nada';
		var aprovadoCliente = 0;
		var aprovadoAtendente = 0;		
		var idUsuario = 1;		
		var status = 1;		
		
		if (acao=='incluir'){
			jsonParametros = {incluirCotacao: 'sim', idUsuario: idUsuario, aprovadoAtendente: aprovadoAtendente, aprovadoCliente: aprovadoCliente, descricao: descricao, valorFrete: valorFrete, prazo: prazo, altura: altura, largura: largura, peso: peso, comprimento: comprimento, quantidadeCaixas: qtdCaixas.value, valorCarga: valorCarga, codCidadeOrigem: codCidadeOrigem, codCidadeDestino: codCidadeDestino, status: status};	
		}
		/*
		if (acao=='alterar'){
			jsonParametros = {alterarCotacao: 'sim',  altura: altura.value, largura: largura.value, peso: peso.value, comprimento: comprimento.value, qtdCaixas: qtdCaixas.value, valor: valor.value, objCidadeOrigem, objCidadeDestino};	
		}
		if (acao=='cancelar'){
			jsonParametros = {statusCotacao: 'sim',  altura: altura.value, largura: largura.value, peso: peso.value, comprimento: comprimento.value, qtdCaixas: qtdCaixas.value, valor: valor.value, objCidadeOrigem, objCidadeDestino};	
		}
		*/
		acessoWebService(jsonParametros, webServiceCotacao);
		
	}
	
	
	
	//ACESSO AO WEBSERVICE
	function acessoWebService(jsonParametros, nomeWebService) {		
		clearInterval(aguardaDigitar);
		var $xhr = $.getJSON(nomeWebService, jsonParametros);			
			
		$xhr.done(function(resultadoXml) {
			trataResultadoWebService(resultadoXml);
		});

		$xhr.fail(function(data) {
			alert(data.responseText);			
		});	
		
	}			
	
	//TRATA RESULTADO WEBSERVICE
	function trataResultadoWebService(resultadoXml) {	
		if (resultadoXml[0].resultado=='consulta'){
			for (var i = 0; i < resultadoXml.length; i++) {													
				var trLinha = document.createElement("tr");
				trLinha.setAttribute("class", "itens");
				trLinha.setAttribute("onClick", "selecionaCotacao('viewCadastro.php',this)");			
				trLinha.name = resultadoXml[i].id;
				trLinha.id = 'trLinha'+(contaLinha);				
				trLinha.innerHTML = '<td><image src="../../img/delete.gif" onclick=\"removeCte(this)\" name=\"$i\"></td><td id="idCotacao'+contaLinha+'">'+resultadoXml[i].id+'</td><td>'+(resultadoXml[i].cidadeOrigem).substr(0,20)+'</td><td>'+resultadoXml[i].ufOrigem+'</td><td>'+(resultadoXml[i].cidadeDestino).substr(0,20)+'</td><td>'+resultadoXml[i].ufDestino+'</td><td>'+resultadoXml[i].valorCarga+'</td><td>'+resultadoXml[i].valorFrete+'</td><td>'+resultadoXml[i].prazo+'</td><td>'+resultadoXml[i].status+'</td>';
				document.getElementById('tabelaConsulta').appendChild(trLinha);	
				contaLinha++;		
			}
		}		
	}	


	//SELECIONA COTACAO
	function selecionaCotacao(paginaSelecionada, cotacaoSelecionada){	
		var idCotacao="";
		if (typeof cotacaoSelecionada != "undefined"){
		 idCotacao= '?idCotacao='+cotacaoSelecionada.name;					
		}
		window.location.href = paginaSelecionada+idCotacao;
	}	
		
	
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
	
	
	
	
	
	// PEGAS AS CAIXAS DE DIGITAÇAO E CONCATENA NO CAMPO DE CONSULTA OCULTO
	function juntaCidadeUf(){
		var caixaCidadeOrigem = document.getElementById('cidadeOrigem');
		var caixaUfOrigem = document.getElementById('ufOrigem');
		var caixaCidadeDestino = document.getElementById('cidadeDestino');
		var caixaUfDestino = document.getElementById('ufDestino');
		var caixaPesquisaOrigem = document.getElementById('txtOrigem');
		var caixaPesquisaDestino = document.getElementById('txtDestino');
		var cidadeOrigem = caixaCidadeOrigem.value;
		var cidadeDestino = caixaCidadeDestino.value;
		caixaPesquisaOrigem.value = cidadeOrigem.substr(7,50)+' '+caixaUfOrigem.value;
		caixaPesquisaDestino.value = cidadeDestino.substr(7,50)+' '+caixaUfDestino.value;	
	}
	
	function CalculaDistancia() {
        $('#litResultado').html('Aguarde...');
        // Instancia o DistanceMatrixService.
        var service = new google.maps.DistanceMatrixService();
        // Executa o DistanceMatrixService.
        service.getDistanceMatrix({
            origins: [$("#txtOrigem").val()], // Origem
            destinations: [$("#txtDestino").val()], // Destino
            travelMode: google.maps.TravelMode.DRIVING, // Modo (DRIVING | WALKING | BICYCLING)
            unitSystem: google.maps.UnitSystem.METRIC // Sistema de medida (METRIC | IMPERIAL)
        }, callback); // Vai chamar o callback
      }

      // Tratar o retorno do DistanceMatrixService
      function callback(response, status) {
        // Verificar o status.
        if (status != google.maps.DistanceMatrixStatus.OK) { // Se o status não for "OK".
            $("#litResultado").html(status);
        } else { // Se o status for "OK".
            $("#litResultado").html("&nbsp;"); // Remove o "aguarde".

            // Popula os campos.         
            $("#txtDistancia").val(response.rows[0].elements[0].distance.text);
					
			
			//PEGA O VALOR DO KM TOTAL E RETIRA OS STRINGS
			var pegaDistancia = response.rows[0].elements[0].distance.text;
			pegaDistancia = pegaDistancia.substr(0,(pegaDistancia.length-3)); //PEGA  APENAS OS NUMNEROS			
			var valorMySql = pegaDistancia.replace(".", ""); // TIRA OS PONTOS DE MILHAR
			pegaDistancia = valorMySql.replace("," ,".");	  // VIRGULA DE CASA DECIMAL VIRA PONTO (PADRÃO AMERICANO)
			
			// CALCULO EM REAL, NECESSITAREMOS DE UMA TABELA PRA CASO O CLIENTE QUEIRA ALTERAR
			var fretePelaDistancia = pegaDistancia*(0.9);// ME FALARAM QUE O PREÇO POR KM É 0,90;
			
			//CALCULO DO SEGURO DA CARGA QUE É AVALIADO DE ACORDO COM O VALOR TOTAL DA MERCADORIA			
			var caixaValorMercadoria = document.getElementById('valor');
			var valorMercadoria = caixaValorMercadoria.value;
			var valorMySql = valorMercadoria.replace(".", ""); // TIRA OS PONTOS DE MILHAR
			valorMercadoria = valorMySql.replace("," ,".");	
			
			
			var valorSeguro = (valorMercadoria*0.5)/100; //VALOR DO SEGURO É IGUAL A 0.5% DO VALOR DA MERCADORIA;
								
			
			// AGORA PEGA O PESO E FRACIONA DE ACORDO COM O TAMANHO DO CAMINHAO
			var caixaPesoMercadoria = document.getElementById('peso');			
			var pesoMercadoria = caixaPesoMercadoria.value;
			var valorMySql = pesoMercadoria.replace(".", ""); // TIRA OS PONTOS DE MILHAR
			pesoMercadoria = valorMySql.replace("," ,".");				
			
			var capacidadeCaminhao = 0;
			//COMPARA O TAMANHO DO CARRO
			if (pesoMercadoria< 3000){ // peso máximo de ULTILITARIO
				capacidadeCaminhao = 3000;
			} else {			
				if (pesoMercadoria< 6000){ // peso máximo de TOCO
					capacidadeCaminhao = 6000;
				}else {			
					if (pesoMercadoria< 14000){ // peso máximo de TRUCK
						capacidadeCaminhao = 14000;
					}else{			
						if (pesoMercadoria< 33000){ // peso máximo de CAVALO MECANICO
							capacidadeCaminhao = 33000;
						} 
					}
				}
			}
			
			//EXPECIFICA UM PERCENTUAL BASEADO NO TAMANHO DO CAMINHÃO E O PESO DA CARGA
			var percentualCobrado = pesoMercadoria/capacidadeCaminhao*100;
			
			//TAXA MINIMA SEMPRE SOMADA PARA DISTANCIAS MUITO CURTAS EX: RECIFE(AEROPORTO) / RECIFE(AFOGADOS)
			var freteMinimo = 30;  //OUTRO VALOR A SER COLOCADO NO BANCO PRA A TRANSPORTADORA ALTERAR SE QUISER
			
			//SOMA OS VALORES 
			var valorFrete = fretePelaDistancia+freteMinimo+valorSeguro;
						
			//CALCULA O PERCENTUAL REFERENTE AO  ESPAÇO NO CAMINHAO
			var valorFinalFrete = (valorFrete*percentualCobrado)/100; //PRONTO! FRETE CALCULADO!
			
			
			valorFinalFrete = moeda(valorFinalFrete,2,',','.'); 
						
			//JOGA O VALOR NA CAIXA DE TEXTO
			$("#valorFrete").val(valorFinalFrete);			
			
			
            var tempo = response.rows[0].elements[0].duration.text;			
            tempo = tempo.replace("day", "dia").replace("hour", "hora").replace("min", "minuto");
            $("#txtTempo").val(tempo);

            //Atualizar o mapa.
            $("#map").attr("src", "https://maps.google.com/maps?saddr=" + response.originAddresses + "&daddr=" + response.destinationAddresses + "&output=embed");
        }
      }
	  
	  /*  
	  	var servicoHttp = "../webServices/cotacaoWebService.php";				
		
		
		*/