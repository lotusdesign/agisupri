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
	<section>
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Categorias</a></li>
			</ul>
		</div>
		<div class="faixacategoria listasub">
			<div class="container">
				<ul class="list-inline">
				<?php foreach ($segmentos as $segmento) { ?>
				<li><a class="atv" href=""><?php echo $segmento["nome_segmento"]?></a>
						<div class="faixacont">
							<div class="container">
								<ul class="list-inline">
								<?php foreach ($segmento['categorias'] as $categoria) { ?>
								<li><a href=""><?php echo $categoria["nome_categoria"]?></a></li>
								<?php } ?>
							</ul>
							</div>
						</div></li>
				<?php } ?>
			</ul>
			</div>
		</div>
	</section>
	<section class="produtosinterna" id="produtos">
		<div class="container owlslide produtoscarousel">
			<div id="owl-demo" class="owl-carousel owl-theme"></div>
			<ul class="paginacao">
				<li><a href=""><img src="/agisupri/design_core/img/seta-esq.png" /></a></li>
				<li><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">...</a></li>
				<li><a href=""><img src="/agisupri/design_core/img/seta-dir.png" /></a></li>
			</ul>
		</div>
	</section>
	<!-- rodapé -->	
<?php include 'application/views/templates/footer.php';?>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/agisupri/design_core/bootstrap-assets/js/bootstrap.min.js"></script>
	<script src="/agisupri/design_core/js/custom.js"></script>
	<!-- plugins -->
	<script src="/agisupri/design_core/js/jquery.easing.min.js"></script>
	<script src="/agisupri/design_core/plugins/waypoints/jquery.waypoints.min.js"></script>
	<script src="/agisupri/design_core/plugins/countTo/jquery.countTo.js"></script>
	<script src="/agisupri/design_core/plugins/inview/jquery.inview.min.js"></script>
	<script src="/agisupri/design_core/plugins/Lightbox/dist/js/lightbox.min.js"></script>
	<script src="/agisupri/design_core/plugins/WOW/dist/wow.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		function listar_produtos(pagina_inicial) {
			$.ajax({
				dataType:'json',
				url: '/agisupri/index.php/produto/listar_produtos',						
				data: inicial=pagina_inicial,			
				success : function (data) {							
					popular_lista_produtos(data);						
				},						
				error: function (data) {				
					alert("Ocorreu um erro ao listar produtos!");					
				}
			});
		}
		
		function popular_lista_produtos(data) {	
			produtos = data.produtos;	
		
			for(i = 0; i < produtos.length; i ++) {		
				produto = $("#owl-demo").html();		
				produto += "<div class='item'>";		
				produto += "<div class='box'> <img src='/agisupri/design_core/img/produtos/" +  produtos[i].imagem_produto1 + "'/>";		
				produto += "<p>" + produtos[i].nome + "</p>";			
				produto += "<div class='legenda-box'>";			
				produto += "<div class='legenda-box-conteudo'>";		
				produto += "<div class='ver-produto text-faded'>";			
				produto += "<a href='/agisupri/index.php/produto/detalhe/" + produtos[i].id_produto + "'>";			
				produto += "<img src='/agisupri/design_core/img/ver.png' />";			
				produto += "<p>Ver produto</p>";			
				produto += "</div>";			
				produto += "</div>";			
				produto += "</div>";			
				produto += "</div>";			
				produto += "</a>";			
				produto += "</div>";			
		
				$("#owl-demo").html(produto);		
			}
		}	
		
		listar_produtos(1);	
	</script>
</body>
</html>
