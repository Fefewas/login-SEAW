let strength = document.getElementById('strength-password');
let password = document.getElementById('password');
let confirmPassword = document.getElementById('confirm-password');
const inputs = document.querySelectorAll('input');


//código encargado de hacer el cambio de estado del placeholder de los inputs tipo password y text.
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

// función encargada de evaluar la fortaleza de la contraseña ingresada por el usuario.
password.addEventListener('keyup', passwordStrength);
function passwordStrength() {
    let strengthBar = document.getElementById('strength-password-bar');
    let strengthText = document.getElementById('strength-password-text');
    strength.classList.remove('invisible');
    if (password.value.length > 12) {
        strengthBar.classList.remove('fill--110');
        strengthBar.classList.remove('fill--25');
        strengthBar.classList.remove('fill--60');
        strengthBar.classList.add('fill--110');
        strengthText.innerHTML = 'El número máximo de caracteres es de 12';
    } else if (password.value.length <= 4) {
        strengthBar.classList.remove('fill--110');
        strengthBar.classList.remove('fill--100');
        strengthBar.classList.remove('fill--60');
        strengthBar.classList.add('fill--25');
        strengthText.innerHTML = 'Débil';
    } else if (password.value.length <= 7) {
        strengthBar.classList.remove('fill--110');
        strengthBar.classList.remove('fill--25');
        strengthBar.classList.remove('fill--100');
        strengthBar.classList.add('fill--60');
        strengthText.innerHTML = 'Medio';
    } else {
        strengthBar.classList.remove('fill--110');
        strengthBar.classList.remove('fill--25');
        strengthBar.classList.remove('fill--60');
        strengthBar.classList.add('fill--100');
        strengthText.innerHTML = '¡Fuerte!';
    }
    if (password.value.length = ''){
        strength.classList.add('invisible');
    }
}

// función encargada de hacer el cambio de la visibilidad de la contraseña.
function showPassword(){
    var visible = document.getElementById('password');
    var confirmVisible = document.getElementById('confirm-password');
    if(visible.type == 'password'){
        visible.type = 'text';
        confirmVisible.type = 'text';
    }
    else{
        visible.type = 'password';
        confirmVisible.type = 'password';
    }
}

// función encargada de asegurarse de que el usuario esté escribiendo correctamente la contraseña en el input de "confirmar contraseña".
confirmPassword.addEventListener('keyup', samePassword);
function samePassword(){
    let samePasswordText = document.getElementById('same-password-text');
    if(password.value != confirmPassword.value){
        samePasswordText.innerHTML = "Las contraseñas no coinciden";
    }
    else{
        samePasswordText.innerHTML = "";
    }
}