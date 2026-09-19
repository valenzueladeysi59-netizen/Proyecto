function guardarDatos() {
    let nombre = document.getElementById("nombre").value;
    let edad = document.getElementById("edad").value;
    let ciudad = document.getElementById("ciudad").value;
    let pasatiempo = document.getElementById("pasatiempo").value;

    localStorage.setItem("nombre", nombre);
    localStorage.setItem("edad", edad);
    localStorage.setItem("ciudad", ciudad);
    localStorage.setItem("pasatiempo", pasatiempo);
}
if (document.getElementById("mostrarNombre")) {
    document.getElementById("mostrarNombre").textContent = localStorage.getItem("nombre");
    document.getElementById("mostrarEdad").textContent = localStorage.getItem("edad");
    document.getElementById("mostrarCiudad").textContent = localStorage.getItem("ciudad");
    document.getElementById("mostrarPasatiempo").textContent = localStorage.getItem("pasatiempo");
}