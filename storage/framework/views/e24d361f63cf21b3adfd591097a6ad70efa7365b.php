  
<?php $__env->startSection('contenido'); ?> 


  <div class="row">

    <div class="col-lg-2">  
    </div>

    <div class="col-lg-8">  
        
        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Convocatorias Aprobadas </h2> </center>

  <div class="panel-group" id="accordion" role="tablist">

 <?php foreach($sql as $mov): ?>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="ab" style="height: 50px;">

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

    <div class="col-lg-2">  
    </div>

  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>