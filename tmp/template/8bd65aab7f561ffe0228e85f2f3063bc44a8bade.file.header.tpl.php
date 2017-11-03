<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-12 20:55:34
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/layout/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88960078155ca617f0e5309-15230774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bd65aab7f561ffe0228e85f2f3063bc44a8bade' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/layout/default/header.tpl',
      1 => 1452628526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88960078155ca617f0e5309-15230774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ca617f17e179_10951727',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca617f17e179_10951727')) {function content_55ca617f17e179_10951727($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">
	function cerrar($url){
		if(confirm('Deseas cerrar sesion?')){
			window.location=url;
		}else{
			return false;
		}
	}
	
<?php echo '</script'; ?>
>
	<div class="container" id="header">
		<div class="row">
			<div class="col-md-2">logo</div>
			<div class="col-md-6">
				<form action="" method="post" class="form-inline">
					<div class="form-group">
						<input type="text" name="prod" placeholder="Empresa, Producto o Servicio" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="lugar" placeholder="¿Donde?" class="form-control">
					</div>
					<input type="submit" value="Buscar" class="btn btn-default">
				</form>
			</div>			
				
			<div class="col-md-4">
				<ul class="nav nav-pills">
					<li role="presentation">
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/add">Reg&iacute;strate</a>
					</li>
					<?php if (Session::get('autenticado')) {?>
					<li role="presentation">
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar" onclick="return cerrar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar');" title="Cerrar Sesion">Salir</a>
					</li>
					<?php } else { ?>
					<li role="presentation">
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario">Ingresa</a>
					</li>
					<?php }?>
					<?php if (Session::get('autenticado')) {?>
					<li role="presentation">
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inicio">Publicar</a>
					</li>
					<?php }?>
					<li role="presentation">
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ayuda"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
ayuda.png"></a>
					</li>
					<li role="presentation">
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contacto">Contacto</a>
					</li>
				</ul>
			</div>
				
		</div>
		<div class="row">
			<div class="col-md-3" id="slogan">
				<p class="slogan">Especialistas en Mobiliario</p>
			</div>
		    <div class="col-md-7" id="tema">
		    	<p class="tema">Venta de Muebles Nuevos y Usados, Insumos para Muebles, Servicios Relacionados</p>
		    </div>
		    <div class="col-md-2" id="fecha">
		    	<p class="fecha pull-right"><?php echo date('d-m-Y H:i');?>
</p></div>
		</div>

	</div>

	<?php }} ?>
