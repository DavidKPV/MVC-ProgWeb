function btnformulariopre(){
	var datos="action=registra";

	$.post("../controlador/btncontrol.php", datos, function(data){
		$('#resultado').html(data);
	});
}

function registraformulario(){
	var datos="action=registracontactos&"+$("#formcontacto").serialize();

	$.post("../controlador/btncontrol.php", datos, function(data){
		$('#resultado').prepend(data);
	});
}