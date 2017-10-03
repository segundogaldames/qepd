<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-10-02 16:17:00
         compiled from "/Applications/MAMP/htdocs/qepd/views/layout/default/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90377091358f52a5bc3bf04-91564473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3445a8ccfbc6054355c1d7137335544c53b0334' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/layout/default/navbar.tpl',
      1 => 1506971815,
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
<?php if ($_valid && !is_callable('content_58f52a5c384549_66684748')) {function content_58f52a5c384549_66684748($_smarty_tpl) {?><nav class="navbar-inverse navbar-fixed-top">
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
          <?php if (Session::get('autenticado')) {?>
            <?php if (Session::get('role_id')==1) {?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/empresas">Empresas</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/tipoempresas">Tipo Empresas</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes">Sedes</a>
                    </li> 
                    <li style="list-style:none;" >
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos">Telefonos</a> 
                      </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/comunas">Comunas</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/regiones">Regiones</a>
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
/tipoplanes">Tipo de Planes</a>
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
                    <li style="list-style:none;" >
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
construcciones">Construcciones</a>     
                    </li>
                    <li style="list-style:none;" >
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoconstrucciones">Tipo Construcciones</a>     
                    </li>
                    <li style="list-style:none;" >
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
materiales">Materiales</a>     
                    </li>
                    <li style="list-style:none;" >
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
terminaciones">Terminaciones</a>     
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario">Usuarios</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles">Roles</a>
                    </li>
                </ul> 
            </li>     
             <?php }?>
            <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar" onclick="return cerrar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar');">Cerrar Sesión</a>
            </li>
        <?php } else { ?>
          <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario">Iniciar Sesión</a>
          </li>
          
          <li>
            <a href="#contacto">Contáctanos</a>
          </li>

          <li>
            <a href="">Obituario</a>
          </li>
        <?php }?>

        <li><a> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</a></li>
        <li>
        <a id="menu-toggle" class="btn-dark-navbar btn-lg text-arriba"><i class="fa fa-bars"></i></a>
                 
            <nav id="sidebar-wrapper">
              <ul class="sidebar-nav">
                   <a id="menu-close" href="#" class="btn-dark-navbar btn-lg pull-right"><i class="fa fa-times"></i></a>
                  <li class="sidebar-brand">
                      <a href="#top"  onclick = $("#menu-close").click(); >Navegación</a>
                  </li>
                  <li>
                      <a href="#top" onclick = $("#menu-close").click(); >Inicio</a>
                  </li>
                  <li>
                      <a href="#about" onclick = $("#menu-close").click(); >Gremio</a>
                  </li>
                  <li>
                      <a href="#services" onclick = $("#menu-close").click(); >Servicios</a>
                  </li>
                  <li>
                      <a href="#portfolio" onclick = $("#menu-close").click(); >Otros Servicios</a>
                  </li>
                  <li>
                      <a href="#contact" onclick = $("#menu-close").click(); >Contacto</a>
                  </li>
            </ul>
          </nav>
          
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php }} ?>
