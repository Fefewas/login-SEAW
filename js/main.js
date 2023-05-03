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

function mostrarContraseña() {
    mostrar.classList.add('fa-eye-slash');
    mostrar.classList.remove('fa-eye');
}