Swal.fire({
  title: '¿Desea reasignar la cita?',
  text: "Una vez cancelada la cita, debe agendar una nueva",
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Confirmar',
  cancelButtonText:'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      window.location = "../reasignar_cita/reasignarcita.php"
  }
})