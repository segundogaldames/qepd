<div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Empresa</h3>
	
	{if isset($empresa) && count($empresa)}
		<p style="font-size: 18px"><strong>Nombre:</strong> {$empresa.nombre}</p>
		<p style="font-size: 18px"><strong>Email:</strong> {$empresa.email}</p>	
		<p style="font-size: 18px"><strong>RUT:</strong> {$empresa.rut}</p>	
		<p style="font-size: 18px"><strong>Usuario:</strong> {$empresa.nom_usuario} {$empresa.apellido}</p>
		<p style="font-size: 18px"><strong>Tipo Empresa:</strong> {$empresa.tipo} </p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}empresas/edit/{$empresa.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}empresas">Volver</a>
	</p>
	<hr>
	<h4>Sedes</h4>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Calle Nº</th>
				<th>Ciudad/Comuna</th>
			</tr>
			{if isset($sede) && count($sede)}
				{foreach from=$sede item=s}
					<tr>
						<td><a href="{$_layoutParams.root}sedes/view/{$s.id}">{$s.sede}</a></td>
						<td>{$s.calle} {$s.numero}</td>
						<td>{$s.comuna}</td>
					</tr>

				{/foreach}
			{/if}
		</table>
</div>
<div class="col-md-4">
	
</div>	
