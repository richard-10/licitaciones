
    $('#ModalAdjudicar').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) // Botón que activó el modal
      var idp = button.data('id') // Extraer la información de atributos de datos
      var titulo = button.data('t') // Extraer la información de atributos de datos
      var categoria = button.data('c') // Extraer la información de atributos de datos
      
      var modal = $(this)
      modal.find('.modal-body #txtidpublic').val(idp)
      modal.find('.modal-body #txttitulo2').val(titulo)
      modal.find('.modal-body #txtcat2').val(categoria)
      modal.find('.modal-body #txttitulo').val(titulo)
      modal.find('.modal-body #txtcat').val(categoria)

      $('.alert').hide();//Oculto alert

    })


