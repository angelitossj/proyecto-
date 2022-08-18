const alumnos=[{
   id:uuid.v4(),
    colegio:"EPET 7",
    requisitos:"Fotocopia de dni, Fotocopia de CUIL, Fotocopia de Domicilio"

}]



function ins(){
let opcion=document.getElementById("opcion").value
let parrafo=document.getElementById("mensaje")
let mensajitos=""


for (let i = 0; i < alumnos.length; i++) {
    
if (opcion="1"){

mensajitos +=`<br> <p>${alumnos[i].requisitos}</p>`
parrafo.innerHTML=mensajitos

//    alert(alumnos[i].requisitos)
}

    
}




}