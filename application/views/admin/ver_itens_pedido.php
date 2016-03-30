<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Admin AgiSupri</title>
<!-- Bootstrap Core CSS -->
<link href="/agisupri/design_admin/css/bootstrap.min.css"
	rel="stylesheet">
<!-- Custom CSS -->
<link href="/agisupri/design_admin/css/sb-admin.css" rel="stylesheet">
<!-- Custom Fonts -->
<link
	href="/agisupri/design_admin/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div id="wrapper">
		<!-- Navegação -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">AgiSupri Admin</a>
			</div>
			<ul class="nav navbar-right top-nav">
				<li class="dropdown">
					<ul class="dropdown-menu message-dropdown">
						<li class="message-preview"><a href="#">
								<div class="media">
									<span class="pull-left"> <img class="media-object"
										src="http://placehold.it/50x50" alt="">
									</span>
									<div class="media-body">
										<h5 class="media-heading">
											<strong>Usuário</strong>
										</h5>
									</div>
								</div>
						</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"><i class="fa fa-user"></i> Nome Usuário</b></a></li>
			</ul>
			<?php include 'application/views/templates/menu_admin.php';?>
			<!-- /.navbar-collapse -->
		</nav>
		<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Orçamentos</h1>
						<ol class="breadcrumb">
							<li><i class="fa fa-dashboard"></i> <a href="/agisupri/index.php/admin/view">Tela Inicial</a></li>
							<li><i class="fa fa-file"></i> <a href="/agisupri/index.php/admin/ver_orcamentos">Lista de Orçamentos</a></li>
							<li class="active"><i class="fa fa-file"></i>Itens do Pedido</li>
						</ol>
					</div>
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<div class="table-responsive">
								Código do Orçamento: <?php echo $orcamento[0]['id_orcamento']; ?><br/>
								Nome do Cliente: <?php echo $orcamento[0]['nome_cliente']; ?><br/>
								e-mail: <?php echo $orcamento[0]['email']; ?><br/>
								Telefone: <?php echo $orcamento[0]['telefone']; ?><br/>
								Empresa: <?php echo $orcamento[0]['empresa']; ?><br/>
								CNPJ: <?php echo $orcamento[0]['cnpj']; ?><br/><br/>
								
								<b>Itens do Pedido: </b><br>

								<table border='1' cellpading='0' cellspacing='0'>
								<tr>
									<td><b>Produto</b></td>
									<td><b>Cor</b></td>
									<td><b>Quantidade</b></td>
								</tr>
								<?php foreach ($orcamento as $orc) { ?>
									<tr>
									<td><?php echo $orc['nome'] ?></td>
									<td><?php echo $orc['nome_cor']  ?></td>
									<td><?php echo $orc['quantidade']  ?></td>
									</tr>
								<?php } ?>
								</table>
							</div>
						</div>
						<br />
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!-- jQuery -->
	<script src="/agisupri/design_admin/js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/agisupri/design_admin/js/bootstrap.min.js"></script>
</body>
</html>