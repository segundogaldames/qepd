<nav class="navbar-inverse navbar-fixed-top">
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
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Publicaciones<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li style="list-style:none;" >
                        <a href="{$_layoutParams.root}empresas">Empresas</a>
                      </li>
                      <li style="list-style:none;" >
                        <a href="{$_layoutParams.root}sedes">Sedes</a>
                      </li>                     
                        <li style="list-style:none;" >
                        <a href="{$_layoutParams.root}telefonos">Telefonos</a> 
                      </li>
                      <li style="list-style:none;" >
                        <a href="{$_layoutParams.root}servicios">Servicios</a> 
                      </li>
                       <li style="list-style:none;" >
                        <a href="{$_layoutParams.root}planes">Planes</a>  
                      </li>                 
                  </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Publicar<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}/tipoempresas/add">Agregar Tipo Empresas</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}/empresas/add">Agregar Empresas</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}/sedes/add">Agregar Sedes</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}telefonos/add">Agregar Telefonos</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}servicios/add">Agregar Servicios</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}planes/add">Agregar Planes</a>
                    </li>
                </ul> 
            </li>   

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}/comunas">Comunas</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}/comunas/add">Agregar Comunas</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}/tipoplanes/add">Agregar Tipo Planes</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}/destinatarios">Destinatarios</a>
                      <a href="{$_layoutParams.root}/destinatarios/add">Agregar Destinatarios</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                        <a href="{$_layoutParams.root}componentes">Componentes</a> 
                        <a href="{$_layoutParams.root}componentes/add">Agregar Componentes</a>     
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                        <a href="{$_layoutParams.root}tiposoluciones">Tipo Soluciones</a> 
                        <a href="{$_layoutParams.root}tiposoluciones/add">Agregar Tipo Soluciones</a>  
                        <a href="{$_layoutParams.root}soluciones">Soluciones</a> 
                        <a href="{$_layoutParams.root}soluciones/add">Agregar Soluciones</a>    
                    </li>
                </ul> 
            </li>     
            
            <li style="list-style:none;" >
              <a href="">Contacto</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}usuario/add">Registrar Usuario</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}roles/add">Agregar Roles</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}roles">Ver Roles</a>
                    </li>
                </ul> 
            </li>  
            <li>
              <a href="{$_layoutParams.root}usuario/cerrar" onclick="return cerrar('{$_layoutParams.root}usuario/cerrar');">Cerrar Sesión</a>
            </li>
        {else}
          <li>
            <a href="{$_layoutParams.root}usuario">Iniciar Sesión</a>
          </li>
          
          <li>
            <a href="#contacto">Contactanos</a>
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

