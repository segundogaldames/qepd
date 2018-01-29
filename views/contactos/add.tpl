<aside class="call-to-action bg-primary">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-12 text-center">
	                <h3>Contáctanos</h3>
	                <button type="button" class="btn btn-lg btn-dark" data-toggle="modal" data-target="#myModal">Llamanos</button>
	                <a href="">Publica</a>

				  <!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-header text-left">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h3 class="modal-title" style="color:black;">Este es nuestro número</h3>
				        </div>
				        <div class="modal-body text-left">
				          <h4 style="color:black;">Funerarias y Cemeterios: +56929132914</h4>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				      
				    </div>
				  </div>

	            </div>
	        </div>
	    </div>
	</aside>
<div class="col-md-2"></div>
<div class="col-md-4">

	<h3>Formulario de Contacto</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Email<span class="text-danger">*</span></label>
			<input type="email" name="email" class="form-control" value="{$datos.email|default:""}">
		</div>
		<div class="form-group">
			<label>Teléfono (opcional)</label>
			<input type="text" name="telefono" class="form-control" value="{$datos.telefono|default:""}">
		</div>
		<div class="form-group">
			<label>Asunto<span class="text-danger">*</span></label>
			<select name="asunto" class="form-control">
				<option value="">Seleccione</option>
				{if isset($asuntos) && count($asuntos)}
					{foreach from=$asuntos item=as}
						<option value="{$as.id}">{$as.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label>Mensaje<span class="text-danger">*</span></label>
			<textarea name="mensaje" id="" rows="6" class="form-control" style="resize: none">{$datos.mensaje|default:""}</textarea>
		</div>
		<div class="form-group">
			<label>Es urgente?<span class="text-danger">*</span></label>
			<select name="urgente" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Enviar" class="btn btn-success">
			<a href="{$_layoutParams.root}index" class="btn btn-link">Cancelar</a>
		</div>
	</form>
</div>
<div class="col-md-2"></div>