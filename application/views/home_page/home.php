<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>AgiSupri</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
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
	<div id="owl-hero" class="owl-carousel owl-theme">
		<div class="item" style="background-image: url(/agisupri/design_core/img/banner.jpg)">				
			<div class="caption">					
				<h2><i>Rápido</i>, Simples e <br />inteligente</h2>					
				<h3>bem-vindo à agisupri distribuidora</h3>				
			</div>
		</div>			
		<div class="item" style="background-image: url(/agisupri/design_core/img/banner2.jpg)">				
			<div class="caption">					
				<h2>DEIXA QUE A GENTE <br/>CUIDA PRA VOCÊ</h2>					
				<h3>CONHEÇA NOSSO SISTEMA DE LOGÍSTICA</h3>				
			</div>			
		</div>			
		<div class="item" style="background-image: url(/agisupri/design_core/img/banner3.jpg)">				
			<div class="caption">					
				<h2>CUIDANDO DA SUA EMPRESA</h2>					
				<h3>NOSSA CONSULTORIA IRÁ AJUDAR NA BUSCA E HOMOLOGAÇÃO <br/> dos itens necessários para seu negócio</h3>				
			</div>
		</div>
	</div>
</section>	
<!-- Quem somos -->	
<section id="quemsomos">		
	<div class="container">			
		<h2><div>Quem somos</div></h2>			
		<p>A Agisupri é uma empresa especializada em distribuição e logística de produtos. Entregamos uma vasta gama de produtos de diversas categorias do mercado e fazemos qualquer que seja a sua necessidade possível. Distribuímos produtos com agilidade, rapidez e qualidade. O nosso compromisso é oferecer sempre os melhores produtos e serviços do mercado, com investimentos justos visando a lucratividade e necessidade do cliente.</p>			
		<p><strong>Ser um dos heads do mercado no segmento de distribuição é o nosso objetivo. </strong> Transparência, ética, integridade, compromisso, cumplicidade, lealdade e parceria. Esses são os pilares de sustentação da Agisupri, uma empresa que visa sempre o melhor para seus clientes, parceiros e colaboradores.</p>		
	</div>	
</section>	
<!-- Serviços -->	
<section id="servicos">		
	<div class="container">			
		<h2><div>Serviços</div></h2>			
		<div class="col-md-3">
			<a href="/agisupri/index.php/servicos/distribuicao">
				<img src="/agisupri/design_core/img/distribuicao.png" class="wow fadeInDown" data-wow-delay=".3s" />				
				<h3>distribuição</h3>
				<p><strong>Rápido</strong>, mantendo sempre a qualidade dos serviços.</p>
			</a>			
		</div>			
		<div class="col-md-3">
			<a href="/agisupri/index.php/servicos/logistica">				
				<img src="/agisupri/design_core/img/logistica.png" class="wow fadeInDown" data-wow-delay=".3s" />				
				<h3>logística</h3>
				<p><strong>Simples,</strong> sem deixar de ser sofisticado.</p>
			</a>			
		</div>			
		<div class="col-md-3">
			<a href="/agisupri/index.php/servicos/consultoria">
				<img src="/agisupri/design_core/img/consultoria.png" class="wow fadeInDown" data-wow-delay=".3s" />				
				<h3>consultoria</h3>
				<p><strong>Inteligente</strong>, pensando sempre em frente.</p>
			</a>			
		</div>			
		<div class="col-md-3">
			<a href="/agisupri/index.php/servicos/revenda">				
			<img src="/agisupri/design_core/img/revenda.png" class="wow fadeInDown" data-wow-delay=".3s" />				
			<h3>revenda</h3>
			<p><strong>Para você</strong>,Suprindo sempre a sua necessidade</p>
			</a>		
		</div>		
	</div>	
</section>	
<!-- Faixa Azul  -->	
<section id="faixazul">		
	<p class="wow fadeInDown" data-wow-delay=".3s">Distribuímos em todo o território nacional.<br />Procura soluções em logística e distribuição?</p>		
	<a href="#contato" class="btlaranja wow fadeInDown" data-wow-delay=".5s">entre em contato</a>	
