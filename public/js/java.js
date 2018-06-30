/*Nombre*/
function cambiaEstilo(){
	document.getElementById{'nombre'}.style.color ='#380B61';
	document.getElementById{'nombre'}.style.fontSize = '2em';
}

function restablecer (){
	document.getElementById{'nombre'}.style.color ='#000000';
	document.getElementById{'nombre'}.style.fontSize = '12px';
}
/*Correo*/
function cambiaCorreo(){
	document.getElementById{'correo'}.style.color ='#380B61';
	document.getElementById{'correo'}.style.fontSize = '2em';
}

function restablecerCorreo (){
	document.getElementById{'correo'}.style.color ='#000000';
	document.getElementById{'correo'}.style.fontSize = '12px';
}
/*Password*/
function cambiaPassword(){
	document.getElementById{'password'}.style.color ='#380B61';
	document.getElementById{'password'}.style.fontSize = '2em';
}

function restablecerPassword (){
	document.getElementById{'password'}.style.color ='#000000';
	document.getElementById{'password'}.style.fontSize = '12px';
}
/*Conf_pass*/
function cambiaConf_pass(){
	document.getElementById{'conf_pass'}.style.color ='#380B61';
	document.getElementById{'conf_pass'}.style.fontSize = '2em';
}

function restablecerConf_pass(){
	document.getElementById{'conf_pass'}.style.color ='#000000';
	document.getElementById{'conf_pass'}.style.fontSize = '12px';
}

/*Nombre*/
	document.getElementById{'nombre'}.addEventListener('click, cambiaEstilo');
	document.getElementById{'nombre'}.addEventListener('blur, restablecer');


/*Correo*/
	document.getElementById{'correo'}.addEventListener('click, cambiaCorreo');
	document.getElementById{'correo'}.addEventListener('blur, restablecer');


/*password*/

	document.getElementById{'password'}.addEventListener('click, cambiaPassword');
	document.getElementById{'password'}.addEventListener('blur, restablecer');

/*conf_pass*/

	document.getElementById{'conf_pass'}.addEventListener('click, cambiaConf_pass');
	document.getElementById{'conf_pass'}.addEventListener('blur, restablecer');

