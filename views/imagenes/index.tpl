<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}imagenes/add" class="btn btn-enlace">Agregar Imagen</a></p>
</div>
<div class="col-md-10">
	<h3>Lista de Imágenes</h3>
	{if isset($imagenes) && count($imagenes)}
		{foreach from=$imagenes item=img}
			<div class="col-md-2 border border-1 border-primary">
				<a href="{$_layoutParams.root}imagenes/view/{$img.id}">
					<img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$img.nombre}" alt="" class="img-responsive">
				<h4>{$img.titulo}</h4>
				</a>
			</div>
		{/foreach}
	{/if}
</div>
	


	
	
	
