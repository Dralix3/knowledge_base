console.log("Buenos días, mundo!"); // console.log() es una función que se utiliza para imprimir mensajes en la consola del navegador. En este caso, se está imprimiendo el mensaje "Buenos días, mundo!" en la consola.
const btns = document.querySelectorAll('button[id^="btnLogin"]');//const btns = document.querySelectorAll('button[id^="btnLogin"]'); // Se seleccionan todos los botones que tienen un id que comienza con "btnLogin" y se almacenan en la constante btns.
btns.forEach((btn) => {//btns.forEach((btn) => { // Se recorre cada botón seleccionado en btns.
  btn.addEventListener('click', e => {//btn.addEventListener('click', e => { // Se agrega un evento de escucha para el evento 'click' en cada botón. Cuando se hace clic en un botón, se ejecuta la función que sigue.
    console.log(e.target.id)//console.log(e.target.id) // Se imprime en la consola el id del botón que fue clickeado.
    login();//login() // Se llama a la función login() cuando se hace clic en el botón.       
  });
});
function login() {//function login() { // Se define la función login(). 
    console.log("Dentro del login");//console.log("Dentro del login"); // Se imprime en la consola el mensaje "Dentro del login" para indicar que se ha ingresado a la función login().
    var nombrereal= "maria"; //var nombrereal= "maria"; // Se declara una variable llamada nombrereal y se le asigna el valor "maria". Esta variable representa el nombre de usuario correcto.
    var txtName = document.getElementById("txtName").value;//var txtName = document.getElementById("txtName").value; // Se obtiene el valor ingresado en el campo de texto con id "txtName" y se almacena en la variable txtName.
    console.log("Nombre ingresado: " + txtName);//console.log("Nombre ingresado: " + txtName); // Se imprime en la consola el nombre ingresado por el usuario.
    if (txtName === nombrereal) {//if (txtName === nombrereal) { // Se compara el valor ingresado por el usuario (txtName) con el nombre de usuario correcto (nombrereal). Si son iguales, se ejecuta el bloque de código dentro del if.
        console.log("Usuario correcto");//console.log("Usuario correcto"); // Se imprime en la consola el mensaje "Usuario correcto" para indicar que el nombre ingresado es correcto.
        document.getElementById("mensaje").innerHTML = "Usuario correcto";//document.getElementById("mensaje").innerHTML = "Usuario correcto"; // Se actualiza el contenido del elemento con id "mensaje" para mostrar el mensaje "Usuario correcto" en la página.
        document.getElementById("mensaje").style.color = "green";//document.getElementById("mensaje").style.color = "green"; // Se cambia el color del texto del elemento con id "mensaje" a verde para indicar éxito.
        document.getElementById("mensaje").classList.add('success');//document.getElementById("mensaje").classList.add('success'); // Se agrega la clase 'success' al elemento con id "mensaje" para aplicar estilos adicionales si es necesario.
        document.getElementById("txtName").value = "";//document.getElementById("txtName").value = ""; // Se limpia el campo de texto con id "txtName" estableciendo su valor a una cadena vacía.
        document.getElementById("btnLogin").style.display = "none";//document.getElementById("btnLogin").style.display = "none"; // Se oculta el botón de inicio de sesión estableciendo su estilo de visualización a "none".
        document.getElementsByClassName("txtPassword")[0].style.display = "none";//document.getElementsByClassName("txtPassword")[0].style.display = "none"; // Se oculta el campo de contraseña estableciendo su estilo de visualización a "none". (Nota: Este código tiene un error, debería ser getElementsByClassName y manejar el índice del elemento).
    } else {
        console.log("Usuario incorrecto");//console.log("Usuario incorrecto"); // Se imprime en la consola el mensaje "Usuario incorrecto" para indicar que el nombre ingresado no es correcto.
        document.getElementById("mensaje").innerHTML = "Usuario incorrecto";//document.getElementById("mensaje").innerHTML = "Usuario incorrecto"; // Se actualiza el contenido del elemento con id "mensaje" para mostrar el mensaje "Usuario incorrecto" en la página.
        document.getElementById("mensaje").style.color = "red";//document.getElementById("mensaje").style.color = "red"; // Se cambia el color del texto del elemento con id "mensaje" a rojo para indicar error.
        document.getElementById("mensaje").classList.remove('success');//document.getElementById("mensaje").classList.remove('success'); // Se elimina la clase 'success' del elemento con id "mensaje" para quitar estilos de éxito si estaban aplicados.
    }
}
