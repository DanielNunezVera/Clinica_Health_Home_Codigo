Swal.fire({
  title: '¿Desea cancelar cita?',
  text: "Esta accion es irreversible",
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Confirmar',
  cancelButtonText:'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      window.location = "../view_citas/citasprof.php"
  }
})