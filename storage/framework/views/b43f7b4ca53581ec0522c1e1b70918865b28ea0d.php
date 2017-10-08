  
<?php $__env->startSection('contenido'); ?> 

      <?php echo Html::style('css/estilo.css'); ?>

      <?php echo Html::style('css/font-awesome.css'); ?>



      <div class="container well" id="sha">

    <div class="row">
          <div class="col-xs-12">
            <img src="images/email.png" class="img-responsive" id="avatar">
          </div>
    </div>
 
    <?php echo Form::open(['route'=>'mail.store', 'method'=>'POST']); ?>


        <div class="form-group">
          <input type="email" class="form-control" placeholder="Correo electrónico" name="email" required autofocus>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btns">Enviar</button> <br>
 
    <?php echo Form::close(); ?>


        <div >
           <p class="help-block">Introduzca el código de verificación.</p>
           <center><img src="" id="image" style="height: 40px;">
  
            <button type="button" class="btn btn-danger" id="btn"><i class="fa fa-refresh" aria-hidden="true"></i> refresh</button>
            </center>
        </div>
        <div>
            <center><input type="text" class="form-control" id="txtcaptcha" style="margin-top: 5px; width: 70%;"></center> 
        </div>

        <?php echo Html::script('js/myjs.js'); ?>


  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>