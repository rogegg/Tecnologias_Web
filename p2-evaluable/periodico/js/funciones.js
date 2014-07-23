
function abrirVentana(){
	var noticias = document.getElementById("noticiasRelacionadas");
	noticias.style.display="inline";
}
function cerrarVentana(){
	var noticias = document.getElementById("noticiasRelacionadas");
	noticias.style.display="none";
}



//Validar el formulario de registro de lectores
function validarRegistro(){
	//Nombre de usuario
	//	No menor de tamaño 4
	//	Sólo admite letras y números.
	usuario = document.getElementById("usuario").value;

	if(usuario.length<4){
    	alert('[ERROR] El nombre de usuario debe tener al menos 4 letras.');
    	return false;
  	}
  	if (!(/^[a-zA-Z0-9]*$/.test(usuario)) ){
    	alert('[ERROR] El nombre de usuario sólo admite letras y números.');
  		return false;
	}

	//Password
	//	La contraseña debe tener entre 6 y 10 caracteres,
	//	por lo menos un digito y un alfanumérico,
	//	no puede contener caracteres especiales.
	password = document.getElementById("password").value;

    if (!(/(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{6,10})$/.test(password)) ) {
    	alert('[ERROR] La contraseña debe tener entre 6 y 10 caracteres, por lo menos un digito y un alfanumérico, y no puede contener caracteres especiales');
 		return false;
    }
    
    //Nombre
    nombre = document.getElementById("nombre").value;
    if (!(/^[a-zA-Z0-9]*$/.test(nombre)) ){
    	alert('[ERROR] El nombre sólo admite letras y números.');
  		return false;
	}

	//Apellidos
	apellidos = document.getElementById("apellidos").value;
	if (!(/^[a-zA-Z0-9]*$/.test(apellidos)) ){
    	alert('[ERROR] El apellido sólo admite letras y números.');
  		return false;
	}

	//Teléfono
	telefono = document.getElementById("telefono").value;
	if (!(/^[0-9]*$/.test(telefono)) ){
    	alert('[ERROR] El telefono sólo admite números.');
  		return false;
	}

  	return true;
}


function validarLogin(){
	//Nombre de usuario
	//	No menor de tamaño 4
	//	Sólo admite letras y números.
	usuario = document.getElementById("pass").value;
	if(usuario.length<4){
    	alert('[ERROR] El nombre de usuario debe tener al menos 4 letras.');
    	return false;
  	}
  	if (!(/^[a-zA-Z0-9]*$/.test(usuario)) ){
    	alert('[ERROR] El nombre de usuario sólo admite letras y números.');
  		return false;
	}


	//Password
	//	La contraseña debe tener entre 6 y 10 caracteres,
	//	por lo menos un digito y un alfanumérico,
	//	no puede contener caracteres especiales.
	password = document.getElementById("pass").value;
    if (!(/(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{6,10})$/.test(password)) ) {
    	alert('[ERROR] La contraseña debe tener entre 6 y 10 caracteres, por lo menos un digito y un alfanumérico, y no puede contener caracteres especiales');
 		return false;
    }
	
	return true;
}


function validarComentario(){
	comment = document.getElementById("comment").value;
	if(comment.length<3 && comment.length>300){
		alert('[ERROR] El comentario debe tener un tamaño entre 3 y 300 caracteres.');
  		return false;
	}
	return true;
}


function validarNoticia(){
	titulo = document.getElementById("titulo").value;
	if(titulo.length<2){
		alert('[ERROR] Título demasiado corto.');
  		return false;
	}

	texto = document.getElementById("texto").value;
	if(text.length<6){
		alert('[ERROR] Noticia demasiado corta.');
  		return false;
	}	
	return true;
}

function validarBorrarNoticia(){
	id = document.getElementById("id").value;
	if (!(/^[0-9]*$/.test(id)) ){
    	alert('[ERROR] El id es un número.');
  		return false;
	}
	return true;
}