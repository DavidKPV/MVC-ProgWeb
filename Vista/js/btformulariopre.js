function btnformulariopre(){
	var datos="action=registra";

	$.post("../controlador/btncontrol.php", datos, function(data){
		$('#resultado').html(data);
	});
}

function registraformulario(){
	var datos="action=registracontactos&"+$("#formcontacto").serialize();
	alert(datos);
	$.post("../controlador/btncontrol.php", datos, function(data){
		$('#resultado').prepend(data);
		alert(data);
	});
}