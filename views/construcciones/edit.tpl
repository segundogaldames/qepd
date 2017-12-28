<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}construcciones">Ver Construcciones</a></p>
</div>

<div class="col-md-4">
	<h3>Editar Construcción</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="tipo">Tipo construcción:<span class="text-danger">*</span></label>
			<select name="tipo" id="" class="form-control">
				<option value="{$dato.tipo_construccion_id}">{$dato.construccion}</option>	
				{if isset($tipos) && count($tipos)}
					{foreach from=$tipos item=tc}
						<option value="{$tc.id}">{$tc.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="material">Material:<span class="text-danger">*</span></label>
			<select name="material" id="" class="form-control">
				<option value="{$dato.material_id}">{$dato.material}</option>
				{if isset($materiales) && count($materiales)}
					{foreach from=$materiales item=m}
						<option value="{$m.id}">{$m.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="terminacion">Terminación:<span class="text-danger">*</span></label>
			<select name="terminacion" id="" class="form-control">
				<option value="{$dato.terminacion_id}">{$dato.terminacion}</option>
				{if isset($terminaciones) && count($terminaciones)}
					{foreach from=$terminaciones item=t}
						<option value="{$t.id}">{$t.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="grabado">Grabado:<span class="text-danger">*</span></label>
			<select name="grabado" id="" class="form-control">
				<option value="{$dato.grabado}">{if $dato.grabado==1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="solucion">Servicio:<span class="text-danger">*</span></label>
			<select name="solucion" id="" class="form-control">
				<option value="{$dato.solucion_id}">{$dato.solucion}</option>
				{if isset($soluciones) && count($soluciones)}
					{foreach from=$soluciones item=s}
						<option value="{$s.id}">{$s.plan}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Modificar" class="btn btn-success">
			<a href="{$_layoutParams.root}contrucciones" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
