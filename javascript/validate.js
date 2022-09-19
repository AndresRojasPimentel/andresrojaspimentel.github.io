function validarform(){
    var nom =document.getElementById("nombre").value;
    var ape =document.getElementById("apellido").value;


    if(nom==="" || ape===""){
        alert("Ingrese los datos por favor");
    }
    
}

miFormulario = document.querySelector('#miFormulario');
miFormulario.codigo.addEventListener('keypress', function (e) {
    if (!soloNumeros(event)) {
        e.preventDefault();
    }
})

//Solo permite introducir numeros.
function soloNumeros(e) {
    var key = e.charCode;
    console.log(key);
    return key >= 48 && key <= 57;
}

