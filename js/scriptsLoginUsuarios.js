	//CAIXA DE CONSULTAS
	 $(function() 
	 {
		var dialogUsuario;
		dialogGeral = $( "#dialogUsuario-form" ).dialog(
			{
			  autoOpen: false,
			  height: 600,
			  width: 500,
			  modal: true,
			}
		);
	});

	//EXIBE LOGINUSUARIOS
	function exibeUsuario(me)
	{
		$("#btnIncluir").show(50);
		$("#btnAlterar").show(50);
		if (typeof me == "undefined")
		{
			$("#btnAlterar").hide("slow");
		}
		else
		{
			$("#btnIncluir").hide("slow");
		}
		var dialogUsuario;
		dialogUsuario = $( "#dialogUsuario-form" ).dialog({});
		dialogUsuario.dialog( "open" );
	}

	// MUDAR A COR DA CAIXA DE TEXTO E COLOCA TUDO EM MAIUSCULO
	function focus_Blur(me, cor)
	{
		me.style.background = cor;
		me.style.color = "black";
		var minusculo = new String(me.value);
		var maiusculo = minusculo.toUpperCase();
		me.value = maiusculo;
	}

	//CONSULTA AJAX
	function consultaAJAX( )
	{
		var servicoHttp = "../webServices/usuarioWebService.php";

		var login = document.getElementById('loginId');
		var senha = document.getElementById('senhaId');


		jsonParametros = {incluirUsuario: 'sim',  login: login.value, senha: senha.value};

		var $xhr = $.getJSON(servicoHttp, jsonParametros);


		$xhr.done(function(resultadoXml)
		{
			alert('ok');
		});

		$xhr.fail(function(data)
		{
			alert(data.responseText);
		});

	}

	//Validar Campos

	function validarUsuario()
	{

		var login = document.getElementById('loginId');
		var senha = document.getElementById('senhaId');

		if(login != "")
		{
		alert('Preencha o campo login!');
		//formLogin.divLogin.login.loginId.focus();
		return false;
		}
		if(senha == "")
		{
		alert('Preencha o campo senha!');
		//formLogin.divLogin.login.senhaId.focus();
		return false;
		}

	}