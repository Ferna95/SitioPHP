$(document).ready(function() {
    $('.img3').hide();
    $('.img2').hide();
});

$('.c1').on("click", function(e){
    $('.img1').show();
    $('.img2').hide();
    $('.img3').hide();
});

$('.c2').on("click", function(e){
    $('.img1').hide();
    $('.img2').show();
    $('.img3').hide();
});

$('.c3').on("click", function(e){
    $('.img1').hide();
    $('.img2').hide();
    $('.img3').show();
});

$(".link-news").on("click",function(e){
	$("html, body").animate({scrollTop: 600},500);
});




function valida(f){
    if(!document.getElementById('usuario').value || !document.getElementById('clave').value){
        alert("Por favor complete los campos");
        return false;
    }
    else{
        return true;
    }
}

function validarUser(f){
	if(!f['usuario'].value ||
		!f['clave'].value ||
		!f['clave2'].value ||
		!f['nombre'].value ||
		!f['apellido'].value ||
		!f['telefono'].value ||
		!f['mail'].value){
		alert("Por favor, complete todos los campos");
		return false;
	}
	else if(f['clave'].value != f['clave2'].value){
		alert("Repita correctamente la contraseña");
		return false;
	}
	else if(seguro()){
		return true;
	}
	else{
		return false;
	}
}

function validarClase(f){
	if(!f['nombre'].value ||
		!f['profesor'].value ||
		!f['cupo'].value){
		alert("Por favor, complete todos los campos");
		return false;
	}
	else if(!(f['cupo'].value > 0)){
		alert("Ingrese un cupo correcto");
		return false;
	}
	else if(seguro()){
		return true;
	}
	else{
		return false;
	}
}

function seguro(){
	if(confirm("¿Desea realizar los cambios?")){
		return true;
	}
	else{
		return false;
	}
}