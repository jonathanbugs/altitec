$(document).ready(function(){
	accordion();
});


function accordion(){
	$("#treinamentosUl li").click(function(){
		$(this).toggleClass("accordionAberto");
		$(this).children(".conteudoAccordion").slideToggle(550, 'linear');
	});
}
