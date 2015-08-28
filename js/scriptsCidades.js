	//CONSULTA CIDADES
	function listarCidades(idComboCidade, idComboUf){															
		var comboUf = document.getElementById(idComboUf);
		var comboCidade = document.getElementById(idComboCidade);
		var ufPesquisada = comboUf.value;
		//PREENCHE A TABELA			
		$.getJSON('../webServices/cidadeWebService.php?consultaCidades=sim&search=',{'consultaUf': ufPesquisada, ajax: 'true'}, function(j){		
		//	try{
				comboCidade.empty();
				/*
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
			*/
		});						
	}