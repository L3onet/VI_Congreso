var body = document.getElementsByTagName("body");

oscuro.addEventListener("click",dark);
brillante.addEventListener("click",light);

function dark(){
    body.classDocument("--bs-dark")
}
