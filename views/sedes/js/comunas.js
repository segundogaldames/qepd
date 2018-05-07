$(document).ready(function(){
	var getComunas = function(){
		$.post('/qepd/sedes/getComunas','region=' + $("#region").val(), function(datos){
			$("#comuna").html('');
			for(var i = 0;i < datos.length;i++){
				$("#comuna").append('<option value="' + datos[i].id_ciud + '">' + datos[i].nom_ciud + '</option>');
			}
		}, 'json');
	}

	$("#region").change(function(){
		if(!$("#region").val()){
			$("#comuna").html('');
		}else{
			getComunas();
		}
	});
});