<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}empresas">Empresas</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Plan</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="servicio">Seleccione un servicio:<span class="text-danger">*</span></label></label>
			<select name="servicio" id="" class="form-control">
				<option value="">Servicio</option>
				{if isset($servicios) && count($servicios)}
					{foreach from=$servicios item=serv}
						<option value="{$serv.id}">{$serv.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre del plan" value="{$datos.nombre|default:""}">
		</div>
		<div class="form-group">
			<label for="codigo">Ingrese el código SKU:</label>
			<input type="text" name="codigo" class="form-control" placeholder="Codigo del plan" value="{$datos.codigo|default:""}">
		</div>
		<div class="form-group">
			<label for="tipo_plan">Seleccione el tipo de plan:<span class="text-danger">*</span></label></label>
			<select name="tipo_plan" id="" class="form-control">
				<option value="">Tipo Plan</option>
				{if isset($tipoplanes) && count($tipoplanes)}
					{foreach from=$tipoplanes item=tp}
						<option value="{$tp.id}">{$tp.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		
		
		<div class="form-group">
			<label for="destinatario">Seleccione un destinatario:</label>
			<select name="destinatario" id="" class="form-control">
				<option value="">Destinatarios</option>
				{if isset($destinatarios) && count($destinatarios)}
					{foreach from=$destinatarios item=dest}
						<option value="{$dest.id}">{$dest.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
			<a href="{$_layoutParams.root}empresas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
