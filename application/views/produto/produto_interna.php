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
<link href="/agisupri/design_core/css/jquery.fancybox.css" rel="stylesheet">
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
				<li><a href="/agisupri/index.php/produto/lista">PRODUTOS</a></li>
					<?php /*<li><a href="#"><?php echo $produto_detalhe["segmento"]["nome_segmento"]; ?></a></li>
				<li><a href="#"><?php echo $produto_detalhe["categoria"]["nome_categoria"]; ?></a></li>
				<li><a href="#"><?php echo $produto_detalhe["nome"];  ?></a></li>*/?>
			</ul>
		</div>
		<div class="faixacategoria listasub">
			<div class="container">
				<ul class="list-inline">
					<?php /*
					<?php foreach ($segmentos as $segmento) { ?>
					<li><a class="atv" href=""><?php echo $segmento["nome_segmento"]?></a>
						<div class="faixacont">
							<div class="container">
								<ul class="list-inline">
									<?php foreach ($segmento['categorias'] as $categoria) { ?>
									<li><a href="/agisupri/index.php/produto/buscar_categoria/<?php echo $categoria["id_categoria"]?>">
										<?php echo $categoria["nome_categoria"]?>
									</a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</li>
					<?php } */ ?>
					
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="col-md-5 produtonome">
				<h1><?php echo $produto_detalhe["nome"]; ?></h1>
				<div id="sync1" class="owl-carousel">
					<div class="item">
						<a class="fancybox-effects-a" href="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto1"]?>" target="_blank">
							<img src="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto1"]?>" />
						</a>
					</div>
					<div class="item">
						<a class="fancybox-effects-a" href="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto2"]?>" target="_blank">
							<img src="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto2"]?>" />
						</a>
					</div>
					<div class="item">
						<a class="fancybox-effects-a" href="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto3"]?>" target="_blank">
							<img src="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto3"]?>" />
						</a>
					</div>
				</div>
				<div id="sync2" class="owl-carousel">
					<div class="item">
						<a href="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto1"]?>" target="_blank">
							<img src="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto1"]?>" />
						</a>
					</div>
					<div class="item">
						<a href="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto2"]?>" target="_blank">
							<img src="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto2"]?>" />
						</a>
					</div>
					<div class="item">
						<a href="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto3"]?>" target="_blank">
							<img src="/agisupri/design_core/img/produtos/<?php echo $produto_detalhe["imagem_produto3"]?>" />
						</a>
					</div>
				</div>
			</div>
			<form id="frm_orcamento" action="/agisupri/index.php/orcamento/salvar" method="post">
				<input type="hidden" name="id_produto" value="<?php echo $produto_detalhe["id_produto"]; ?>">
				<input type="hidden" name="descricao" value="<?php echo $produto_detalhe["descricao"]; ?>">
				<input type="hidden" name="nome_cor" id="nome_cor">
				<input type="hidden" name="nome_produto" value="<?php echo $produto_detalhe["nome"]; ?>">
				<input type="hidden" name="imagem_produto" value="<?php echo $produto_detalhe["imagem_produto1"]?>">
				<div class="col-md-7 ref">
					<p><strong>Referência:</strong> <?php echo $produto_detalhe["referencia"]; ?></p>
					<p>Preencha todos os campos abaixo para fazer seu orçamento:</p>
					<div class="form-inline formproduto form1">
						<div class="form-group">
							<select name="id_cor" class="form-control" id="cor">
								<option value="0">Selecione a cor</option>
								<?php foreach ($cores as $cor) { ?>
									<option value="<?php echo $cor["id_cor"]?>"><?php echo $cor["nome_cor"]?></option>
								<?php } ?>
								<option value="1">Vermelho</option>
								<option value="2">Verde</option>
								<option value="3">Azul</option>
							</select>
						</div>
						<div class="form-group">
							<?php echo $produto_detalhe['altura']?>
							<?php echo $produto_detalhe['largura']?>
							<?php echo $produto_detalhe['comprimento']?>
							<?php echo $produto_detalhe['capacidade']?>
						</div>
					</div>
					<div class="form-inline formproduto form2">
						<div class="form-group">
							<input type="text" class="form-control" value="AGISUPRI" readonly="readonly">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="quantidade" placeholder="Qtde:" id="quantidade">
						</div>
					</div>
					<div class="form-inline formproduto form2">
						<div class="form-group">
							<input type="text" class="form-control" name="nome_cliente" placeholder="Nome:" id="nome_cliente">
						</div>
					</div>
					<div class="form-inline formproduto form2">
						<div class="form-group">
							<input type="text" class="form-control" name="email" placeholder="E-mail:" id="email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="telefone" placeholder="Telefone:" id="telefone">
						</div>
					</div>
					<div class="form-inline formproduto form2">
						<div class="form-group">
							<input type="text" class="form-control" name="empresa" placeholder="Empresa:" id="empresa">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="cnpj" placeholder="CNPJ:" id="cnpj">
						</div>
					</div>
					<br/><a href="javaScript:enviar_orcamento();" class="btlaranja wow fadeInDown" data-wow-delay=".5s">Adicionar ao carrinho</a>
				</div>
			</form>
		</div>
	</section>
	<section class="desc">
		<div class="container">
			<h2>descrição</h2>
			<p><?php echo $produto_detalhe['descricao']?></p>
		</div>
	</section>
	<section class="faixacategoria relacionados">
		<div class="container">produtos relacionados</div>
	</section>
	<section class="produtosinterna" id="produtos">
		<div class="container owlslide">
			<div id="owl-demo" class="owl-carousel owl-theme">
				<?php /*
				<?php foreach ($produtos_relacionados as $relacionado) { ?>
				<div class="item">
					<div class="box" href="/agisupri/index.php/produto/detalhe/<?php echo $relacionado['id_produto']?>"> 
						<img src="/agisupri/design_core/img/produtos/<?php echo $relacionado['imagem_produto1']?>" />
						<p><?php echo $relacionado['nome']?></p>
						<div class="legenda-box">
							<div class="legenda-box-conteudo">
								<div class="ver-produto text-faded">
									<a href="/agisupri/index.php/produto/detalhe/<?php echo $relacionado['id_produto']?>">
										<img src="/agisupri/design_core/img/ver.png" />
										<p>Ver produto</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } */ ?>
			</div>
			<a class="prev"><img src="/agisupri/design_core/img/seta-esq.png" /></a> <a class="next"><img src="/agisupri/design_core/img/seta-dir.png" /></a>
		</div>

	</section>
	<!-- rodapé -->
	<?php include 'application/views/templates/footer.php';?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/agisupri/design_core/bootstrap-assets/js/bootstrap.min.js"></script>
	<script src="/agisupri/design_core/js/custom.js"></script>
	<!-- plugins -->
	<script src="/agisupri/design_core/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="/agisupri/design_core/js/jquery.easing.min.js"></script>
	<script src="/agisupri/design_core/plugins/waypoints/jquery.waypoints.min.js"></script>
	<script src="/agisupri/design_core/plugins/countTo/jquery.countTo.js"></script>
	<script src="/agisupri/design_core/plugins/inview/jquery.inview.min.js"></script>
	<script src="/agisupri/design_core/plugins/Lightbox/dist/js/lightbox.min.js"></script>
	<script src="/agisupri/design_core/plugins/WOW/dist/wow.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="/agisupri/design_core/js/jquery.fancybox.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});
		});
	</script>
	<script>	
	function enviar_orcamento() {
		if(validar()) {
			$("#nome_cor").val($("#cor :selected").text());
			$("#frm_orcamento").submit();
			/*
			$.ajax({
				dataType:'json',			
				url: '/agisupri/index.php/orcamento/salvar',			
				data: $("#frm_orcamento").serialize(),
				success : function (data) {
					$("#frm_orcamento").trigger("reset");				
					alert(data);
				},			
				error: function (data) {				
					alert("Ocorreu um erro ao salvar o contato!");			
				}
			});
			*/
		}
	}

	function validar() {
		mensagem = "";

		if($("#cor").val() == 0) {
			mensagem += "É obrigatório selecionar a cor do produto.\n";
		}
		if($("#quantidade").val() == "") {
			mensagem += "É obrigatório informar a quantidade.\n";
		}
		if($("#nome_cliente").val() == "") {
			mensagem += "É obrigatório informar seu nome.\n";
		}
		if($("#email").val() == "") {
			mensagem += "É necessário informar um e-mail para contato.\n";
		}
		if($("#telefone").val() == "") {
			mensagem += "É necessário informar um telefone para contato.\n";
		}
		if($("#empresa").val() == "") {
			mensagem += "É necessário informar a Empresa.\n";
		}
		if($("#cnpj").val() == "") {
			mensagem += "É necessário informar o CNPJ da Empresa.\n";
		}

		if(mensagem.length > 0) {
			alert(mensagem);
			return false;
		}
		return true;
	}
</script>

</body>
</html>