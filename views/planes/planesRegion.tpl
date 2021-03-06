<script type="text/javascript">
    $(document).ready(function(){
        $("#show").click(function(){
            $("#regiones").show();
            $("#comunas").hide();
        });
        $("#comuna").click(function(){
            $("#regiones").hide();
            $("#comunas").show();
        });
    })
</script>

<div class="col-md-2" style="padding-left: 20px">
	<h4>Buscar en</h4>
	<ul class="list-unstyled">
        <li><a href="#" id="show" class="btn btn-link">Regiones</a>
            {if isset($regiones) && count($regiones)}
                <ul class="list-unstyled" id="regiones" style="display: none; margin-left: 15px">
                    {foreach from=$regiones item=r}
                        <li>
                            <a href="{$_layoutParams.root}planes/planesRegion/{$r.id}" class="btn btn-link">{$r.region}</a>
                        </li>
                    {/foreach}
                </ul>
            {/if}
        </li>
        <li>
            <a href="#" id="comuna" class="btn btn-link">Comunas</a>
            {if isset($comunas) && count($comunas)}
                <ul class="list-unstyled" id="comunas" style="display: none; margin-left: 15px">
                    {foreach from=$comunas item=c}
                        <li>
                            <a href="{$_layoutParams.root}planes/planesComuna/{$c.id}" class="btn btn-link">{$c.comuna}</a>
                        </li>
                    {/foreach}
                </ul>
            {/if}
        </li>
    </ul>
</div>
<div class="col-md-10">
	
	{if isset($planes) && count($planes)}
    <h3>Ver Planes</h3>
	<table class="table table-hover">
		<th>
			Precio
		</th>
		<th>
			Funeraria o Empresa
		</th>
		<th>
			Nombre del Plan
		</th>
		<th>
			Tipo de Plan
		</th>
		<th>
			Destinatario
		</th>
		<th>
			Comuna o Ciudad
		</th>
		<th>
			Acciones
		</th>
		
			
				{foreach from=$planes item=p}
					<tr>
						<td>$ {number_format($p.precio,0,",",".")}</td>
						<td>{$p.empresa}</td>
						<td>{$p.nombre}</td>
						<td>{$p.tipo_plan}</td>
						<td>{$p.destinatario}</td>
						<td>{$p.comuna}</td>
						<td>
							<a href="{$_layoutParams.root}imagenes/imagenesplan/{$p.id}">Ver Detalles</a>&nbsp;&nbsp;
						</td>
					</tr>

				{/foreach}
			
		
	</table>
	{else}
        <p class="alert alert-info">No hay planes asociados para esta comuna</p>
		 <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">
                                <a href="{$_layoutParams.root}planes/planesServicios/9">
                                    <img src="{$_layoutParams.root}views/layout/default/img/vectores/funeraria.jpg">
                                </a>
                            </i>
                            </span>
                            <h4>
                                <strong>Funerarias</strong>
                               
                            </h4>
                            <p>Elige el mejor plan funerario</p>
                                <a href="{$_layoutParams.root}planes/planesServicios/9" class="btn btn-primary">Cotizar</a>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">
                                <a href="{$_layoutParams.root}planes/planesServicios/10">
                                    <img src="{$_layoutParams.root}views/layout/default/img/vectores/crematorio.jpg">
                                </a>
                            </i>
                        </span>
                            <h4>
                                <strong>Crematorios</strong>
                            </h4>
                            <p>Elige el mejor servicio de cremación</p>
                                <a href="{$_layoutParams.root}planes/planesServicios/10" class="btn btn-primary">Cotizar</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">
                                <a href="{$_layoutParams.root}planes/planesServicios/11">
                                    <img src="{$_layoutParams.root}views/layout/default/img/vectores/sepultura.jpg">
                                </a>
                                
                            </i>
                        </span>
                            <h4>
                                <strong>Sepulturas</strong>
                            </h4>
                            <p>Elige el mejor plan de cementerio</p>
                                <a href="{$_layoutParams.root}planes/planesServicios/11" class="btn btn-primary">Cotizar</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">
                                <a href="{$_layoutParams.root}planes/planesServicios/12">
                                    <img src="{$_layoutParams.root}views/layout/default/img/vectores/Servicio-sepultacion.jpg">
                                </a>
                                
                            </i>
                        </span>
                            <h4>
                                <strong>Servicios de Sepultación</strong>
                            </h4>
                            <p>Elige el mejor servicio de sepultación</p>
                                <a href="{$_layoutParams.root}planes/planesServicios/12" class="btn btn-primary">Cotizar</a>
                        </div>
                    </div>
                </div>
	{/if}
</div>



	
	
	
