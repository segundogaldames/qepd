<div style="padding-top: 70px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}tipoempresas/add">Agregar Tipo Empresa</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}empresas">Ver Empresas</a></p>
</div>
<div class="col-md-8">
	<h3>Lista Tipo Empresas</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($tipos) && count($tipos)}
				{foreach from=$tipos item=t}
					<tr>
						<td>{$t.nombre}</td>
						<td>
							<a href="{$_layoutParams.root}tipoempresas/view/{$t.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}tipoempresas/delete/{$t.id}" onclick="return eliminar('{$_layoutParams.root}tipoempresas/delete/{$t.id}', '{$t.nombre}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>