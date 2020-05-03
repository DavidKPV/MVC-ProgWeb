function listado(id){
	var datos="action=listado&id="+id;
	alert(datos);

	$.post("../controlador/listadocontrol.php", datos, function(data){
		alert(data);
		$('#principal').html(data);
	});
}