var getData = function(){

	var correo = document.getElementById("correo").value;
	var matricula = document.getElementById("matricula").value;
	if(correo.length !== 0 && matricula.length !== 0){
		console.log(correo+" "+matricula);
		alert("Datos recuperados: "+correo+"\n"+matricula);
		window.open("Libro.php");

		
		
	}else{
		console.log("Uno de los datos no fue ingresado correctamete.");
		alert("Uno de los datos no fue ingresado correctamente");
	}
	
}