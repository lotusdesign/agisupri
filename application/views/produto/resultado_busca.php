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
<link href="/agisupri/design_core/bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Style -->
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
	<section id="fundobranco">
		<div class="container">
		<h2><div>Resultados da busca por "<?php echo $pesquisa ?>"</div></h2>


		
		<?php foreach ($resultado as $res) { ?>
		
			<!--<div class="col-md-5">
				<a href="/agisupri/index.php/produto/detalhe/<?php echo $res['id_produto']?>">
					<img src="/agisupri/design_core/img/produtos/<?php echo $res["imagem_produto1"]?>" width="60">
					<?php echo $res["nome"]?>
					<?php echo $res["descricao"]?>
				</a>
			</div>
			-->
			<div class="col-md-3 col-xs-6 resultados">
				<div class="item">
					<div class="box"> 
						<img src="/agisupri/design_core/img/produtos/<?php echo $res["imagem_produto1"]?>">
						<p><?php echo $res["nome"]?></p>
						<p><?php echo $res["descricao"]?></p>
						<div class="legenda-box">
							<div class="legenda-box-conteudo">
								<div class="ver-produto text-faded">
									<a href="/agisupri/index.php/produto/detalhe/<?php echo $res['id_produto']?>">
										<img src="/agisupri/design_core/img/ver.png" />
										<p>Ver produto</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
	</section>
	<!-- Rodapé -->
	<?php include 'application/views/templates/footer.php';?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/agisupri/design_core/bootstrap-assets/js/bootstrap.min.js"></script>
	<script src="/agisupri/design_core/js/custom.js"></script>
	<!-- Plugins -->
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