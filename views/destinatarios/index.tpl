<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}destinatarios/add" class="btn btn-enlace">Agregar Destinatario</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Comunas</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($destinatarios) && count($destinatarios)}
				{foreach from=$destinatarios item=d}
					<tr>
						<td>{$d.nombre}</td>
						<td>
							<a href="{$_layoutParams.root}destinatarios/view/{$d.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}destinatarios/delete/{$d.id}">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
