function holamundo(){
	alert("OPRIMIENDO EL BOTON");
	var datos="action=controlhola";
	alert(datos);

	$.post("../controlador/holacontrol.php", datos, function(data){
		alert(data);
		$('#elementoinicial').html(data);
	});
}

function mostrarimg(){
	alert("OPRIMIENDO mostrar img");
	var datos="action=miimg"
	alert(datos);

	$.post("../controlador/holacontrol.php", datos, function(data){
		alert(data);
		$('#elementoinicial').html(data);
	});
}

function listado(id) {
	var datos="action=listado&id="+id;

	$.post("../controlador/holacontrol.php", datos, function(data){
		alert(datos);
		$('#elementoinicial').html(data);
		alert(data);
	});
}

function formulario(){
	var datos="action=formulario";

	$.post("../controlador/holacontrol.php", datos, function(data){
		$('#elementoinicial').html(data);
	});
}

function registra(){
	var datos="action=registra&"+$("#formu").serialize();
	alert(datos);
	$.post("../controlador/holacontrol.php", datos, function(data){
	});
}