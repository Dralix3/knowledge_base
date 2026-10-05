console.log("Buenos días, mundo!");
const btns = document.querySelectorAll('button[id^="btnLogin"]');
btns.forEach((btn) => {
  btn.addEventListener('click', e => {
    console.log(e.target.id)
  });
});
function login() {
    console.log("Dentro del login");
    var nombrereal= "maria"; 
    var txtName = document.getElementById("txtName").value;
    console.log("Nombre ingresado: " + txtName);
    if (txtName === nombrereal) {
        console.log("Usuario correcto");
        document.getElementById("mensaje").innerHTML = "Usuario correcto";
        document.getElementById("mensaje").style.color = "green";
        document.getElementById("mensaje").classList.add('success');
        document.getElementById("txtName").value = "";
        document.getElementById("btnLogin").style.display = "none";
        document.getElementByClassName("txtPassword").style.display = "none";
    } else {
        console.log("Usuario incorrecto");
        document.getElementById("mensaje").innerHTML = "Usuario incorrecto";
        document.getElementById("mensaje").style.color = "red";
        document.getElementById("mensaje").classList.remove('success');
    }
}
