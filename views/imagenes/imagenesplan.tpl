<div style="padding-top: 50px"></div>
<div class="col-md-2">
	
</div>
<div class="col-md-8">
	<h3>Planes Consulta</h3>
	{if isset($imagenes) && count($imagenes)}
		{foreach from=$imagenes item=img}
			<figure>
				<h3>{$img.titulo}</h3>
				<a href="#" ><img src="{$_layoutParams.root}public/img/componentes/{$img.nombre}" alt="" width="280"></a>
				
			</figure>
		{/foreach}
		<br><br>
		<a href="" class="btn btn-primary">Cotizar</a>
		{else}
			<strong>No hay imágenes asociadas</strong>
	{/if}
	
</div>
<div class="col-md-2">
	
</div>	


	
	
	
