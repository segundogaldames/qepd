function volver(url)
{
	window.location=url;
}

function cerrar(url)
{
	if(confirm('Deseas cerrar sesion?')){
		window.location=url;
	}else{
		return false;
	}
}

function abandonarRegistro(url)
{
	if(confirm('Deseas abandonar el registro?')){
		window.location=url;
	}else{
		return false;
	}
}

function abandonarIngreso(url)
{
	if(confirm('Deseas abandonar el inicio de sesion?')){
		window.location=url;
	}else{
		return false;
	}
}

function abandonarContacto(url)
{
	if(confirm('Deseas abandonar el contacto?')){
		window.location=url;
	}else{
		return false;
	}
}

function abandonarPublicacion(url)
{
	if (confirm('Deseas abandonar la publicacion?')) {
		window.location=url;
	}else{
		return false;
	}
}