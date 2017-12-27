<div class="col-md-2" style="padding-top: 20px">
</div>
<div class="col-md-4">
	
	<h3>Ver Imagen</h3>
	
	{if isset($imagen) && count($imagen)}
		<div class="col-md-6">
			<img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$imagen.nombre}" alt="Imagen" class="img-responsive">
		</div>
		<p></p>
		<p style="font-size: 18px"><strong>Título:</strong> {$imagen.titulo}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {$imagen.plan}</p>
		<p style="font-size: 18px"><strong>Componente:</strong> {$imagen.componente}</p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}imagenes/edit/{$imagen.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}imagenes/delete/{$imagen.id}" onclick="return eliminar('{$_layoutParams.root}imagenes/delete/{$imagen.id}', '{$imagen.titulo}')">Eliminar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}imagenes">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	