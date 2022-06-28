Swal.fire({
  title: '¿Desea confirmar pago de cita?',
  text: "Confirme pago",
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Confirmar',
  cancelButtonText:'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      window.location = "../view_citas/citaspac.php"
  }
})