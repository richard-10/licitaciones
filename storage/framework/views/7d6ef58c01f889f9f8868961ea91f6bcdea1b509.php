  
<?php $__env->startSection('contenido'); ?> 


  <div class="row">

    <div class="col-lg-2">  
    </div>



    <div class="col-lg-8">  
        
        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Convocatorias Adjudicadas </h2> </center>

<?php if(Auth::user()->privilegio != 1): ?>

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
  
                    <a href="<?php echo nl2br(e($mov->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> DESCARGAR</button></a>

                     <!-- <p style="font-size: 17px;"><?php echo nl2br(e($mov->descripcion)); ?></p> -->
                    </div>
                </div>
             </div>  

          <?php endforeach; ?>

         <?php echo $sql->render(); ?>


      </div>

<?php endif; ?> 


<?php if(Auth::user()->privilegio == 1): ?> 

          <div class="panel-group" id="accordion" role="tablist">

          <?php foreach($sqlAdm as $movAdm): ?>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="ab" style="height: 50px;">

                    <h2 class="panel-title">

                      <?php $x = "#".$movAdm->idpublic; ?>
                        <a href="<?php echo "$x"; ?>" data-toggle="collapse" data-parent="#accordion">
                          <strong style="font-size: 18px;"><?php echo e($movAdm->titulo); ?></strong> (<?php echo e($movAdm->nombre); ?>)

                          <i class="fa fa-chevron-circle-down pull-right" aria-hidden="true" style="font-size: 23px;"></i>
                          
                        </a><br>

                          <?php echo e($movAdm->proveedor); ?>


                          <p style="font-size: 15px;" class="pull-right"><?php echo e($movAdm->fecha); ?></p>

                    </h2>

                </div>  

                <div id="<?php echo e($movAdm->idpublic); ?>" class="panel-collapse collapse">
                  <div class="panel-body">
  
                    <a href="<?php echo nl2br(e($movAdm->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> DESCARGAR</button></a>

                     <!-- <p style="font-size: 17px;"><?php echo nl2br(e($movAdm->descripcion)); ?></p> -->
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>