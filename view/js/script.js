function Login(type_error) {
  if (type_error == "email") {
    
    Swal.fire({
      icon: "error",
      title: "Lo sentimos",
      text: "No es valido",
    });
  } else if (type_error == "password") {
    
    Swal.fire({
      icon: "error",
      title: "Lo sentimos",
      text: "Por favor revisa tu contraseña",
    });
  } else if (type_error == "success") {
    
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })
    
    Toast.fire({
      icon: 'success',
      title: 'bienvenido'

    })
  }
}
