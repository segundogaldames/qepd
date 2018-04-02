<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-30 22:23:40
         compiled from "/Applications/MAMP/htdocs/qepd/views/layout/default/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90377091358f52a5bc3bf04-91564473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3445a8ccfbc6054355c1d7137335544c53b0334' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/layout/default/navbar.tpl',
      1 => 1522459415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90377091358f52a5bc3bf04-91564473',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f52a5c384549_66684748',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f52a5c384549_66684748')) {function content_58f52a5c384549_66684748($_smarty_tpl) {?><?php if (Session::get('autenticado')) {?>
<nav class="navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="navbar-brand navbar-nav">
          <li style="list-style:none;" >
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index">Funerarias y Cementerios</a>
          </li>
      </ul>
       
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index">Inicio</a>
              </li>
              <li>
                  <a href="#about">Quiénes Somos</a>
              </li>
              <li>
                  <a href="#services">Servicios</a>
              </li>
              <li>
                  <a href="#callout">Publicidad</a>
              </li>
              <li>
                  <a href="#portfolio">Otros Servicios</a>
              </li>
               <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/add">Contáctanos</a>
                </li>

                <li>
                  <a href="">Obituario</a>
                </li>
          <?php if (Session::get('autenticado')) {?>
            <?php if (Session::get('role_id')==1) {?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas">Empresas</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
regiones">Regiones</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios">Servicios</a> 
                    </li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Planes</a>  
                    </li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cotizaciones">Cotizaciones</a>  
                    </li> 
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/destinatarios">Destinatarios</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
componentes">Componentes</a>     
                    </li>
                    <li style="list-style:none;" >
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes">Imágenes</a>     
                    </li>   
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios">Usuarios</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles">Roles</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style: none;">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
Contactos">Contactos</a>
                    </li>
                </ul> 
            </li>     
             <?php }?>
            <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/cerrar" onclick="return cerrar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/cerrar');">Cerrar Sesión</a>
            </li>        
         
        <?php }?>

        <li><a> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php }?>
<?php }} ?>
