  @extends ('layouts.cpanelp')
@section ('contenido') 

  <div class="row">


    <div class="col-lg-1">  
    </div>


    <div class="col-lg-10">  

    @foreach($idcategoria as $a)

    <center> <h1 style="text-transform: uppercase; font-weight: bold;"> {{$a->nombre}} </h1> </center>

    @endforeach

  <div class="panel-group" id="accordion" role="tablist">

    @foreach($idc as $mov)

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="ab">

          <h2 class="panel-title">
            <?php $x = "#".$mov->idpublic; ?>
              <a href="<?php echo "$x"; ?>" data-toggle="collapse" data-parent="#accordion">
                <strong style="font-size: 18px;">{{$mov->titulo}}</strong>
                
                <i class="fa fa-chevron-circle-down pull-right" aria-hidden="true" style="font-size: 25px;"></i>

              </a><br>
              {{$mov->estado}}
              <p class="pull-right" style="font-size: 17px;"> {{$mov->fecha}} </p>
          </h2>

        </div>  


        <div id="{{$mov->idpublic}}" class="panel-collapse collapse">
          <div class="panel-body">

            <a href="{!! nl2br(e($mov->descripcion)) !!}"><button class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> DESCARGAR</button></a>

            <!-- <p style="font-size: 18px;">{!! nl2br(e($mov->descripcion)) !!}</p> -->

            <?php 

              if ($mov->estado == 'activa') {
                echo"<a href='mailto:info@incotec.com.bo'><button class='btn btn-primary' style='background-color: black; font-size: 15px;'>Enviar Propuesta</button></a>";
              }
              else {
                echo"<a href='mailto:info@incotec.com.bo'><button class='btn btn-primary' style='background-color: black;' disabled='true'>enviar propuesta</button></a>";
              }

             ?>
            

          </div>
        </div>
    </div>  

    @endforeach
    
    {!!$idc->render()!!}

  </div>

    </div>


    <div class="col-lg-1">  
    </div>


  </div>

@endsection