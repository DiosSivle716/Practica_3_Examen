function confirmacion(event){
  if (confirm("Quieres Borrarlo?")){
    return true;
  } else {
    event.preventDefault();
  }
}
let linkDelete = document.querySelectorAll(".table__item__link");
for (var i = 0; i < linkDelete.length; i++) {
linkDelete[i].addEventListener('click', confirmacion);
}
