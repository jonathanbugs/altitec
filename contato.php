<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Altitec</title>
		<meta name="description" content="Sistema de Segurança em Altura">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:url" content="http://altitec.com.br"/>
		<meta property="og:title" content="Altitec - Sistema de Segurança em Altura"/>
		<meta property="og:image" content="http://altitec.com.br/img/facebook-thumb.jpg"/>
		<meta property="og:site_name" content="Altitec"/>

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="http://altitec.com.br/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="http://altitec.com.br/apple-touch-icon.png"/>


		<link rel="stylesheet" href="css/reset.css"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/contato.css"/>
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<header id="topo">
			<?php include "includes/topo.php"; ?>
		</header>

		<section id="conteudoPrincipal">
			<div class="container clearfix">
				<div id="main" class="geralTransition">
					<div class="clearfix headerSessao">
						<h2 class="tituloSessao geralTransition">Contato</h2>
						<ul class="migalhaPao geralTransition">
							<li><a href="javascript:;">principal</a></li>
							<li class="last"><a href="javascript:;">contato</a></li>
						</ul>
					</div>
					<div id="sessaoConteudo">
						<form action="javascript:;" id="formContato">
							<ul>
								<li>
									<label id="lblNome" for="iptNome">Nome:</label>
									<div class="relative relativeInput clearfix">
										<input type="text" id="iptNome" name="iptNome">
									</div>
								</li>

								<li>
									<label id="lblEmail" for="iptEmail">E-mail:</label>
									<div class="relative relativeInput clearfix">
										<input type="text" id="iptEmail" name="iptEmail">
									</div>
								</li>

								<li>
									<div class="divide clearfix">
										<label id="lblFone" for="iptFone">Fone:</label>
										<div class="relative relativeInput clearfix">
											<input type="text" id="iptEmail" name="iptEmail">
										</div>
									</div>

									<div class="divide clearfix">
										<label id="lblCidade" for="IptCidade">Cidade/UF:</label>
										<div class="relative relativeInput clearfix">
											<input type="text" id="iptCidade" name="iptCidade">
										</div>
									</div>
								</li>

								<li class="liCampoTextArea">
									<label id="lblMensagem" for="txtAreaMensagem">Mensagem:</label>
									<div class="relative relativeTextarea clearfix">
										<textarea name="txtAreaMensagem" id="txtAreaMensagem" cols="30" rows="10"></textarea>
									</div>
								</li>

								<li>
									<div class="relativeBt clearfix">
										<button id="btEnviarContato">Enviar</button>
									</div>
								</li>
							</ul>
						</form>
					</div>

					<div class="voltarTopo">
						<a id="linkTopo" class="ir" href="#topo">Voltar ao Topo</a>
					</div>
				</div>
				<aside id="sidebar" class="geralTransition">
					<img src="img/img_side.png" alt="">
					<span class="tituloSidebar">
						<span>Como Chegar</span>
					</span>

					<div class="blocoEmpresa">
						<p class="empresaEndereco">
							<span>Rua Avelino Dutra de Godoy, 39</span>
							<span>Bairro Floresta - Estância Velha/RS </span>
							<span>93600-000</span>
						</p>

						<a class="linkMapa" href="javascript:;">
							<img class="empresaImg" src="img/empresa.jpg" alt=""/>
						</a>

						<ul class="contatoSidebarUl">
							<li class="contatoSidebarLi contatoSidebarLiFone">51 3561 9493</li>
							<li class="contatoSidebarLi">
								<a class="linkEmail" href="mailto:altitec@altitec.com.br">altitec@altitec.com.br</a>
							</li>
						</ul>
					</div>
				</aside>	
			</div>
		</section>

		<footer>
			<?php include "includes/rodape.php"; ?>
		</footer>

		
		<script src="js/vendor/jquery-1.9.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

		
		<!-- Google Analytics -->
		<script>
			var _gaq=[['_setAccount','UA-42106713-1'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src='//www.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
	</body>
</html>
