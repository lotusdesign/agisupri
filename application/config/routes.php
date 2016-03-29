<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|

|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['home'] = 'home/view';
$route['cadastro'] = '/cadastro/view';
$route['produto/detalhe/(:any)'] = '/produto/obter_produto/$1';
$route['produto/lista'] = '/produto/home_produto';
$route['produto/buscar_categoria/(:any)'] = '/produto/buscar_por_categoria/$1';
$route['resultados_busca/(:any)'] = '/produto/buscar/$1';
$route['resultados_busca'] = '/produto/buscar/$1';

/* SEGMENTO */
$route['admin/cadastrar_segmento'] = '/segmento/view';
$route['admin/salvar_segmento'] = '/segmento/salvar';
$route['admin/excluir_segmento/(:any)'] = '/segmento/excluir/$1';
$route['admin/salvar_edicao_segmento'] = '/segmento/salvar_edicao';
$route['admin/carregar_segmento/(:any)'] = '/segmento/carregar_segmento/$1';
/* CATEGORIA */
$route['admin/obter_categorias_combo/(:any)'] = '/cadastrar_produto/obter_categorias_combo/$1';
$route['admin/cadastrar_categoria'] = '/categoria/view';
$route['admin/salvar_categoria'] = '/categoria/salvar';
$route['admin/excluir_categoria/(:any)'] = '/categoria/excluir/$1';
$route['admin/salvar_edicao_categoria'] = '/categoria/salvar_edicao';
$route['admin/carregar_categoria/(:any)'] = '/categoria/carregar_categoria/$1';
/* PRODUTO */
$route['admin/cadastrar_produto'] = '/cadastrar_produto/view';
$route['admin/salvar_produto'] = '/cadastrar_produto/salvar';
$route['admin/administrar_produtos'] = '/administrar_produtos/view';
$route['admin/excluir_produto/(:any)'] = '/administrar_produtos/excluir/$1';
$route['admin/editar_produto/(:any)'] = '/administrar_produtos/carregar_produto/$1';
/* CLIENTE */
$route['admin/cadastrar_cliente'] = '/cliente/view';
$route['admin/listar_cliente'] = '/cliente/listar';
$route['admin/editar_cliente/(:any)'] = '/cliente/carregar_cliente/$1';
$route['admin/salvar_cliente'] = '/cliente/salvar';
$route['admin/salvar_edicao'] = '/cliente/editar';
$route['admin'] = '/admin/view';
/* COR */
$route['admin/cadastrar_cor'] = '/cor/view';
$route['admin/salvar_cor'] = '/cor/salvar';
$route['admin/excluir_cor/(:any)'] = '/cor/excluir/$1';
/* ORÇAMENTOS */
$route['orcamento/salvar'] = '/orcamento/salvar';
$route['orcamento/listar'] = '/orcamento/listar_pedido';
$route['orcamento/excluir_item/(:any)'] = '/orcamento/excluir/$1';
$route['orcamento/confirma_exclusao'] = '/orcamento/confirma_exclusao';
$route['orcamento/confirma_solicitacao'] = '/orcamento/confirma_solicitacao';
$route['admin/ver_orcamentos'] = '/orcamento/listar_orcamentos';
$route['admin/ver_itens_pedido/(:any)'] = '/orcamento/ver_itens_pedido/$1';

/* CATALOGO */
$route['admin/criar_catalogo'] = '/catalogo/criar_catalogo';
$route['admin/salvar_catalogo'] = '/catalogo/salvar';

/* LOGIN - CLIENTE */
$route['login_cliente/autenticar/(:any)'] = '/login_cliente/autenticar/$1';