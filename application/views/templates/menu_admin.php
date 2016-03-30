<div class="collapse navbar-collapse navbar-ex1-collapse">
	<ul class="nav navbar-nav side-nav">
		<li id="inicial"><a href="/agisupri/index.php/admin/view"><i class="fa fa-fw fa-dashboard"></i> Tela Inicial</a></li>
		<li id="cor"><a href="/agisupri/index.php/admin/cadastrar_cor"><i class="fa fa-star"></i> Cadastrar Cores</a></li>
		<li id="segmento"><a href="/agisupri/index.php/admin/cadastrar_segmento"><i class="fa fa-star"></i> Cadastrar Segmentos</a></li>
		<li id="categoria"><a href="/agisupri/index.php/admin/cadastrar_categoria"><i class="fa fa-star"></i> Cadastrar Categorias</a></li>
		<li id="produto"><a href="/agisupri/index.php/admin/cadastrar_produto"><i class="fa fa-star"></i> Cadastrar Produtos</a></li>
		<li id="administrar"><a href="/agisupri/index.php/admin/administrar_produtos"><i class="fa fa-star"></i> Administrar Produtos</a></li>
		<li id="cliente"><a href="/agisupri/index.php/admin/cadastrar_cliente"><i class="fa fa-user"></i> Cadastrar Clientes</a></li>
		<li id="listar_cliente"><a href="/agisupri/index.php/admin/listar_cliente"><i class="fa fa-user"></i> Listar Clientes</a></li>
		<li id="catalogo"><a href="/agisupri/index.php/admin/criar_catalogo"><i class="fa fa-user"></i> Criar Catálogo</a></li>
		<li id="orcamento"><a href="/agisupri/index.php/admin/ver_orcamentos"><i class="fa fa-user"></i> Visualizar Orçamentos</a></li>
	</ul>
</div>
		<script>
			page_url = '<?php echo $_SERVER['REQUEST_URI']; ?>';

			if(page_url.indexOf('view') > - 1) {
				document.getElementById('inicial').className = 'active';
			} else if(page_url.indexOf('segmento') > - 1) {
				document.getElementById('segmento').className = 'active';
			} else if(page_url.indexOf('categoria') > - 1) {
				document.getElementById('categoria').className = 'active';
			} else if(page_url.indexOf('cadastrar_produto') > - 1) {
				document.getElementById('administrar_produto').className = 'active';
			} else if(page_url.indexOf('cadastrar_cliente') > - 1) {
				document.getElementById('clientes').className = 'active';
			} else if(page_url.indexOf('catalogo') > - 1) {
				document.getElementById('catalogo').className = 'active';
			} else if(page_url.indexOf('orcamento') > - 1) {
				document.getElementById('orcamento').className = 'active';
			} else if(page_url.indexOf('cadastrar_cor') > - 1) {
				document.getElementById('cor').className = 'active';
			} else if(page_url.indexOf('listar_clientes') > - 1) {
				document.getElementById('listar_cliente').className = 'active';
			}
		</script>