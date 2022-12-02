function ConfirmDeleteTipo(){
    var respuesta = confirm("Estas seguro que deseas eliminar este permiso?");
    if(respuesta == true){
        return true;
    }else{
        return false;
    }
}

function ConfirmAggMateria(){
    var respuesta = confirm("Estas seguro que deseas agregar la materia?");
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

function ConfirmDeleteEstadoNegado(event){
    event.preventDefault()
    window.alert("No puedes eliminar este campo");
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

function ConfirmDeleteMateria(){
    var respuesta = confirm("Estas seguro que deseas cambiar el estado de esta materia?");
    if(respuesta == true){
        return true;
        
    }else{
        return false;
    }
}

function ConfirmMateria(){
    var respuesta = confirm("Estas seguro que deseas actualizar esta materia?");
    if(respuesta == true){
        return true;
        
    }else{
        return false;
    }
}

function ConfirmPerm(){
    var respuesta = confirm("Estas seguro que deseas ingresar un nuevo permiso?");
    if(respuesta == true){
        return true;
        
    }else{
        return false;
    }
}

function ConfirmEst(){
    var respuesta = confirm("Estas seguro que deseas ingresar un nuevo estado?");
    if(respuesta == true){
        return true;
        
    }else{
        return false;
    }
}

function ConfirmUsuario(){
    var respuesta = confirm("Estas seguro que deseas actualizar este usuario?");
    if(respuesta == true){
        return true;
        
    }else{
        return false;
    }
}


function ConfirmInscripcion(){
    var respuesta = confirm("Estas seguro que deseas inscribir a este usuario?");
    if(respuesta == true){
        return true;
        
    }else{
        return false;
    }
}