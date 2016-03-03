<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>AgiSupri</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Bootstrap Css -->
<link href="/agisupri/design_core/bootstrap-assets/css/bootstrap.css" rel="stylesheet">
<!-- Style -->
<link rel="stylesheet" href="/agisupri/design_core/plugins/fancybox/jquery.fancybox.css">
<link href="/agisupri/design_core/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="/agisupri/design_core/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
<link href="/agisupri/design_core/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
<link href="/agisupri/design_core/plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
<link href="/agisupri/design_core/plugins/Icons/et-line-font/style.css" rel="stylesheet">
<link href="/agisupri/design_core/plugins/animate.css/animate.css" rel="stylesheet">
<link href="/agisupri/design_core/css/main.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
<!-- Icones -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- cabeçalho  -->
	<section class="main-header">
		<?php include 'application/views/templates/header.php';?>
	</section>
	<section class="cadastro" id="fundobranco">
		<div class="container">
			<h2>
				<div>cadastro</div>
			</h2>
			<p>Basta preencher o formulário abaixo para acessar a nossa área do cliente, nesse sistema você consegue ter acesso aos nossos produtos, solicitar orçamentos e monitorar seus pedidos.</p>
			<div class="form-inline formproduto form1">
				<div class="form-group inp1">
					<input type="text" class="form-control" value="nome completo:" onblur="this.value='nome completo:'" onfocus="this.value=''">
				</div>
				<div class="form-group inp2">
					<input type="text" class="form-control" value="email:" onblur="this.value='email:'" onfocus="this.value=''">
				</div>
				<div class="form-group inp3">
					<input type="text" class="form-control" value="cargo:" onblur="this.value='cargo:'" onfocus="this.value=''">
				</div>
			</div>
			<div class="form-inline formproduto form2">
				<div class="form-group inp1">
					<input type="text" class="form-control" value="telefone:" onblur="this.value='telefone:'" onfocus="this.value=''">
				</div>
				<div class="form-group inp2">
					<input type="text" class="form-control" value="celular:" onblur="this.value='celular:'" onfocus="this.value=''">
				</div>
				<div class="form-group inp3">
					<input type="text" class="form-control" value="razão social:" onblur="this.value='razão social:'" onfocus="this.value=''">
				</div>
				<div class="form-group inp4">
					<input type="text" class="form-control" value="cnpj:" onblur="this.value='cnpj:'" onfocus="this.value=''">
				</div>
			</div>
			<div class="form-inline formproduto form3">
				<div class="form-group inp1">
					<input type="text" class="form-control" value="endereço:" onblur="this.value='endereço:'" onfocus="this.value=''">
				</div>
				<div class="form-group inp2">
					<input type="text" class="form-control" value="número:" onblur="this.value='número:'" onfocus="this.value=''">
				</div>
				<div class="form-group inp3">
					<input type="text" class="form-control" value="bairro:" onblur="this.value='bairro:'" onfocus="this.value=''">
				</div>
				<div class="form-group inp4">
					<input type="text" class="form-control" value="complemento:" onblur="this.value='complemento:'" onfocus="this.value=''">
				</div>
			</div>
			<div class="form-inline formproduto form4">
				<div class="form-group inp1">
					<input type="text" class="form-control" value="cidade:" onblur="this.value='cidade:'" onfocus="this.value=''">
				</div>
				<div class="form-group inp2">
					<input type="text" class="form-control" value="estado:" onblur="this.value='estado:'" onfocus="this.value=''">
				</div>
			</div>
			<div class="form-inline formproduto form5">
				<div class="form-group inp1">
					<textarea class="form-control" cols="30" rows="10"></textarea>
					<a href="#inline1" class="btlaranja wow fadeInDown pull-right fancybox" data-wow-delay=".5s">cadastrar</a>
				</div>
			</div>
		</div>
	</section>
	<div id="inline1" class="col-md-12" style="display: none;">
		<div>
			<p class="col-md-2">
				<img src="/agisupri/design_core/img/cadastro.png" class="img-responsive" />
			</p>
			<p class="col-md-8">
				Parabéns, seu cadastro foi realizado com sucesso <br /> Seja bem-vindo ao sistema da agisupri
			</p>
		</div>
		<div>
			<p class="col-md-6">
				Para começar a realizar suas compras <br> <a href="#inline1" class="btlaranja">clique aqui</a>
			</p>
			<p class="col-md-4">
				<img src="/agisupri/design_core/img/compras.png" class="img-responsive" />
			</p>
		</div>
	</div>
	<!-- Rodapé -->
	<?php include 'application/views/templates/header.php';?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/agisupri/design_core/bootstrap-assets/js/bootstrap.min.js"></script>
	<script src="/agisupri/design_core/js/custom.js"></script>
	<!-- plugins -->
	<script src="/agisupri/design_core/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>
	<script src="/agisupri/design_core/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="/agisupri/design_core/js/jquery.easing.min.js"></script>
	<script src="/agisupri/design_core/plugins/waypoints/jquery.waypoints.min.js"></script>
	<script src="/agisupri/design_core/plugins/countTo/jquery.countTo.js"></script>
	<script src="/agisupri/design_core/plugins/inview/jquery.inview.min.js"></script>
	<script src="/agisupri/design_core/plugins/Lightbox/dist/js/lightbox.min.js"></script>
	<script src="/agisupri/design_core/plugins/WOW/dist/wow.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
</body>
</html>