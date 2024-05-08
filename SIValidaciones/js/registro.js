function validarDatos() {
    var nombre = document.getElementById('nombre').value;
    var edad = document.getElementById('edad').value;
    var correo = document.getElementById('correo').value;
    var usuario = document.getElementById('usuario').value;
    var pass = document.getElementById('pass').value;
    var passConf = document.getElementById('passConf').value;
    //expresiones regulares
    var expNom = new RegExp("^[A-ZÑa-zñáéíóúÁÉÍÓÚ ]+$");
    var expCor = new RegExp("^[^\s@]+@[^\s@]+\.[^\s@]+$");
    var expUs = new RegExp("^[a-zA-Z0-9]{5,}$");
    const expPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).{8,}$/;
    var validados = 0;

    let mensaje = document.getElementById("nom");
    if (expNom.test(nombre) == true) { //validacion nombre
        validados += 1;
        document.getElementById("nombre").style.borderColor = "darkslategrey";
        mensaje.innerHTML="";
    } else {
        document.getElementById("nombre").style.borderColor="#FF0000";
        mensaje.innerHTML="El nombre solo debe contener letras y espacios";
    }

    mensaje = document.getElementById("ed");
    if ((edad >= 18 && edad <= 100) && (edad % 1 == 0)) { //validacion edad
        validados += 1;
        document.getElementById("edad").style.borderColor = "darkslategrey";
        mensaje.innerHTML="";
    } else {
        document.getElementById("edad").style.borderColor="#FF0000";
        mensaje.innerHTML="La edad debe ser un número entero y estar en el rango de 18 a 100";
    }

    mensaje = document.getElementById("cor");
    if (expCor.test(correo) == true) { //validacion correo
        validados += 1;
        document.getElementById("correo").style.borderColor = "darkslategrey";
        mensaje.innerHTML="";
    } else {
        document.getElementById("correo").style.borderColor="#FF0000";
        mensaje.innerHTML=" El correo no es valido";
    }

    mensaje = document.getElementById("usu");
    if (expUs.test(usuario) == true) { //validacion usuario
        validados += 1;
        document.getElementById("usuario").style.borderColor = "darkslategrey";
        mensaje.innerHTML="";
    } else {
        document.getElementById("usuario").style.borderColor="#FF0000";
        mensaje.innerHTML=" El usuario solo debe contener letras y mínimamente 5 caracteres (sin espacios)";
    }

    mensaje = document.getElementById("pas");
    if (expPass.test(pass) == true) { //validacion contraseña
        validados += 1;
        document.getElementById("pass").style.borderColor = "darkslategrey";
        mensaje.innerHTML="";
    } else {
        document.getElementById("pass").style.borderColor="#FF0000";
        mensaje.innerHTML=" La contraseña debe contener al menos una mayúscula, una minúscula, un número, un símbolo especial y mínimamente 8 caracteres";
        // Si la contraseña no cumple los requisitos, evita que el formulario se envíe
        return false;
    }

    mensaje = document.getElementById("pasConf");
    if (pass == passConf) { //se verifica que sean la misma contraseña
        validados += 1;
        document.getElementById("passConf").style.borderColor = "darkslategrey";
        mensaje.innerHTML="";
    } else {
        document.getElementById("passConf").style.borderColor="#FF0000";
        mensaje.innerHTML=" Las contraseñas no coinciden";
        // Si las contraseñas no coinciden, evita que el formulario se envíe
        return false;
    }

    //cifrado
    var passEnc = pass.replace(/e/gi, "enter").replace(/i/gi, "imes").replace(/a/gi, "ai").replace(/o/gi, "ober").replace(/u/gi, "ufat").replace(/1/gi, "p").replace(/2/gi, "q").replace(/3/gi, "seven").replace(/4/gi, "profe").replace(/5/gi, "ponganos").replace(/6/gi, "+").replace(/7/gi, "¡").replace(/8/gi, "º").replace(/9/gi, "-");
    
    if (validados >= 6) {
        document.getElementById("usuF").innerHTML="Usuario: " + usuario;
        document.getElementById("pasF").innerHTML="Contraseña: " + pass;
        document.getElementById("pasCif").innerHTML="Contraseña Cifrada: " + passEnc;
    }

    // Si todos los datos son válidos, permite el envío del formulario
    return true;
}


function reiniciarForm(){
    var opcion = confirm("¿Seguro que deseas cancelar? \nSe borraran las cajas de texto");
    if (opcion == true) {
        document.getElementById('nombre').value = "";
        document.getElementById('edad').value = "";
        document.getElementById('correo').value = "";
        document.getElementById('usuario').value = "";
        document.getElementById('pass').value = "";
        document.getElementById('passConf').value = "";
        document.getElementById("nom").innerHTML = "";
        document.getElementById("ed").innerHTML = "";
        document.getElementById("cor").innerHTML = "";
        document.getElementById("usu").innerHTML = "";
        document.getElementById("pas").innerHTML = "";
        document.getElementById("pasConf").innerHTML = "";
        document.getElementById("nomF").innerHTML="";
        document.getElementById("edF").innerHTML="";
        document.getElementById("corF").innerHTML="";
        document.getElementById("usuF").innerHTML="";
        document.getElementById("pasF").innerHTML="";
        document.getElementById("pasCif").innerHTML="";
        document.getElementById("nombre").style.borderColor = "darkslategrey";
        document.getElementById("edad").style.borderColor = "darkslategrey";
        document.getElementById("correo").style.borderColor = "darkslategrey";
        document.getElementById("usuario").style.borderColor = "darkslategrey";
        document.getElementById("pass").style.borderColor = "darkslategrey";
        document.getElementById("passConf").style.borderColor = "darkslategrey";
	}
}

function mostrarContrasena() {
    var tipo = document.getElementById("pass");
    var boton = document.getElementById("verPass");
    if(tipo.type == "password"){
        tipo.type = "text";
        boton.value="Ocultar";
    }else{
        tipo.type = "password";
        boton.value="Ver";
    }
}