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
			<h2><div>Itens do Pedido de orçamento</div></h2>
			<div class="col-xs-12 resultados table-responsive">
				<table cellpadding="0" cellspacing="0" class="tabela">
					<?php if(isset($pedido)) { ?>
						<thead>
							<tr>
								<th>Foto</th>
								<th>Nome do Produto</th>
								<th>Cor</th>
								<th>Descrição</th>
								<th>Quantidade</th>
								<th>Excluir</th>
							</tr>
						</thead>
						<tbody>
					<?php foreach ($pedido as $item) { ?>
					<tbody>
						<tr>
							<td><img src="/agisupri/design_core/img/produtos/<?php echo $item['imagem_produto']; ?>" width="50"></td>
							<td><?php echo $item['nome_produto']; ?></td>
							<td><?php echo $item['nome_cor']; ?></td>
							<td><?php echo $item['descricao']; ?></td>
							<td><?php echo $item['quantidade']; ?></td>
							<td>
								<a href="/agisupri/index.php/orcamento/excluir_item/<?php echo $item['id_produto'] ?>" 
									title="Excluir" class="fa fa-times"></a> 
							</td>
						</tr>
					<?php } 
						} else { 
					?>
						<tr><td>Não há itens adicionados ao carrinho</td></tr>
					<?php } ?>
					</tbody>
				</table>
				<?php if(isset($pedido)) { ?>
				<br/><br/>
				<p align="left"><a href="/agisupri/index.php/orcamento/solicitar" class="btlaranja">Solicitar Orçamento</a></p>
				<?php } ?>
			</div>
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