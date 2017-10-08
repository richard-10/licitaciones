  
<?php $__env->startSection('contenido'); ?> 


  <div class="container">
    <div class="row">
      <div class="col-lg-6">
		    <?php  $sql = DB::select('select nombre, idpublic, titulo, descripcion, DATE_FORMAT(fecha,"%d-%m-%Y") AS fecha FROM categoria, convocatoria WHERE categoria.idcat=convocatoria.idcat AND convocatoria.id='.Auth::user()->id. ' Order by fecha desc LIMIT 5'); ?>

            
            <h3><i class="fa fa-star" aria-hidden="true" style="color: #FACB14;"></i> Convocatorias Aprobadas
             <a href="<?php echo URL::to('convocatoriasaprobadas'); ?>"> <button class="btn btn-primary pull-right" style="font-size: 15px; background-color: black; border-color: black;">Ver Todas</button></a>
            </h3>	


			<div class="panel-group" id="accordion" role="tablist">

    			<?php foreach($sql as $mov): ?>

      				<div class="panel panel-default">
        				<div class="panel-heading" role="tab" id="ab" >

          					<h2 class="panel-title">

            					<?php $x = "#".$mov->idpublic; ?>
              					<a href="<?php echo "$x"; ?>" data-toggle="collapse" data-parent="#accordion">
                					<strong style="font-size: 18px;"><?php echo e($mov->titulo); ?></strong>

                					<i class="fa fa-chevron-circle-down pull-right" aria-hidden="true" style="font-size: 23px;"></i>
                					
              					</a><br>

                        <?php echo e($mov->nombre); ?>


                          <p style="font-size: 15px;" class="pull-right"><?php echo e($mov->fecha); ?></p>

          					</h2>

        				</div>  

        				<div id="<?php echo e($mov->idpublic); ?>" class="panel-collapse collapse">
         					<div class="panel-body">
            					<p style="font-size: 17px;"><?php echo nl2br(e($mov->descripcion)); ?></p>
          					</div>
        				</div>
   					 </div>  

    			<?php endforeach; ?>

  			</div>

      </div>

      <div class="col-lg-6">
      	<h3> Envíanos tu consulta </h3>

        <?php echo Form::open(['route'=>'consulta.store', 'method'=>'POST']); ?>


          <div class="form-group">

            <label style="font-size: 18px;">Asunto:</label><br>
            <input type="text" class="form-control" name="asunto" placeholder="Asunto" required style="border-radius: 5px; width: 85%;">

                <br>

            <label style="font-size: 18px;">Mensaje:</label>
            <textarea class="form-control" rows="5" name="mensaje" placeholder="Mensaje" required style="border-radius: 5px; width: 85%;"></textarea>

            <input type="hidden" name="correo" value="<?php echo Auth::user()->correo; ?>">

          </div>

          <button class="btn btn-lg btn-primary" type="submit" id="btnc">ENVIAR</button> <br><br>
 
        <?php echo Form::close(); ?>


        <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


      </div>

    </div>
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>