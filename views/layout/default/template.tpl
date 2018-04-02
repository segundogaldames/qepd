<!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
      <title>{$titulo|default:"Sin Titulo"}</title>
      <link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta_css}bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta_css}stylish-portfolio.css">
      <link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta_css}fileinput.min.css">
      <link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta_css}resets.css">
      <link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta_css}estilos.css">
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
      <script type="text/javascript" src="{$_layoutParams.ruta_js}jquery-1.11.3.js"></script>
      <script type="text/javascript" src="{$_layoutParams.ruta_js}bootstrap.min.js"></script>
      <script type="text/javascript" src="{$_layoutParams.ruta_js}fileinput.min.js"></script>
      <script type="text/javascript" src="{$_layoutParams.ruta_js}jquery.validate.js"></script>
      <script type="text/javascript" src="{$_layoutParams.ruta_js}additional-methods.js"></script>
      <script type="text/javascript" src="{$_layoutParams.ruta_js}funciones.js"></script>
      <script type="text/javascript">
        
      </script>
      
      {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
          <script type="text/javascript" src="{$js}"></script>
        {/foreach}

      {/if}

   </head>
   <body>
      {include file="navbar.tpl"}
      <div class="row">
            <noscript><p>Debe tener el soporte de Javascript habilitado</p></noscript>
            {if isset($_error)}
              <div style="padding-top: 45px"></div>
              <p class="alert alert-danger">{$_error}</p>
            {/if}

            {if isset($_mensaje)}
              <div style="padding-top: 45px"></div>
              <p class="alert alert-success">{$_mensaje}</p>
            {/if}

            {include file=$_contenido}
          </div>
          {if Session::get('autenticado')}
      {include file="header.tpl"}
      {include file="about.tpl"}
      {include file="services.tpl"}
      {include file="callout.tpl"}
      {include file="portfolio.tpl"}
      {include file="call_to_action.tpl"}
      {include file="map.tpl"}
      {include file="footer.tpl"}
        {/if}

</div>
  </body>
</html>