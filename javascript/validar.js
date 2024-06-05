document.addEventListener("DOMContentLoaded", function (event) {
    document.getElementById('reg').addEventListener('submit', validar)
});



function validar(e) {
    e.preventDefault();
    var errorMessage = document.getElementById('error-message');

    var pass = document.querySelector('.password');
    var control = document.querySelector('.control');
    var ctr = control.value.substr(0, 2);
    var today = new Date();
    var year = today.getFullYear();
    var si = Number(ctr) + 2000;

    if (!control || !pass) {
        errorMessage.textContent = 'Por favor, completa todos los campos';
        return;
    }else if (!/^\d{8}$/.test(control.value)) {
        errorMessage.textContent = 'El número de control debe tener 8 dígitos';
        return;
    }else if (!((year - si) >= 4)) {
        errorMessage.textContent = 'No eres un estudiante válido';
        return;
    }else if (!(pass.value.length >= 8 && pass.value.length <= 16 && /[A-Z]/.test(pass.value) && /[!@#$%^&*]/.test(pass.value))) {
        errorMessage.textContent = 'La contraseña debe tener entre 8 y 16 caracteres, al menos una letra mayúscula y un carácter especial(!@#$%^&*)';
        return;
    }
    
    this.submit();
}
