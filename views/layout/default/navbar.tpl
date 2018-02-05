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
              <li>
                  <a href="{$_layoutParams.root}index">Inicio</a>
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
                  <a href="{$_layoutParams.root}contactos/add">Contáctanos</a>
                </li>

                <li>
                  <a href="">Obituario</a>
                </li>
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
                      <a href="{$_layoutParams.root}usuarios">Usuarios</a>
                    </li>
                    <li style="list-style:none;" >
                      <a href="{$_layoutParams.root}roles">Roles</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li style="list-style: none;">
                      <a href="{$_layoutParams.root}Contactos">Contactos</a>
                    </li>
                </ul> 
            </li>     
             {/if}
            <li>
              <a href="{$_layoutParams.root}usuarios/cerrar" onclick="return cerrar('{$_layoutParams.root}usuarios/cerrar');">Cerrar Sesión</a>
            </li>        
         
        {/if}

        <li><a> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

