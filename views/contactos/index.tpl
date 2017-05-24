<div id="separador"></div>
<div id="lado_a">
<div id="separador"></div>
<div id="registro">
	<h3>Opciones de Contacto</h3>
	<div id="cabecera">
		<a href="{$_layoutParams.root}" onclick="return abandonarContacto('{$_layoutParams.root}');">
			<img src="{$_layoutParams.root}/views/layout/default/img/cerrar.png" class="img_cerrar" title="Abandonar contacto">
		</a>
	</div>
	<div id="form_registro">
		<p class="parrafo_oferta">Cont&aacute;ctese con nosotros a trav&eacute;s de este formulario...</p>
		<p>&nbsp;</p>
		<p class="notificacion">*Datos Obligatorios</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<form action="" method="post" name="form">
			<table>
				<tr>
					<td class="text_form">Nombre completo:</td>
					<td><input class="caja_form" type="text" name="nombre" value="{if isset($datos)}{$datos.nombre}{/if}"></td>
				</tr>
				<tr>
					<td class="text_form">Correo electr&oacute;nico:</td>
					<td><input class="caja_form" type="text" name="email" value="{if isset($datos)}{$datos.email}{/if}"></td>
				</tr>
				<tr>
					<td class="text_form">Asunto:</td>
					<td><input class="caja_form" type="text" name="asunto" value="{if isset($datos)}{$datos.asunto}{/if}"></td>
				</tr>
				<tr>
					<td class="text_form">Mensaje:</td>
					<td><textarea name="mensaje">{if isset($datos)}{$datos.mensaje}{/if}</textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><hr><br>
						<input type="hidden" name="enviar" value="1">
						<input type="submit" value="Enviar" class="btn_publica">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</div>
<div id="lado_b"></div>