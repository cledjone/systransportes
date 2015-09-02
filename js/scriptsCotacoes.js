	//CAIXA DE CONSULTAS 
	 $(function() { 
		var dialogCotacao;        
		dialogGeral = $( "#dialogCotacao-form" ).dialog({
		  autoOpen: false,
		  height: 620,
		  width: 630,
		  modal: true,      
		});   	  		 	
	});		
	
	function fecharTela(){		
		var dialogCotacao;        							
		dialogCotacao = $( "#dialogCotacao-form" ).dialog({});   					
		dialogCotacao.dialog( "close" );			
	}
	
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
	
	//VALIDAÇÃO DE DINHEIRO
	function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
      var sep = 0;
      var key = '';
      var i = j = 0;
      var len = len2 = 0;
      var strCheck = '0123456789';
      var aux = aux2 = '';
      var whichCode = (window.Event) ? e.which : e.keyCode;
       if (whichCode == 13) return true;
      key = String.fromCharCode(whichCode); // Valor para o código da Chave
      if (strCheck.indexOf(key) == -1) return false; // Chave inválida
      len = objTextBox.value.length;
      for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
        aux = '';
      for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
        aux += key;
        len = aux.length;
      if (len == 0) objTextBox.value = '';
      if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
      if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
      if
	  (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
      }
      return false;
    }

	//FORMATA DE FORMA GENERICA OS CAMPOS
    function formataCampo(campo, Mascara, evento) { 
        var boleanoMascara; 
        
        var Digitato = evento.keyCode;
        exp = /\-|\.|\/|\(|\)| /g
        campoSoNumeros = campo.value.toString().replace( exp, "" ); 
   
        var posicaoCampo = 0;    
        var NovoValorCampo="";
        var TamanhoMascara = campoSoNumeros.length;; 
        
        if (Digitato != 8) { // backspace 
                for(i=0; i<= TamanhoMascara; i++) { 
                        boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                                || (Mascara.charAt(i) == "/")) 
                        boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                        if (boleanoMascara) { 
                                NovoValorCampo += Mascara.charAt(i); 
                                  TamanhoMascara++;
                        }else { 
                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                                posicaoCampo++; 
                          }              
                  }      
                campo.value = NovoValorCampo;
                  return true; 
        }else { 
                return true; 
        }
    }		
	
	//VALIDA NUMERO SE É INTEIRO
    function mascaraInteiro(){
        if (event.keyCode < 48 || event.keyCode > 57){
                event.returnValue = false;
                return false;
        }
        return true;
    }	 

	//ADICIONA MASCARA DE DATA
    function mascaraData(data){
        if(mascaraInteiro(data)==false){
                event.returnValue = false;
        }       
        return formataCampo(data, '00/00/0000', event);
     } 
	 

	// EXIBE MENSAGEM PARA DATA INVÁLIDA
	function mensagemData(data){	  
	  if (verificaData(data)==false){
	    alert ('A Data Digitada e Invalida!');	
	  } 
	}		

	//TESTA DATA DIGITADA
	function verificaData(cData) {
        var data = cData.value;       
        var dia = data.substr(0,2)
        var mes = data.substr (3,2)
        var ano = data.substr (6,4)     
        if (ano < 1900) {
          return false;
        }
        if (ano > 2050)     {
         return false;
        }
        switch (mes) {
          case '01':
        if  (dia <= 31) 
         return (true);
         break;
          case '02':
        if  (dia <= 29) 
         return (true);
         break;
          case '03':
        if  (dia <= 31) 
         return (true);
         break;
          case '04':
        if  (dia <= 30) 
         return (true);
         break;
          case '05':
        if  (dia <= 31) 
         return (true);
         break;
          case '06':
        if  (dia <= 30) 
         return (true);
         break;
         case '07':
        if  (dia <= 31) 
         return (true);
         break;
         case '08':
        if  (dia <= 31) 
         return (true);
         break;
         case '09':
        if  (dia <= 30) 
         return (true);
         break;
         case '10':
        if  (dia <= 31) 
         return (true);
         break;
         case '11':
        if  (dia <= 30) 
         return (true);
         break;
         case '12':
        if  (dia <= 31) 
         return (true);
         break;
        }
        {
          return false;
        }
        return true; 
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
	  
	  //FORMATAR MOEDA
	function moeda(valor, casas, separdor_decimal, separador_milhar){ 
	 
	 var valor_total = parseInt(valor * (Math.pow(10,casas)));
	 var inteiros =  parseInt(parseInt(valor * (Math.pow(10,casas))) / parseFloat(Math.pow(10,casas)));
	 var centavos = parseInt(parseInt(valor * (Math.pow(10,casas))) % parseFloat(Math.pow(10,casas)));
	 
	  
	 if(centavos%10 == 0 && centavos+"".length<2 ){
	  centavos = centavos+"0";
	 }else if(centavos<10){
	  centavos = "0"+centavos;
	 }
	  
	 var milhares = parseInt(inteiros/1000);
	 inteiros = inteiros % 1000; 
	 
	 var retorno = "";
	 
	 if(milhares>0){
	  retorno = milhares+""+separador_milhar+""+retorno
	  if(inteiros == 0){
	   inteiros = "000";
	  } else if(inteiros < 10){
	   inteiros = "00"+inteiros; 
	  } else if(inteiros < 100){
	   inteiros = "0"+inteiros; 
	  }
	 }
	  retorno += inteiros+""+separdor_decimal+""+centavos;
	 
	 
	 return retorno;
	 
	}
