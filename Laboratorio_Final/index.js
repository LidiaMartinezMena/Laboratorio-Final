function compruebanombre(){
	var name = document.getElementById("nombre");
	if (!/^[a-zA-Z ]+$/.test(name.value)){
		name.classList.remove("textoverde");
		name.classList.add("textorojo");
		document.getElementById("no1").style = "display:block";
		document.getElementById("nombre").value='';
	} 
	else {
		document.getElementById("no1").style = "display:none";
		name.classList.remove("textorojo");
		name.classList.add("textoverde");
	}	
}

function compruebaapellido(){
	var name = document.getElementById("primerapellido");
	if (!/^[a-zA-Z ]+$/.test(name.value)){
		name.classList.remove("textoverde");
		name.classList.add("textorojo");
		document.getElementById("no2").style = "display:block";
		document.getElementById("primerapellido").value='';
	} 
	else {
		document.getElementById("no2").style = "display:none";
		name.classList.remove("textorojo");
		name.classList.add("textoverde");
	}	
}
function compruebaapellido2(){
	var name = document.getElementById("segundoapellido");
	if (!/^[a-zA-Z ]+$/.test(name.value)){
		name.classList.remove("textoverde");
		name.classList.add("textorojo");
		document.getElementById("no3").style = "display:block";
		document.getElementById("segundoapellido").value='';
	} 
	else {
		document.getElementById("no3").style = "display:none";
		name.classList.remove("textorojo");
		name.classList.add("textoverde");
	}	
}


function compruebaemail(){
	var mail = document.getElementById("email");
	if (!/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(mail.value)){
		mail.classList.remove("textoverde");
		mail.classList.add("textorojo");
		document.getElementById("no4").style = "display:block";
        document.getElementById("email").value='';
	} 
	else {
		document.getElementById("no4").style = "display:none";
		mail.classList.remove("textorojo");
		mail.classList.add("textoverde");
	}
}

function compruebalogin(){
	var name = document.getElementById("Login");
	if (!name.value == null || name.value.length == 0 || /^\s+$/.test(name.value)){
		name.classList.remove("textoverde");
		name.classList.add("textorojo");
		document.getElementById("no5").style = "display:block";
		document.getElementById("Login").value='';
	} 
	else {
		document.getElementById("no5").style = "display:none";
		name.classList.remove("textorojo");
		name.classList.add("textoverde");
	}	
}

function compruebapassword(){
	var clave = document.getElementById("pwd1");
	if (!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/.test(clave.value)){
		clave.classList.remove("textoverde");
		clave.classList.add("textorojo");
		document.getElementById("no6").style = "display:block";
		document.getElementById("pwd1").value='';
	} 
	else {
		document.getElementById("no6").style = "display:none";
		clave.classList.remove("textorojo");
		clave.classList.add("textoverde");
	}	
}

function compruebapassword2(){
	var pwd1 = document.getElementById("pwd1");
    var pwd2 = document.getElementById("pwd2");
	if (pwd1.value != "" && pwd1.value != pwd2.value){
		pwd2.classList.remove("textoverde");
		pwd2.classList.add("textorojo");
		document.getElementById("no7").style = "display:block";
		document.getElementById("pwd1").value='';
        document.getElementById("pwd2").value='';
	} 
	else {
		document.getElementById("no7").style = "display:none";
		pwd2.classList.remove("textorojo");
		pwd2.classList.add("textoverde");
	}	
}

function comprobar(){
	compruebanombre();
    compruebaapellido();
    compruebaapellido2();
	compruebaemail();
	compruebalogin();
	compruebapassword();
    compruebapassword2();
	var name = document.getElementById("nombre");
    var primerapellido = document.getElementById("primerapellido");
    var segundoapellido = document.getElementById("segundoapellido");
	var mail = document.getElementById("email");
	var login = document.getElementById("Login");
	var pwd1 = document.getElementById("pwd1");
    var pwd2 = document.getElementById("pwd2");
	if (name.className=="textoverde" && primerapellido.className=="textoverde" && segundoapellido.className=="textoverde" && mail.className=="textoverde" && login.className== "textoverde" && pwd1.className=="textoverde" && pwd2.className=="textoverde"){
		window.alert("La inscripción ha sido correcta");
	} 
	else {
		window.alert("Por favor, introduzca bien todos los campos");
	}
}