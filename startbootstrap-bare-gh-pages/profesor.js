let nombre = document.getElementById("nombreProfesor")
let emailProfesor = document.getElementById("emailProfesor")
let password = document.getElementById("password")
let passwordConfir = document.getElementById("password2")
let form = document.getElementById("form")
let alert1 = document.querySelector('[name="alert"]')

form.addEventListener("submit", e => {
    e.preventDefault()


    let regex = /^[a-zA-Z][a-zA-Z0-9]*$/;
    let regexEmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    let enviar = false;
    let idUsuario = uuid.v4();
    let nombreUsuario = usuario.value.trim();
    let emailUsuario = email.value.trim();
    let passwordUsuario = password.value.trim();
    let passwordUsuario2 = passwordConfir.value.trim();


    if (password.value == "" || password.value.length < 5) {
        enviar = true
        showAlert("error", "La contraseña es muy corta o el campo esta vacio", alert1)

    


 

    if (password.value !== passwordConfir.value) {
        enviar = true
        showAlert("error", "Las contraseñas no coinciden", alert1)
    }
    if (email.value.length == "") {
        enviar = true
        showAlert("error", "El Email del usuario no puede estar vacio", alert1)
    }
    if (!regexEmail.test(email.value)) {
        showAlert("error", "El email es invalido", alert1)
    }

    }
    if (usuario.value.length == "" || usuario.value.length < 5) {
        enviar = true
        showAlert("error", "El nombre de usuario no puede estar vacio o tener menos de 5 caracteres", alert1)
    }


    if (usuarioList.find(usuario => usuario[1] == nombreUsuario.trim())) {
        showAlert("error", "Existe usuario", alert1)
        enviar = true;
    }
    if (usuarioList.find(usuario => usuario[3] == emailUsuario.trim())) {
        showAlert("error", "Existe email", alert1)
        enviar = true;

    }

    if (enviar) {

    } else {
        showAlert("ok", "Se registro correctamente", alert1)
        usuarioList.push([idUsuario, nombreUsuario, emailUsuario, CryptoJS.SHA256(passwordUsuario).toString(), CryptoJS.SHA256(passwordUsuario2).toString(), new Date()])
    }






})






function showAlert(tipo, mensaje, divElement) {
    divElement.innerHTML = mensaje;
    switch (tipo) {
        case "ok":
            divElement.className = "alert alert-primary";
            break;
        case "error":
            divElement.className = "alert alert-warning";
            break;
        case "info":
            divElement.className = "alert alert-success";
            break;

    }
    divElement.hidden = false;
    setTimeout(function () {
        divElement.hidden = true;
    }, 7000)
};