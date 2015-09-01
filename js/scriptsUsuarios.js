//CAIXA DE CONSULTAS
$(function() {
	var dialogUsuario;
	dialogGeral = $("#dialogUsuario-form").dialog({
		autoOpen : false,
		height : 370,
		width : 950,
		modal : true,
	});
});

//EXIBE Usuários
function exibeUsuario(me) {
	$("#btnIncluir").show(50);
	$("#btnAlterar").hide(50);
	/*
	 if (typeof me == "undefined"){
	 $("#btnAlterar").hide("slow");
	 }
	 else {
	 $("#btnIncluir").hide("slow");
	 }*/

	var dialogUsuario;
	dialogUsuario = $("#dialogUsuario-form").dialog({});
	dialogUsuario.dialog("open");
}

// MUDAR A COR DA CAIXA DE TEXTO E COLOCA TUDO EM MAIUSCULOs
function focus_Blur(me, cor) {
	me.style.background = cor;
	me.style.color = "black";
	var minusculo = new String(me.value);
	var maiusculo = minusculo.toUpperCase();
	me.value = maiusculo;
}

//INSERÇÃO AJAX
function consultaAJAX() {
	var servicoHttp = "../webServices/usuariosWebService.php";

	var idPerfil = document.getElementById('idPerfil');
	var nome = document.getElementById('nome');
	var razaoSocial = document.getElementById('razaoSocial');
	var fantasia = document.getElementById('fantasia');
	var cpfcnpj = document.getElementById('cpfcnpj');
	var email = document.getElementById('email');
	var telefone1 = document.getElementById('telefone1');
	var telefone2 = document.getElementById('telefone2');
	var logradouro = document.getElementById('logradouro');
	var bairro = document.getElementById('bairro');
	var cep = document.getElementById('cep');

	var login = document.getElementById('login');
	var senha = document.getElementById('senha');

	jsonParametros = {
		incluirUsuario : 'sim',
		idPerfil : idPerfil.value,
		nome : nome.value,
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

	var $xhr = $.getJSON(servicoHttp, jsonParametros);

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
	});
}


//Validar Campos
function validaUsuario()
{
/*

	$login = document . getElementById('loginId') . value;
		$senha = document . getElementById('senhaId') . value;

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














