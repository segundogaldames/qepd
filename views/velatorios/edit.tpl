<div class="col-md-2">
	
</div>

<div class="col-md-4">
	<h3>Editar Velatorio</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="tramite">Trámites defunción:<span class="text-danger">*</span></label>
			<input type="text" name="tramite" class="form-control" placeholder="Trámites del velatorio: inscripción, pase, certificados, etc." value="{$dato.tramites|default:""}">
		</div>
		<div class="form-group">
			<label for="asesor">Asesor a domicilio:<span class="text-danger">*</span></label>
			<select name="asesor" class="form-control">
				<option value="{$dato.asesor}">{if $dato.asesor == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="sala">Sala de velatorio:<span class="text-danger">*</span></label>
			<select name="sala" class="form-control">
				<option value="{$dato.sala}">{if $dato.sala == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="capilla">Capilla ecuménica:<span class="text-danger">*</span></label>
			<select name="capilla" class="form-control">
				<option value="{$dato.capilla}">{if $dato.capilla == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="cirios">Nº de Cirios:</label>
			<input type="number" name="cirios" class="form-control" placeholder="Número de cirios" value="{$dato.cirios|default:""}">
		</div>
		<div class="form-group">
			<label for="portacirios">Nº de Portacirios:</label>
			<input type="number" name="portacirios" class="form-control" placeholder="Número de portacirios" value="{$dato.portacirios|default:""}">
		</div>
		<div class="form-group">
			<label for="cruces">Nº de Cruces:</label>
			<input type="number" name="cruces" class="form-control" placeholder="Número de cruces" value="{$dato.cruces|default:""}">
		</div>
		<div class="form-group">
			<label for="canastos">Nº de Flores en canasto:</label>
			<input type="number" name="canastos" class="form-control" placeholder="Número de flores en canasto" value="{$dato.florescanastos|default:""}">
		</div>
		<div class="form-group">
			<label for="cubreurna">Nº de Flores cubreurna:</label>
			<input type="number" name="cubreurna" class="form-control" placeholder="Número de flores cubreurna" value="{$dato.florescubreurnas|default:""}">
		</div>
		<div class="form-group">
			<label for="condolencias">Nº de Libros de condolencias:</label>
			<input type="number" name="condolencias" class="form-control" placeholder="Número de libros de condolencias" value="{$dato.condolencias|default:""}">
		</div>
		<div class="form-group">
			<label for="parroco">Párroco:<span class="text-danger">*</span></label>
			<select name="parroco" class="form-control">
				<option value="{$dato.parroco}">{if $dato.parroco == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="coro">Coro:</label>
			<input type="number" name="coro" class="form-control" placeholder="Número de integrantes" value="{$dato.coro|default:""}">
		</div>
		<div class="form-group">
			<label for="aviso">Nº de Avisos de prensa:</label>
			<input type="number" name="avisos" class="form-control" placeholder="Número de avisos" value="{$dato.avisosprensa|default:""}">
		</div>
		<div class="form-group">
			<label for="tarjeta">Nº de Tarjetas de agradecimiento:</label>
			<input type="number" name="tarjeta" class="form-control" placeholder="Número de tarjetas" value="{$dato.tarjetas|default:""}">
		</div>
		<div class="form-group">
			<label for="cafeteria">Cafeteria:<span class="text-danger">*</span></label>
			<select name="cafeteria" class="form-control">
				<option value="{$dato.cafeteria}">{if $dato.cafeteria==1}Básica{elseif $dato.cafeteria==2}Superior{else}No aplica{/if}</option>
				<option value="1">Básica</option>
				<option value="2">Superior</option>
				<option value="3">No considerada</option>
			</select>
		</div>
		<div class="form-group">
			<label for="plan">Seleccione el plan:<span class="text-danger">*</span></label>
			<select name="plan" id="" class="form-control">
				<option value="{$dato.plan_id}">{$dato.plan}</option>
				{if isset($planes) && count($planes)}
					{foreach from=$planes item=p}
						<option value="{$p.id}">{$p.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">
			<a href="{$_layoutParams.root}velatorios" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