</section>	
<!-- Produtos -->	
<section id="produtos">		
	<div class="container owlslide">			
		<h2><div>Produtos</div></h2>
		<div id="owl-demo" class="owl-carousel owl-theme">
			<?php for( $i = 0; $i < count($produtos); ++$i ) {?>
			<div class="item">
				<div class="box"> 
					<img src="/agisupri/design_core/img/produtos/<?php echo $produtos[$i]['imagem_produto1']?>" />							
					<p><?php echo $produtos[$i]['nome']; ?></p>
					<div class="legenda-box">
						<div class="legenda-box-conteudo">
							<div class="ver-produto text-faded">
								<a href="/agisupri/index.php/produto/detalhe/<?php echo $produtos[$i]['id_produto']?>">
									<img src="/agisupri/design_core/img/ver.png" />
									<p>Ver produto</p>
								</a>
							</div>
						</div>
					</div>						
				</div>					
			</div>				
			<?php } ?>				
		</div>
		<a class="prev"><img src="/agisupri/design_core/img/seta-esq.png" /></a> 
		<a class="next"><img src="/agisupri/design_core/img/seta-dir.png" /></a> 
		<a href="/agisupri/index.php/produto/lista" class="btlaranja wow fadeInDown" data-wow-delay=".5s">ver todos</a>
	</div>
</section>	
<!-- Clientes -->	
<section id="clientes">		
	<div class="container">			
		<h2><div>Clientes</div></h2>			
		<ul>
			<?php for( $i = 0; $i < count($clientes); ++$i ) {?>
				<li class="col-md-2"><img src="/agisupri/design_core/img/logotipos/<?php echo $clientes[$i]['logotipo_path']?>" class="img-responsive wow fadeIn" data-wow-delay=".5s" /></li>				
			<?php } ?>			
		</ul>		
	</div>	
</section>	
<!-- contato -->	
<form action="" id="frm_contato" name="frm_contato" method="post">		
	<section id="contato">			
	<div class="container">				
		<h2><div>Contato</div></h2>				
		<p class="duv">Tem dúvidas, sugestões ou pedidos?<br /> Prencha o formulário abaixo e entraremos em contato com você!</p>				
		<div class="col-md-6 formcontato">					
			<div class="form-group">						
				<input type="text" class="form-control" name="nome" placeholder="Nome:">					
			</div>					
			<div class="form-group">						
				<input type="text" class="form-control" name="email" placeholder="E-mail:">					
			</div>					
			<div class="form-inline">						
				<div class="form-group">							
					<input type="text" class="form-control pull-left" name="telefone" placeholder="Telefone:">						
				</div>						
				<div class="form-group">							
					<input type="text" class="form-control pull-right" name="empresa" placeholder="Empresa:">						
				</div>					
			</div>					
			<div class="form-group">						
				<input type="text" class="form-control" name="assunto" placeholder="Assunto:">					
			</div>					
			<div class="form-group">						
				<textarea cols="30" rows="10" name="texto"></textarea>					
			</div>					
			<input type="button" onclick="enviar();" class="btlaranja wow fadeInDown" data-wow-delay=".5s" value="enviar" />				
		</div>				
		<div class="col-md-6 cont">					
			<h3>Contato</h3>					
			<p>11 99630 7318 <br> comercial@agisupri.com.br</p>					
			<h3>Local</h3>					
			<p>Rua Alameda Xingu, 976 Alphaville <br> Barueri - SP <br> CEP 06455-030</p>				
		</div>			
	</div>		
</section>	
</form>	
<!-- rodapé -->
<?php include 'application/views/templates/footer.php';?>

<script src="/agisupri/design_admin/js/jquery.js"></script>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	
<script src="/agisupri/design_core/bootstrap-assets/js/bootstrap.min.js"></script>	
<script src="/agisupri/design_core/js/custom.js"></script>	
<!-- Plugins -->	
<script src="/agisupri/design_core/plugins/owl-carousel/owl.carousel.min.js"></script>	
<script src="/agisupri/design_core/js/jquery.easing.min.js"></script>	
<!-- script src="/agisupri/design_core/plugins/waypoints/jquery.waypoints.min.js"></script -->	
<script src="/agisupri/design_core/plugins/countTo/jquery.countTo.js"></script>	
<script src="/agisupri/design_core/plugins/inview/jquery.inview.min.js"></script>	
<script src="/agisupri/design_core/plugins/Lightbox/dist/js/lightbox.min.js"></script>	
<script src="/agisupri/design_core/plugins/WOW/dist/wow.min.js"></script>	
<script src="https://maps.googleapis.com/maps/api/js"></script>		
<script>	
	function enviar() {		
		$.ajax({			
			dataType:'json',
			url: '/agisupri/index.php/contato/salvar_contato',			
			data: $("#frm_contato").serialize(),			
			success : function (data) {				
				$("#frm_contato").trigger("reset");				
				alert(data);			
			},			
			error: function (data) {				
				alert("Ocorreu um erro ao salvar o contato!");			
			}		
		});	
	}
</script>
</body>
</html>