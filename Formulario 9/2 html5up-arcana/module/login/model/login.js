function validate_usuario(usuario) {
    if (usuario.length > 0) {
        var regexp = /^[a-zA-Z]*$/;
        return regexp.test(usuario);
    }
    return false;
}


function validate_login() {
    var result = true;

    
    var usuario = document.getElementById('usuario').value;
    
    

   
    var v_usuario = validate_usuario(usuario);
   
   
    //var v_date_birthday = validate_date_birthday(date_birthday);


    
    if (!v_usuario) {
        document.getElementById('e_usuario').innerHTML = "El usuario introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_usuario').innerHTML = "";
    }
    
   
    return result;
}