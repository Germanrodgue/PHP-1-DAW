function validate_nombre(nombre) {
    if (nombre.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
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

/*function validate_date_birthday(date_birthday) {
    if (date_birthday.length > 0) {
        var regexp = /\d{2}.\d{2}.\d{4}$/;
        return regexp.test(date_birthday);
    }
    return false;
}*/
function validate_user() {
    var result = true;

    
    var nombre = document.getElementById('nombre').value;
    
    var correo = document.getElementById('correo').value;
  
    
   
    var v_nombre = validate_nombre(nombre);
   
    var v_email = validate_email(correo);
  
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
    

    /*if (!v_date_birthday) {
        document.getElementById('e_date_birthday').innerHTML = "La fecha introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_date_birthday').innerHTML = "";
    }*/
    return result;
}