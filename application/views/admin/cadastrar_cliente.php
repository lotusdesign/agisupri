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
				<a class="navbar-brand" href="index.html">AgiSupri Admin</a>
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
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Nome Usuário</b></a></li>
			</ul>
			<?php include 'application/views/templates/menu_admin.php';?>
			<!-- /.navbar-collapse -->
		</nav>
		<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Cadastrar Clientes</h1>
						<ol class="breadcrumb">
							<li><i class="fa fa-dashboard"></i> <a href="index.html">Tela Inicial</a></li>
							<li class="active"><i class="fa fa-file"></i> Cadastrar Clientes</li>
						</ol>
					</div>
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-6">
						<form role="form" class="formcliente" action="/agisupri/index.php/admin/salvar_cliente" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Nome:</label><input type="text" name="nome" class="form-control">
							</div>
							
							<div class="form-group">
								<label>E-mail:</label><input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Cargo:</label><input type="text" name="cargo" class="form-control">
							</div>
							<div class="form-group">
								<label>Telefone:</label><input type="text" name="telefone" class="form-control">
							</div>
							<div class="form-group">
								<label>Celular:</label><input type="text" name="celular" class="form-control">
							</div>
							<div class="form-group">
								<label>Razão Social:</label><input type="text" name="razaoSocial" class="form-control">
							</div>
							<div class="form-group">
								<label>CNPJ:</label><input type="text" name="cnpj" class="form-control">
							</div>
							<div class="form-group">
								<label>Endereço:</label><input type="text" name="endereco" class="form-control">
							</div>
							<div class="form-group">
								<label>Número:</label><input type="text" name="numero" class="form-control">
							</div>
							<div class="form-group">
								<label>Bairro:</label><input type="text" name="bairro" class="form-control">
							</div>
							<div class="form-group">
								<label>Complemento:</label><input type="text" name="complemento" class="form-control">
							</div>
							<div class="form-group">
								<label>Cidade:</label><input type="text" name="cidade" class="form-control">
							</div>
							<div class="form-group">
								<label>Estado:</label><input type="text" name="estado" class="form-control">
							</div>
							<div class="form-group">
								<label>Nome de Usuário*:</label><input type="text" name="nome_usuario" class="form-control">
							</div>
							<div class="form-group">
								<label>Senha*:</label><input type="password" name="senha" class="form-control">
							</div>
							<div class="form-group">
								*Somente usuários com nome de usuário e senha poderão acessar a área de clientes na Home do site.
							</div>
							<div class="form-group">
								<label>Observaçoes:</label><br/><textarea name="observacoes" class="form-control"></textarea>
							</div>
							
                            <div class="form-group">
                                <label>Logotipo</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file glyphicon glyphicon-folder-open">
                                            <span>Carregar Logotipo</span> <input type="file" name="logotipo">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly><br/>
                                </div>
                            *Clientes com logotipos cadastrados aparecerão na home do site
                            </div>
                            <br/>
							<button type="submit" class="btn btn-sm btn-primary">ADICIONAR CLIENTE</button>
							<button type="reset" class="btn btn-sm btn-primary">CANCELAR</button>
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
	<!-- Bootstrap Core JavaScript -->
	<script src="/agisupri/design_admin/js/bootstrap.min.js"></script>
	<script>
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

      <?php if (isset($mensagem)) { ?>
		alert('<?php echo $mensagem; ?>');
      <?php } ?>
    </script>
	
</body>
</html>
