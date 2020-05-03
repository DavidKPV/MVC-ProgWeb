function holamundo(){
	var datos="action=mensajeuno";

	$.post("../controlador/holacontrol.php", datos, function(data){
		$('#principal').html(data);
	});
}

function registra(){
	var datos="registra&"+$("#formu").serialize;
	
	$.post("../controlador/holacontrol.php", datos, function(data){
		$('#principal').prepend(data);
	});
}