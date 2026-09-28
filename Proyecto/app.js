function mostrarPopup() {
    let confirmar = confirm("¿Deseas ingresar nuevos datos?");

    if (confirmar) {
        window.location.href = "index.php";
    }
}