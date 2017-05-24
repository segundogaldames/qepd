<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-15 22:07:59
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/layout/default/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68543922055ca617ed42d49-73575863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10159f82a09ed77cd26cd8e2106e5597c79bc42f' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/layout/default/template.tpl',
      1 => 1452891332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68543922055ca617ed42d49-73575863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ca617f091de8_70496455',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca617f091de8_70496455')) {function content_55ca617f091de8_70496455($_smarty_tpl) {?><!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
      <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin Titulo" : $tmp);?>
</title>
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
fileinput.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
estilos.css">
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery-1.11.3.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
fileinput.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.validate.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
additional-methods.js"><?php echo '</script'; ?>
>

      
      <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
          <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
        <?php } ?>

      <?php }?>

   </head>
   <body>
   	  <div class="container">
        
          <div class="row">
            <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>
          <div class="row">
            <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>
          <div class="row">
            <noscript><p>Debe tener el soporte de Javascript habilitado</p></noscript>
            <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
              <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)) {?>
            <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>
          <div class="row">
            <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>
        
       
        
      </div>

  </body>
</html><?php }} ?>
