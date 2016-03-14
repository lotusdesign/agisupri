<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AgiSupri</title>

<!-- CSS -->
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="/agisupri/design_admin/css/bootstrap.min.css">
<link rel="stylesheet" href="/agisupri/design_admin/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/agisupri/design_admin/css/form-elements.css">
<link rel="stylesheet" href="/agisupri/design_admin/css/style.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/agisupri/design_admin/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/agisupri/design_admin/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/agisupri/design_admin/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/agisupri/design_admin/assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>
	<div class="transparencia"></div>
	<!-- Top content -->
	<div class="top-content">

		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 text">
						<h1>
							<strong>AgiSupri</strong>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 form-box">
						<div class="form-top">
							<div class="form-top-left">
								<p>Coloque seu usuário e senha para entrar no administrador:</p>
							</div>
							<div class="form-top-right">
								<i class="fa fa-lock"></i>
							</div>
						</div>
						<div class="form-bottom">
							<form class="login-form" role="form" name="frm_login" action="/agisupri/index.php/admin/logar" method="post">
								<div class="form-group">
									<label class="sr-only" for="usuario">Username</label> 
										<input type="text" name="txt_usuario" placeholder="Usuário:" class="form-username form-control" id="form-username">
								</div>
								<div class="form-group">
									<label class="sr-only" for="senha">Password</label> 
									<input type="password" name="txt_senha" placeholder="Senha:" class="form-password form-control" id="form-password">
								</div>
								<button type="submit" class="btn">Entrar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	<!-- Javascript -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/agisupri/design_admin/bootstrap-assets/js/bootstrap.min.js"></script>
	<script src="/agisupri/design_admin/js/jquery.backstretch.min.js"></script>
	<script src="/agisupri/design_admin/js/scripts.js"></script>

	<!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>

</html>