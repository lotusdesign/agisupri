<?php

$this->load->database ();

$query = $this->db->get_where ( 'segmentos');
$segmentos = $query->result_array ();

for ($i = 0; $i < count($segmentos); $i ++) {
	$query = $this->db->get_where ( 'categorias', array ('id_segmento' => $segmentos[$i]["id_segmento"]) );
	$segmentos[$i]["categorias"] = $query->result_array ();
	
	for ($j = 0; $j < count($segmentos[$i]["categorias"]); $j ++) {
		$query = $this->db->get_where ( 'produtos', array ('id_categoria' => $segmentos[$i]["categorias"][$j]["id_categoria"]) );
		$segmentos[$i]["categorias"][$j]["produtos"] = $query->result_array ();
	}
}
?>
<script>
function validar_busca() {
	argumento_busca = $('#txt_busca').val();

	if(argumento_busca.length >= 4) {
		document.frm_busca.submit();
	} else {
		alert("Digite ao menos 4 caracteres para buscar");
		return false;
	}
}
</script>
	<nav class="navbar navbar-default navbar-fixed-top">			
		<div class="container">				
			<div class="navbar-header">					
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">						
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button>					
				<a class="navbar-brand" href="/agisupri/index.php/home/view">
					<img src="/agisupri/design_core/img/logo.png" class="img-responsive" alt="logo">
				</a>
			</div>
			<div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">					
				<div class="col-md-8 col-xs-12 nav-wrap">						
					<ul class="nav navbar-nav">							
						<li><a href="/agisupri/index.php/home#quemsomos" class="page-scroll">Quem Somos</a></li>							
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Serviços</a>
							<ul class="dropdown-menu">
								<li><a href="/agisupri/index.php/servicos/consultoria">Consultoria</a></li>
								<li><a href="/agisupri/index.php/servicos/distribuicao">Distribuição</a></li>
								<li><a href="/agisupri/index.php/servicos/logistica">Logística</a></li>
								<li><a href="/agisupri/index.php/servicos/revenda">Revenda</a></li>
							</ul>
						</li>
						<li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos</a>
                            <ul class="dropdown-menu">
                            	<?php foreach ($segmentos as $segmento) { ?>
									<li class="dropdown-submenu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<?php echo $segmento['nome_segmento']?>
										</a>
										<ul class="dropdown-menu">
											<?php foreach ($segmento['categorias'] as $categoria) { ?>
												<li class="dropdown-submenu">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">																
														<?php echo $categoria['nome_categoria']?>
													</a>
													<ul class="dropdown-menu">
														<?php foreach ($categoria["produtos"] as $produto) { ?>
														<li>
															<a href="/agisupri/index.php/produto/detalhe/<?php echo $produto["id_produto"]; ?>">
																<?php echo $produto["nome"]; ?>
															</a>
														</li>
														<?php }  ?>
													</ul>
												</li>
											<?php }  ?>
										</ul>
								<?php } ?>
							</ul>
                        </li>
						<li><a href="/agisupri/index.php/home#clientes" class="page-scroll">Clientes</a></li>						
						<li><a href="/agisupri/index.php/home#contato" class="page-scroll">Contato</a></li>
						<li class="input-group">
							<form method="post" name="frm_busca" action="/agisupri/index.php/resultados_busca">
								<input type="text" class="form-control" placeholder="Busca de Produtos" name="txt_busca" id="txt_busca"> 
								<a href="javaScript: validar_busca();">Buscar</a>
							</form>
						</li>
					</ul>					
				</div>
				<div class="col-md-2 col-xs-12 pedidos pull-right">
					<p>							
						<img src="/agisupri/design_core/img/icone-pedido.png" /> Confira seu pedido na área do cliente:						
					</p>						
					<p>							
						<input type="text" value="Usuário" onblur="this.value='Usuário'" onfocus="this.value=''" /> 
						<input type="password" value="Senha" onblur="this.value='Senha'" onfocus="this.value=''" />						
					</p>
					<p class="shop">
						<i class="fa fa-shopping-cart"></i>
						<span>
							1
						</span>
					</p>					
				</div>				
			</div>			
		</div>		
	</nav>