<div style="padding-top: 60px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}servicios/add">Agregar Servicio</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}tipoplanes">Tipo de Planes</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Servicios</h3>
	<table class="table table-hover">
		<th>
			Servicio
		</th>
		<th>
			Tipo Empresa
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($servicios) && count($servicios)}
				{foreach from=$servicios item=serv}
					<tr>
						<td>{$serv.nombre}</td>
						<td>{$serv.tipo}</td>
						<td>
							<a href="{$_layoutParams.root}servicios/view/{$serv.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}servicios/delete/{$serv.id}" onclick="return eliminar('{$_layoutParams.root}servicios/delete/{$serv.id}', '{$serv.nombre}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
