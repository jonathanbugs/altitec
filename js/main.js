$(document).ready(function(){
	placeHolder();
	imgRetina();
	sliderBanner();
	scrollTopo();
	galeriaProdutos();
});

function placeHolder(){
	$('.input, .textarea').on('keyup',function(){
		if($(this).val()===''){ $(this).prev().show(); }
	}).on('keydown',function(){
		$(this).prev().hide();
	}).on('change',function(){
		if ($(this).val()===''){ $(this).prev().show(); } else { $(this).prev().hide(); }
	}).on('focusout',function(){
		$(this).prev().fadeTo(0,1);
		if ($(this).val()===''){ $(this).prev().show(); $(this).parent().find('.erro').show(); } else { $(this).prev().hide(); $(this).parent().find('.erro').hide(); }
	}).on('focusin',function(){
		if ($(this).val()===''){ $(this).prev().show(); $(this).prev().fadeTo(0,0.3); } else { $(this).prev().hide(); }
	}).each(function(){
		if ($(this).val()===''){ $(this).prev().show(); } else { $(this).prev().hide(); }
	});
}

function imgRetina(){
	if (window.devicePixelRatio == 2) {
		$("img").each(function(){
			var nomeImagem = $(this).attr("src");

			var nomeImagemAlta = nomeImagem.replace("img/", "img/2x");
			$(this).attr("src", nomeImagemAlta);	
		});		
	}
}

function sliderBanner(){
	$('#bannerUl').cycle({
		fx:     'fade',
		speed:   1000,
		timeout: 6000,
		cleartypeNoBg: true,
		cleartype: !$.support.opacity
	});
}

function scrollTopo(){
	$(".voltarTopo").localScroll({
		duration: 900,
		easing: 'easeInOutExpo'
	});
}


function galeriaProdutos(){
	$("#produtoUl").flexisel({
		visibleItems: 6,
		animationSpeed: 1000,
		autoPlay: false,
		autoPlaySpeed: 3000,            
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
		responsiveBreakpoints: { 
			portrait: { 
				changePoint:480,
				visibleItems: 1
			}, 
			landscape: { 
				changePoint:640,
				visibleItems: 2
			},
			tablet: { 
				changePoint:768,
				visibleItems: 3
			}
		}
	});
}
