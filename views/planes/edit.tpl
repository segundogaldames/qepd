<div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Plan</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="{$dato.nombre|default:''}">
		</div>
		<div class="form-group">
			<label for="codigo">Código:</label>
			<input type="text" name="codigo" class="form-control" value="{$dato.codigo|default:''}">
		</div>
		<div class="form-group">
			<label for="tipo_plan">Tipo Plan: {$dato.tipo_plan|default:''}</label>
			<select name="tipo_plan" id="" class="form-control">
				<option value="{$dato.tipo_plan_id}">{$dato.tipo_plan}</option>
				{if isset($tipoplanes) && count($tipoplanes)}
					{foreach from=$tipoplanes item=tp}
						<option value="{$tp.id}">{$tp.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="servicio">Servicio: {$dato.servicio|default:''}</label>
			<select name="servicio" id="" class="form-control">
				<option value="{$dato.servicio_id}">{$dato.servicio}</option>
				{if isset($servicios) && count($servicios)}
					{foreach from=$servicios item=serv}
						<option value="{$serv.id}">{$serv.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="empresa">Empresa: {$dato.empresa|default:''}</label>
			<select name="empresa" id="" class="form-control">
				<option value="{$dato.empresa_id}">{$dato.empresa}</option>
				{if isset($empresas) && count($empresas)}
					{foreach from=$empresas item=emp}
						<option value="{$emp.id}">{$emp.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="destinatario">Destinatario: {$dato.destinatario|default:''}</label>
			<select name="destinatario" id="" class="form-control">
				<option value="{$dato.destinatario_id}">{$dato.destinatario}</option>
				{if isset($destinatarios) && count($destinatarios)}
					{foreach from=$destinatarios item=dest}
						<option value="{$dest.id}">{$dest.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="status">Status:{if $dato.status==1}Activo {else}Inactivo{/if}</label>
			<select name="status" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Activar</option>
				<option value="2">Desactivar</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Editar" class="btn btn-success">
		</div>
	</form>
	<p>
		<a href="{$_layoutParams.root}planes" class="btn btn-link">Volver</a>
	</p>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
