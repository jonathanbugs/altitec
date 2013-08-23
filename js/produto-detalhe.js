$(document).ready(function(){
	showOrcamento();
});


function showOrcamento(){
	$(".btRealizarOrcamento").click(function(){
		$("#formOrcamento").slideToggle();
	});
}

