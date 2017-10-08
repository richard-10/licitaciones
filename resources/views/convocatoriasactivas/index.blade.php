  @extends ('layouts.cpanelp')
@section ('contenido') 

@include('convocatoriasactivas.modal')


  <div class="row">

    <div class="col-lg-2">  
    </div>


    <div class="col-lg-8">  
        
        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Convocatorias Activas </h2> </center>


@if(Auth::user()->privilegio != 1)

  <div class="panel-group" id="accordion" role="tablist">

    @foreach($sql as $mov)

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="ab">

          <h2 class="panel-title">
            <?php $x = "#".$mov->idpublic; ?>
              <a href="<?php echo "$x"; ?>" data-toggle="collapse" data-parent="#accordion">
                <strong style="font-size: 18px;">{{$mov->titulo}}</strong>
                
                <i class="fa fa-chevron-circle-down pull-right" aria-hidden="true" style="font-size: 25px;"></i>

              </a><br>
              {{$mov->nombre}}
              <p class="pull-right" style="font-size: 17px;"> {{$mov->fecha}} </p>
          </h2>

        </div>  


        <div id="{{$mov->idpublic}}" class="panel-collapse collapse">
          <div class="panel-body">

          <a href="{!! nl2br(e($mov->descripcion)) !!}"><button class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> DESCARGAR</button></a>

            <!-- <p style="font-size: 18px;">{!! nl2br(e($mov->descripcion)) !!}</p> -->

            <a href='mailto:info@incotec.com.bo'><button class='btn btn-primary' style='background-color: black; font-size: 15px;'>Enviar Propuesta</button></a>        

          </div>
        </div>
    </div>  

    @endforeach

    {!!$sql->render()!!}

  </div>

@endif 


<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


@if(Auth::user()->privilegio == 1)

  @include('alerts.success')

  <div class="panel-group" id="accordion" role="tablist">

    @foreach($sqlAdm as $movAdm)

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="ab">

          <h2 class="panel-title">
            <?php $x = "#".$movAdm->idpublic; ?>
              <a href="<?php echo "$x"; ?>" data-toggle="collapse" data-parent="#accordion">
                <strong style="font-size: 18px;">{{$movAdm->titulo}}</strong>
                
                <i class="fa fa-chevron-circle-down pull-right" aria-hidden="true" style="font-size: 25px;"></i>

              </a><br>
              {{$movAdm->nombre}}
              <p class="pull-right" style="font-size: 17px;"> {{$movAdm->fecha}} </p>
          </h2>

        </div>  


        <div id="{{$movAdm->idpublic}}" class="panel-collapse collapse">
          <div class="panel-body">

          <a href="{!! nl2br(e($movAdm->descripcion)) !!}"><button class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> DESCARGAR</button></a>


            <button class="btn btn-warning" style="font-size: 15px;" data-toggle="modal" data-target="#ModalAdjudicar" data-id="{{$movAdm->idpublic}}" data-t="{{$movAdm->titulo}}" data-c="{{$movAdm->nombre}}"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> ADJUDICAR</button>

          </div>
        </div>
    </div>  

    @endforeach
    
    {!!$sqlAdm->render()!!}

  </div>

@endif 


    </div>



    <div class="col-lg-2">  
    </div>

  </div>

  {!!Html::script('js/jsmodal.js')!!}

@endsection