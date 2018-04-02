<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}status/add">Agregar Status</a></p>
</div>
<div class="col-md-6">
	{if isset($status) && count($status)}
		<h3>Lista de Status</h3>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$status item=st}
				<tr>
					<td>{$st.nombre}</td>
					<td>
						<a href="{$_layoutParams.root}status/view/{$st.id}" class="btn btn-link btn-sm">Ver</a>
						<a href="{$_layoutParams.root}status/delete/{$st.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}status/delete/{$st.id}', '{$st.nombre}')">Eliminar</a>
					</td>
				</tr>
			{/foreach}
		</table>
	{else}
		<strong>No hay status registrados</strong>
		<p>
			<a href="{$_layoutParams.root}status/add">Agregar Status</a>
		</p>
	{/if}
</div>
<div class="col-md-2"></div>