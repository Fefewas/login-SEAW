const mostrar = document.querySelectorAll('i');
const inputs = document.querySelectorAll('input');
inputs.forEach( input =>{
    input.onfocus = function(){
        input.previousElementSibling.classList.add('top');
        input.previousElementSibling.classList.add('focus');
        input.parentNode.classList.add('focus');
    }
    input.onblur = function(){
        if (input.value.trim().length == 0){
        input.previousElementSibling.classList.remove('top');
    }
        input.previousElementSibling.classList.remove('focus');
        input.parentNode.classList.remove('focus');
    }
});
function mostrarContraseña(){
    var visible = document.getElementById('contraseña');
    if(visible.type == 'password'){
        visible.type = 'text';
    }
    else{
        visible.type = 'password';
    }
}
if (mostrar.classList.contains('fa-eye-slash')){
    mostrar.forEach( i =>{
        i.onclick = function(){
            mostrar.classList.remove('fa-eye-slash');
            mostrar.classList.add('fa-eye');
        }
    });
}
else{
    mostrar.forEach( i =>{
        i.onclick = function(){
            mostrar.classList.remove('fa-eye');
            mostrar.classList.add('fa-eye-slash');
        }
    });
}