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
            <a href="{$_layoutParams.root}index">Funerarias y Cementerios</a>
          </li>
      </ul>
       
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
          {if Session::get('autenticado')}
            {if Session::get('role_id') == 1}
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}empresas">Empresas</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}comunas">Comunas</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                        <a href="{$_layoutParams.root}servicios">Servicios</a> 
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}planes">Planes</a>  
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}cotizaciones">Cotizaciones</a>  
                    </li> 
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}/destinatarios">Destinatarios</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                        <a href="{$_layoutParams.root}componentes">Componentes</a>     
                    </li>
                    <li style="list-style:none;" >
                        <a href="{$_layoutParams.root}imagenes">Imágenes</a>     
                    </li>   
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}usuario">Usuarios</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}roles">Roles</a>
                    </li>
                </ul> 
            </li>     
             {/if}
            <li>
              <a href="{$_layoutParams.root}usuario/cerrar" onclick="return cerrar('{$_layoutParams.root}usuario/cerrar');">Cerrar Sesión</a>
            </li>
        {else}
          <li>
            <a href="{$_layoutParams.root}usuario/login">Iniciar Sesión</a>
          </li>
          
          <li>
            <a href="{$_layoutParams.root}contactos/add">Contáctanos</a>
          </li>

          <li>
            <a href="">Obituario</a>
          </li>
        {/if}

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

