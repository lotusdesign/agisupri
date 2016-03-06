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
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li><a href="/agisupri/index.php/admin/view"><i class="fa fa-fw fa-dashboard"></i> Tela Inicial</a></li>
					<li><a href="/agisupri/index.php/admin/cadastrar_segmento"><i class="fa fa-star"></i> Cadastrar Segmento</a></li>
					<li><a href="/agisupri/index.php/admin/cadastrar_categoria"><i class="fa fa-star"></i> Cadastrar Categoria</a></li>
					<li><a href="/agisupri/index.php/admin/cadastrar_produto"><i class="fa fa-star"></i> Cadastrar Produto</a></li>
					<li class="active"><a href="/agisupri/index.php/admin/adminstrar_produto"><i class="fa fa-star"></i> Administrar Produtos</a></li>
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
						<h1 class="page-header">Listar Produto</h1>
						<ol class="breadcrumb">
							<li><i class="fa fa-dashboard"></i> <a
								href="/agisupri/index.php/admin/view">Tela Inicial</a></li>
							<li class="active"><i class="fa fa-file"></i> Listar Produto</li>
						</ol>
					</div>
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-6">
						<form role="form" class="formcliente"
							action="/agisupri/index.php/admin/salvar_produto"
							enctype="multipart/form-data" method="post">
							<div class="form-group">

								<div class="table-responsive">
									<table class="table table-bordered table-hover tabelacliente">
										<thead>
											<tr>
												<th>Imagem</th>
												<th>Nome</th>
												<th>Referência</th>
												<th>Descrição</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($produtos as $produto) { ?>
												<tr>
												<td><a href="editar-produto.html"><img
														src="/agisupri/design_core/img/produtos/<?php echo $produto['imagem_produto1'] ?>"
														height="40"></a></td>
												<td><a href="editar-produto.html"><?php echo $produto['nome'] ?></a></td>
												<td><a href="editar-produto.html"><?php echo $produto['referencia'] ?></a></td>
												<td><a href="editar-produto.html"><?php echo $produto['descricao'] ?></a></td>
												<td>
													<a href="/agisupri/index.php/admin/excluir_produto/<?php echo $produto['id_produto'] ?>" 
														title="Excluir" class="fa fa-times"></a> 
													<a href="editar-produto.html" title="Editar" class="fa fa-pencil-square-o"></a>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
							<br />
						</form>
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
	<script>
	
	$('#combo_segmento').on('change', function() {
		$.ajax({
			dataType:'json',
			url: '/agisupri/index.php/admin/obter_categorias_combo/' + $('#combo_segmento').val(),
			success : function (data) {
				categorias = data.categorias;
				$('#combo_categoria option[value!=0]').remove();
				
				$.each(categorias, function (i, item) {
				    $('#combo_categoria').append($('<option>', { 
				        value: item.id_categoria,
				        text : item.nome_categoria
				    }));
				});
			},
			error: function (data) {
				alert("Ocorreu um erro ao listar produtos!");					
			}
		});
	});
	
    $(document).on('change', '.btn-file :file', function() {
      var input = $(this),
          numFiles = input.get(0).files ? input.get(0).files.length : 1,
          label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [numFiles, label]);
    });

    $(document).ready( function() {
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            } 
        });
    });

	<?php if ($mensagem != '') { ?>
		alert('<?php echo $mensagem; ?>
		');
	<?php } ?>
		
	</script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/agisupri/design_admin/js/bootstrap.min.js"></script>
</body>
</html>