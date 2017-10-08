<!-- Modal -->
<div id="ModalContraseña" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>¿Olvidaste la contraseña?</b></h3>
      </div> 


      <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

         {{Form::open(array('url' => 'contrasena'))}} 
         
              <div class="form-group">

                  {!!Form::label('correo','Introduce el correo con el cual ha sido registrado:')!!}
                  
                  <input type="email" class="form-control" placeholder="Correo electrónico" name="emails" required autofocus>

              </div>    

        </div>
      </div>


      <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          {!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}

          {!!Form::close()!!}
              <!--button class="btn btn-primary"  onclick="crearalimento()" id="btnregistrar">REGISTRAR</button-->
          <button data-dismiss="modal" class="btn btn-danger">CANCELAR</button>
       </div>
      </div>

    </div>
  </div>
</div>

