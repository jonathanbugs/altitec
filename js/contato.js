$(document).ready(function(){
	validaForm();
});


/**************
	VALIDACAO DE FORMULARIO 
**************/
function validaForm(){
	$('#formContato').validate({
		rules: {
			iptNome:        { required: true },
			iptEmail:       { required: true, email: true },
			iptFone:        { required: true },
			IptCidade:      { required: true },
			txtAreaMensagem:{ required: true }
		},
		submitHandler:function() {
			//enviaContato();
		},
		errorContainer: $('.errorBox')
	});
	$('#btEnviarContato').on('click', function(){
		setTimeout(function(){
			$('label.error').siblings('label, span').css({'color':'#FF0000'});
		}, 100);
	});
}

function enviaContato(){
	var nome        = $("#iptNome").val();
	var email       = $("#iptEmail").val();
	var fone        = $("#iptFone").val();
	var cidade      = $("#IptCidade").val();
	var mensagem    = $("#textAreaMensagem").val();

	$.post("./ajax/_post.contato.php", {
		'nome'        : nome,
		'email'       : email,
		'fone'        : fone,
		'cidade'      : cidade,
		'mensagem'    : mensagem
	},
	function(data){
		$("#iptNome").val('').prev().show();
		$("#iptEmail").val('').prev().show();
		$("#iptFone").val('').prev().show();
		$("#IptCidade").val('').prev().show();
		$("#textAreaMensagem").val('').prev().show();
	}, "html");
	alert('Sua mensagem foi enviada com sucesso. Obrigado!');
}

