<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}imagenes/add" class="btn btn-enlace">Agregar Imagen</a></p>
</div>
<div class="col-md-8">
	{if isset($imagenes) && count($imagenes)}
		{foreach from=$imagenes item=img}
			<div class="col-md-7">
				<img src="{$_layoutParams.root}public/img/componentes/{$img.nombre}" alt="" class="img-responsive">
				
			</div>
			<div class="col-md-5">
				<h4>{$img.titulo}</h4>
				<p><strong>Componente:</strong> {$img.componente}</p>
				<p><strong>Plan:</strong><a href="{$_layoutParams.root}planes/view/{$img.plan_id}"> {$img.plan}</a></p>
				<p><a href="{$_layoutParams.root}imagenes/edit/{$img.id}" class="btn btn-link">Editar</a></p>
			</div>
		{/foreach}
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
