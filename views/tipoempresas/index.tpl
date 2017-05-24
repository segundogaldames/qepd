<div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
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
							<a href="">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-4">
	
</div>