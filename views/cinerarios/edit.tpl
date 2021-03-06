<div class="col-md-2" style="padding-top: 20px">
	
</div>

<div class="col-md-4">
	<h3>Editar Cinerario</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="sala">Sala velatorio:<span class="text-danger">*</span></label>
			<select name="sala" id="" class="form-control">
				<option value="{$dato.sala}">{if $dato.sala == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="capilla">Capilla ecuménica:<span class="text-danger">*</span></label>
			<select name="capilla" id="" class="form-control">
				<option value="{$dato.capilla}">{if $dato.capilla == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="podium">Podium:<span class="text-danger">*</span></label>
			<select name="podium" id="" class="form-control">
				<option value="{$dato.podium}">{if $dato.podium == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="liturgia">Liturgia - responso:<span class="text-danger">*</span></label>
			<select name="liturgia" id="" class="form-control">
				<option value="{$dato.liturgia}">{if $dato.liturgia == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="amplificacion">Amplificación:<span class="text-danger">*</span></label>
			<select name="amplificacion" id="" class="form-control">
				<option value="{$dato.amplificacion}">{if $dato.amplificacion == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="diacono">Diácono:<span class="text-danger">*</span></label>
			<select name="diacono" id="" class="form-control">
				<option value="{$dato.diacono}">{if $dato.diacono == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="coro">Coro:</label>
			<input type="number" name="pasajeros" class="form-control" placeholder="Número de integrantes" value="{$dato.coro|default:""}">
		</div>
		<div class="form-group">
			<label for="cafeteria">Cafetería:<span class="text-danger">*</span></label>
			<select name="cafeteria" id="" class="form-control">
				<option value="{$dato.cafeteria}">{if $dato.cafeteria==1}Básica{elseif $dato.cafeteria==2}Superior{else}No considerada{/if}</option>
				<option value="1">Básica</option>
				<option value="2">Superior</option>
				<option value="3">No considera</option>
			</select>
		</div>
		<div class="form-group">
			<label for="ceremonia">Ceremonia:<span class="text-danger">*</span></label>
			<select name="ceremonia" id="" class="form-control">
				<option value="{$dato.ceremonia}">{if $dato.ceremonia == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="anforaincl">Incluye ánfora?:<span class="text-danger">*</span></label>
			<select name="anforaincl" id="" class="form-control">
				<option value="{$dato.anforaincl}">{if $dato.anforaincl == 1}Si{else}No{/if}</option>
				<option value="1">Si</option>
				<option value="2">No</option>
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
			<a href="{$_layoutParams.root}cinerarios" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
