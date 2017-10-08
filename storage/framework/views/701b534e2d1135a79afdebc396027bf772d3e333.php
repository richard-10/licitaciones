<?php $__env->startSection('contenido'); ?>


 <?php echo Html::style('css/estilo.css'); ?>

 


  <div class="container well" id="sha">

    <div class="row">

        <div class="col-xs-12">

                <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('alerts.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <img src="images/avatar.png" class="img-responsive" id="avatar">
          
        </div>

    </div>
 
    <?php echo Form::open(['route'=>'login.store', 'method'=>'POST']); ?>


        <div class="form-group">
          <input type="email" class="form-control" placeholder="Correo electrónico" name="email" required autofocus>
        </div>
        
 
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
        </div>
 
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button> <br>

        <p class="help-block"><a href="<?php echo URL::to('registrarse'); ?>">Regístrate como proveedor</a></p>
 
   <?php echo Form::close(); ?>

 
  </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inicio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>