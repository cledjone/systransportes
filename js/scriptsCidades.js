//ENVIA CONSULTA CLIENTE
	function dadosCliente(tabelaDefinida, diretorio, telefone, qtdClientes, eventoClick, me){	
		clearInterval(aguardaDigitar);
	
		var argumento = "";
		if (typeof me != "undefined"){	
			argumento = me.value;
		}
		
		iniciaVariaveisClientes();		
		
		// PREENCHE UMA LINHA INDICANDO QUE ESTÁ PROCURANDO...
		linhaConsulta("yellow", "black", "CONSULTANDO...", tabelaDefinida, telefone);																				
		//PREENCHE A TABELA			
		$.getJSON(diretorio+'ajaxClientes.php?consultaClientes=sim&qtdClientes='+qtdClientes+'&search=',{'argumento': argumento, ajax: 'true'}, function(j){		
			try{
				//LIMPAR LINHA DE ESPERA
				for (var z = 1; z < 20; z++) {				
					var trApagada = document.getElementById('trCliente0');
					if (trApagada != null)	
						document.getElementById(tabelaDefinida).removeChild(trApagada);								
				}					
				//PREENCHE A CONSULTA
				if (j.length>0){
					todosClientes = j;
					for (var i = 0; i < j.length; i++) {										
						var trCliente = document.createElement("tr");
						trCliente.setAttribute("class", "itens");
						trCliente.setAttribute("onClick", eventoClick);
						trCliente.name = i;
						trCliente.id = 'trCliente'+i;
						var qtdPalavras = 38;
						if (telefone)
							qtdPalavras = 26;						
						var escreveNomeCliente = "";
						var escreveApelidoCliente = "";
						try{escreveNomeCliente = (j[i].nome).substr(0,qtdPalavras);	} catch(e) {}
						try{escreveApelidoCliente = (j[i].apelido).substr(0,qtdPalavras);} catch(e) {}						
						var textoInserido = '<td width="5" id="codigoCliente'+i+'">'+j[i].codigo+'</td><td width="100" id="nomeCliente'+i+'">'+escreveNomeCliente+'</td><td width="40" id="apelidoCliente'+i+'">'+escreveApelidoCliente+'</td>';
						if (telefone)
							textoInserido = textoInserido +'<td width="40">'+(j[i].telefone).substr(0,10)+'</td>';
						trCliente.innerHTML = textoInserido;
						document.getElementById(tabelaDefinida).appendChild(trCliente);								
					}				
				} else {
					// PREENCHE UMA LINHA INDICANDO QUE NADA FOI ENCONTRADO!
					linhaConsulta("red", "black", "? NADA ENCONTRADO ?", tabelaDefinida, telefone);														
				}
			} catch(e) {
				// PREENCHE UMA LINHA INDICANDO QUE NADA FOI ENCONTRADO!
				linhaConsulta("red", "black", "? NADA ENCONTRADO ?", tabelaDefinida, telefone);						
			}	
		});						
	}