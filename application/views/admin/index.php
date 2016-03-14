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
<link href="/agisupri/design_admin/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="/agisupri/design_admin/css/sb-admin.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="/agisupri/design_admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/agisupri/index.php/admin/view">AgiSupri Admin</a>
			</div>
			<ul class="nav navbar-right top-nav">
				<li class="dropdown">
					<ul class="dropdown-menu message-dropdown">
						<li class="message-preview"><a href="#">
								<div class="media">
									<span class="pull-left"> <img class="media-object" src="http://placehold.it/50x50" alt="">
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
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $usuario['nome_usuario']?></b></a></li>
			</ul>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li class="active"><a href="/agisupri/index.php/admin/view"><i class="fa fa-fw fa-dashboard"></i> Tela Inicial</a></li>
					<li><a href="/agisupri/index.php/admin/cadastrar_segmento"><i class="fa fa-star"></i> Cadastrar Segmentos</a></li>
					<li><a href="/agisupri/index.php/admin/cadastrar_categoria"><i class="fa fa-star"></i> Cadastrar Categorias</a></li>
					<li><a href="/agisupri/index.php/admin/cadastrar_produto"><i class="fa fa-star"></i> Cadastrar Produtos</a></li>
					<li><a href="/agisupri/index.php/admin/administrar_produtos"><i class="fa fa-star"></i> Administrar Produtos</a></li>
					<li><a href="/agisupri/index.php/admin/cadastrar_cliente"><i class="fa fa-user"></i> Cadastrar Clientes</a></li>
					<li><a href="/agisupri/index.php/admin/criar_catalogo"><i class="fa fa-user"></i> Criar Catálogo</a></li>
					<li><a href="/agisupri/index.php/admin/ver_orcamentos"><i class="fa fa-user"></i> Visualizar Orçamentos</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>
		<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							Olá <small> <?php echo $usuario['nome_usuario']?></small>
						</h1>
						<b>Cadastrar Segmentos</b> - Tela para cadastro de segmentos de produtos.<br/>
						<b>Cadastrar Categorias</b> - Tela para cadastro de categorias de produtos. É necessário cadastrar o segmento.<br/>
						<b>Cadastrar Produtos</b> - Tela para cadastro de produtos. É necessário Cadastrar Categoriass.<br/>
						<b>Administrar Produtos</b> - Nessa tela é possível listas, editar e excluir produtos.<br/>
						<b>Cadastrar Clientes</b> - Tela para cadastro de clientes. É possível selecionar os clientes que serão apresentados na home do site.<br/>
						<b>Criar Catálogo</b> - Tela para criação de catálogos de produtos por cliente.<br/>
						<b>Visualizar Orçamentos</b> - Nessa tela são apresentados os orçamentos solicitados pelos clientes no site.<br/>
						<b>Usuários</b> - Tela para cadastro, edição e exclusão de usuários do Painel de Administração.<br/>
						<br/><br/>
						<br/><br/>
						<br/><br/>
						<br/><br/>
					</div>
				</div>
				<!-- /.row -->
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
