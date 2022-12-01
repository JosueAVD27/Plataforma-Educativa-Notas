function ConfirmDeleteTipo(){
    var respuesta = confirm("Estas seguro que deseas eliminar este permiso?");
    if(respuesta == true){
        return true;
    }else{
        return false;
    }
}

function ConfirmDeleteEstado(){
    var respuesta = confirm("Estas seguro que deseas eliminar este estado?");
    if(respuesta == true){
        return true;
    }else{
        return false;
    }
}

function ConfirmPermiso(){
    var respuesta = confirm("Estas seguro que deseas actualizar este permiso?");
    if(respuesta == true){
        return true;
    }else{
        return false;
    }
}

function ConfirmEstado(){
    var respuesta = confirm("Estas seguro que deseas actualizar este estado?");
    if(respuesta == true){
        return true;
    }else{
        return false;
    }
}