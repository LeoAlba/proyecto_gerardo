function confirmacion(event) {
    if (confirm("¿Está seguro que desea eliminar este registro?")) {
        return true;
    }   else {
        event.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".boton_eliminar");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click',confirmacion);
}