  
<?php $__env->startSection('contenido'); ?> 

  <div class="row">
    <div class="col-lg-1">  
    </div>
    <div class="col-lg-10">  
          <?php foreach($idcategoria as $a): ?>

    <center> <h1 style="text-transform: uppercase; font-weight: bold;"> <?php echo e($a->nombre); ?> </h1> </center>

    <?php endforeach; ?>

  <div class="panel-group" id="accordion" role="tablist">

    <?php foreach($idc as $mov): ?>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="ab">

          <h2 class="panel-title">
            <?php $x = "#".$mov->idpublic; ?>
              <a href="<?php echo "$x"; ?>" data-toggle="collapse" data-parent="#accordion">
                <strong style="font-size: 18px;"><?php echo e($mov->titulo); ?></strong>
                
                <i class="fa fa-chevron-circle-down pull-right" aria-hidden="true" style="font-size: 25px;"></i>

              </a><br>
              <?php echo e($mov->estado); ?>

              <p class="pull-right" style="font-size: 17px;"> <?php echo e($mov->fecha); ?> </p>
          </h2>

        </div>  


        <div id="<?php echo e($mov->idpublic); ?>" class="panel-collapse collapse">
          <div class="panel-body">
            <p style="font-size: 18px;"><?php echo nl2br(e($mov->descripcion)); ?></p>

            <?php 

              if ($mov->estado == 'activa') {
                echo"<a href='mailto:info@incotec.com.bo'><button class='btn btn-primary pull-right' style='background-color: black;'>enviar propuesta</button></a>";
              }
              else {
                echo"<a href='mailto:info@incotec.com.bo'><button class='btn btn-primary pull-right' style='background-color: black;' disabled='true'>enviar propuesta</button></a>";
              }

             ?>
            

          </div>
        </div>
    </div>  

    <?php endforeach; ?>

  </div>
    </div>
    <div class="col-lg-1">  
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>