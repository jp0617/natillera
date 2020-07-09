function Login(type_error) {
  if (type_error == "email") {
    Swal.fire({
      icon: "error",
      title: "Lo sentimos",
      text: "No es valido",
    });
  } else if (type_error == "password") {
    var men = document.getElementById("messageWrong");
    men.innerHTML =
      "Contraseña incorrecta, por favor verifique la contraseña o póngase en contacto con nuestro administrador";
  }
}
