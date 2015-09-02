	//CAIXA DE CONSULTAS
	$(function()
	{
		var dialogUsuario;
		dialogGeral = $( "#dialogUsuario-form" )
		.dialog(
		{
			autoOpen : false,
			height : 480,
			width : 680,
			modal : true,
		});
	});

//EXIBE Usuários
function exibeUsuario(user) {
	$("#btnIncluir").show(50);
	$("#btnAlterar").hide(50);
	
	 if (typeof user == "undefined"){
	 $("#btnAlterar").hide("slow");
	 }
	 else {
	 $("#btnIncluir").hide("slow");
	 }

	var dialogUsuario;
	dialogUsuario = $( "#dialogUsuario-form" ).dialog({});
	dialogUsuario.dialog( "open" );
}

// MUDAR A COR DA CAIXA DE TEXTO E COLOCA TUDO EM MAIUSCULOs
function focus_Blur(user, cor) {
	user.style.background = cor;
	user.style.color = "black";
	var minusculo = new String(user.value);
	var maiusculo = minusculo.toUpperCase();
	user.value = maiusculo;
}

//INSERÇÃO AJAX
function consultaAJAX() {
	var servicoHttp = "../webServices/usuariosWebService.php";

	var idPerfil = docuusernt.getEleuserntById('idPerfil');
	var nouser = docuusernt.getEleuserntById('nouser');
	var razaoSocial = docuusernt.getEleuserntById('razaoSocial');
	var fantasia = docuusernt.getEleuserntById('fantasia');
	var cpfcnpj = docuusernt.getEleuserntById('cpfcnpj');
	var email = docuusernt.getEleuserntById('email');
	var telefone1 = docuusernt.getEleuserntById('telefone1');
	var telefone2 = docuusernt.getEleuserntById('telefone2');
	var logradouro = docuusernt.getEleuserntById('logradouro');
	var bairro = docuusernt.getEleuserntById('bairro');
	var cep = docuusernt.getEleuserntById('cep');

	var login = docuusernt.getEleuserntById('login');
	var senha = docuusernt.getEleuserntById('senha');

	jsonParausertros = {
		incluirUsuario : 'sim',
		idPerfil : idPerfil.value,
		nouser : nouser.value,
		razaoSocial : razaoSocial.value,
		fantasia : fantasia.value,
		cpfcnpj : cpfcnpj.value,
		email : email.value,
		telefone1 : telefone1.value,
		telefone2 : telefone2.value,
		logradouro : logradouro.value,
		bairro : bairro.value,
		cep : cep.value,
		login : login.value,
		senha : senha.value
	};

	var $xhr = $.getJSON(servicoHttp, jsonParausertros);

	$xhr.done(function(resultadoXml) {
		alert('Usuário inserido com sucesso!');
	});

	$xhr.fail(function(data) {
		alert(data.responseText);
	});
}

//CONSULTA USUARIO
function consultaUsuario()
{
	var $labelLogin;
	var $labelSenha;

	$.ajax({
		type : "post",
		url : "../webServices/usuariosWebService.php",
		dataType : "json",
		data : {
			login : $("#loginId").val(),
			senha : $("#senhaId").val(),
			tipo : "consultar"
		},
		cache : false,

		success : function(data)
		{

			if (data.sucesso != undefined)
			{
				alert(data.sucesso);

			}
			else
			{
				alert(data.erro);

			}

		}
		error: function( data ) {											
			alert('Falha Interna, Contate o Suporte');
		}
	});
}


//Validar Campos
function validaUsuario()
{
/*

	$login = docuusernt . getEleuserntById('loginId') . value;
		$senha = docuusernt . getEleuserntById('senhaId') . value;

		if ($login == "" || $login < 6)
		{
			alert('Preencha o campo login com no mínimo 6 caracteres!');
			formLogin.divLogin.login.loginId.focus();
			return false;
		}
		if ($senha == "" || $senha < 6)
		{
			alert('Preencha o campo senha com no mínimo 6 caracteres!');
			formLogin.divLogin.login.senhaId.focus();
			return false;
		}
*/
}














