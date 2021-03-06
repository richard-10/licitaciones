  
<?php $__env->startSection('contenido'); ?> 

<?php echo $__env->make('convocatoriasactivas.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <div class="row">

    <div class="col-lg-2">  
    </div>


    <div class="col-lg-8">  
        
        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Convocatorias Activas </h2> </center>


<?php if(Auth::user()->privilegio != 1): ?>

  <div class="panel-group" id="accordion" role="tablist">

    <?php foreach($sql as $mov): ?>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="ab">

          <h2 class="panel-title">
            <?php $x = "#".$mov->idpublic; ?>
              <a href="<?php echo "$x"; ?>" data-toggle="collapse" data-parent="#accordion">
                <strong style="font-size: 18px;"><?php echo e($mov->titulo); ?></strong>
                
                <i class="fa fa-chevron-circle-down pull-right" aria-hidden="true" style="font-size: 25px;"></i>

              </a><br>
              <?php echo e($mov->nombre); ?>

              <p class="pull-right" style="font-size: 17px;"> <?php echo e($mov->fecha); ?> </p>
          </h2>

        </div>  


        <div id="<?php echo e($mov->idpublic); ?>" class="panel-collapse collapse">
          <div class="panel-body">

          <a href="<?php echo nl2br(e($mov->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> DESCARGAR</button></a>

            <!-- <p style="font-size: 18px;"><?php echo nl2br(e($mov->descripcion)); ?></p> -->

            <a href='mailto:info@incotec.com.bo'><button class='btn btn-primary' style='background-color: black; font-size: 15px;'>Enviar Propuesta</button></a>        

          </div>
        </div>
    </div>  

    <?php endforeach; ?>

    <?php echo $sql->render(); ?>


  </div>

<?php endif; ?> 


<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


<?php if(Auth::user()->privilegio == 1): ?>

  <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="panel-group" id="accordion" role="tablist">

    <?php foreach($sqlAdm as $movAdm): ?>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="ab">

          <h2 class="panel-title">
            <?php $x = "#".$movAdm->idpublic; ?>
              <a href="<?php echo "$x"; ?>" data-toggle="collapse" data-parent="#accordion">
                <strong style="font-size: 18px;"><?php echo e($movAdm->titulo); ?></strong>
                
                <i class="fa fa-chevron-circle-down pull-right" aria-hidden="true" style="font-size: 25px;"></i>

              </a><br>
              <?php echo e($movAdm->nombre); ?>

              <p class="pull-right" style="font-size: 17px;"> <?php echo e($movAdm->fecha); ?> </p>
          </h2>

        </div>  


        <div id="<?php echo e($movAdm->idpublic); ?>" class="panel-collapse collapse">
          <div class="panel-body">

          <a href="<?php echo nl2br(e($movAdm->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> DESCARGAR</button></a>


            <button class="btn btn-warning" style="font-size: 15px;" data-toggle="modal" data-target="#ModalAdjudicar" data-id="<?php echo e($movAdm->idpublic); ?>" data-t="<?php echo e($movAdm->titulo); ?>" data-c="<?php echo e($movAdm->nombre); ?>"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> ADJUDICAR</button>

          </div>
        </div>
    </div>  

    <?php endforeach; ?>
    
    <?php echo $sqlAdm->render(); ?>


  </div>

<?php endif; ?> 


    </div>



    <div class="col-lg-2">  
    </div>

  </div>

  <?php echo Html::script('js/jsmodal.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>