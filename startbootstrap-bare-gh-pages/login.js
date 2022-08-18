let usuarioList = [];


usuarioList.push([uuid.v4(), "Angelito", "angelito@gmail.com", CryptoJS.SHA256("123456").toString(), new Date()]);


let divAlert2 = document.querySelector('[name="alert2"]');
let login = document.getElementById("login");

login.addEventListener("submit", e => {
    e.preventDefault()

    let nombre = document.getElementById("Usuario2").value;
    let password = document.getElementById("password2").value;






    for (let index = 0; index < usuarioList.length; index++) {
        if (nombre==""){
            showAlert("error","no deje vacio el campo",divAlert2)
        }

        if (usuarioList[index][1] !== nombre || usuarioList[index][3] !== CryptoJS.SHA256(password).toString()) {
           
            showAlert("error", "Inicio de Sesión Fallida", divAlert2)
        }
        //  else  {
            
        //     showAlert("ok", "Inicio de Sesión Exitoso", divAlert2)
        // }
     if(usuarioList[index][1] == nombre || usuarioList[index][3] == CryptoJS.SHA256(password).toString()) {
           
        showAlert("ok", "Inicio de Sesión exitoso", divAlert2)
    }

    }
})