function validate_nombre(nombre) {
    if (nombre.length > 0) {
        var regexp = /^[a-zA-Z]*$/;
        return regexp.test(nombre);
    }
    return false;
}
function validate_email(correo) {
    if (correo.length > 0) {
        var regexp = /^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,4}$/i;
        return regexp.test(correo);
    }
    return false;
}

function validate_fecha(fecha) {
    if (fecha.length > 0) {
        var regexp = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
        return regexp.test(fecha);
    }
    return false;
}
function validate_link(link) {
    if (link.length > 0) {
        var regexp = /(https?:\/\/[^\s]+)/;
        return regexp.test(link);
    }
    return false;
}
function validate_imgnombre(imgnombre) {
    if (imgnombre.length > 0) {
        var regexp = /^[a-zA-Z]*$/;
        return regexp.test(imgnombre);
    }
    return false;
}

function validate_descr(descr) {
    if (descr.length > 0) {
        var regexp = /^[a-zA-Z ]*$/;
        return regexp.test(descr);
    }
    return false;
}


function validate_user() {
    var result = true;

    
    var nombre = document.getElementById('nombre').value;
    
    var correo = document.getElementById('correo').value;
  
    var fecha = document.getElementById('demo1').value;

    var link = document.getElementById('link').value;

    var imgnombre = document.getElementById('imgnombre').value;

    var descr = document.getElementById('descr').value;

   
    var v_nombre = validate_nombre(nombre);
   
    var v_email = validate_email(correo);

    var v_fecha = validate_fecha(fecha);

    var v_link = validate_link(link);

    var v_imgnombre = validate_imgnombre(imgnombre);

    var v_descr = validate_descr(descr);
    //var v_date_birthday = validate_date_birthday(date_birthday);


    
    if (!v_nombre) {
        document.getElementById('e_nombre').innerHTML = "El nombre introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_nombre').innerHTML = "";
    }
    
    if (!v_email) {
        document.getElementById('e_email').innerHTML = "El email introducido no es valido";
        result = false;

    } else {
        
        document.getElementById('e_email').innerHTML = "";
    }
     
    if (!v_fecha) {
        document.getElementById('e_fecha').innerHTML = "La fecha introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_fecha').innerHTML = "";
    }

     if (!v_link) {
        document.getElementById('e_link').innerHTML = "El link introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_link').innerHTML = "";
    }

    if (!v_imgnombre) {
        document.getElementById('e_imgnombre').innerHTML = "El nombre de la imagen introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_imgnombre').innerHTML = "";
    }

     if (!v_descr) {
        document.getElementById('e_descr').innerHTML = "La descripcion debe ser entre 20 y 140 caracteres";
        result = false;
    } else {
        document.getElementById('e_descr').innerHTML = "";
    }

    /*if (!v_date_birthday) {
        document.getElementById('e_date_birthday').innerHTML = "La fecha introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_date_birthday').innerHTML = "";
    }*/
    return result;
}