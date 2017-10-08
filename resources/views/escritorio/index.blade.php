  @extends ('layouts.cpanelp')
@section ('contenido') 

@include('escritorio.modal')

  <div class="container">

    <div class="row">

@if(Auth::user()->privilegio != 1)

      <div class="col-lg-6">

		    <?php  $sql = DB::select('select nombre, idpublic, titulo, descripcion, DATE_FORMAT(fecha,"%d-%m-%Y") AS fecha FROM categoria, convocatoria WHERE categoria.idcat=convocatoria.idcat AND convocatoria.id='.Auth::user()->id. ' Order by fecha DESC LIMIT 5'); ?>

            
            <h3><i class="fa fa-star" aria-hidden="true" style="color: #FACB14;"></i> Convocatorias Adjudicadas
             <a href="{!!URL::to('convocatoriasaprobadas')!!}"> <button class="btn btn-primary pull-right" style="font-size: 15px; background-color: black; border-color: black;">Ver Todas</button></a>
            </h3>	


			<div class="panel-group" id="accordion" role="tablist">

    			@foreach($sql as $mov)

      				<div class="panel panel-default">
        				<div class="panel-heading" role="tab" id="ab" >

          					<h2 class="panel-title">

            					<?php $x = "#".$mov->idpublic; ?>
              					<a href="<?php echo "$x"; ?>" data-toggle="collapse" data-parent="#accordion">
                					<strong style="font-size: 18px;">{{$mov->titulo}}</strong>

                					<i class="fa fa-chevron-circle-down pull-right" aria-hidden="true" style="font-size: 23px;"></i>
                					
              					</a><br>

                        {{$mov->nombre}}

                          <p style="font-size: 15px;" class="pull-right">{{$mov->fecha}}</p>

          					</h2>

        				</div>  

        				<div id="{{$mov->idpublic}}" class="panel-collapse collapse">
         					<div class="panel-body">

                  <a href="{!! nl2br(e($mov->descripcion)) !!}"><button class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> DESCARGAR</button></a>
                  
            					<!-- <p style="font-size: 17px;">{!! nl2br(e($mov->descripcion)) !!}</p> -->
          					</div>
        				</div>
   					 </div>  

    			@endforeach

  			</div>

      </div>

 @endif  

@if(Auth::user()->privilegio != 1)

      <div class="col-lg-6">

      	<h3> Envíanos tu consulta </h3>

        {!!Form::open(['route'=>'consulta.store', 'method'=>'POST'])!!}

          <div class="form-group">

            <label style="font-size: 18px;">Asunto:</label><br>
            <input type="text" class="form-control" name="asunto" placeholder="Asunto" required style="border-radius: 5px; width: 85%;">

                <br>

            <label style="font-size: 18px;">Mensaje:</label>
            <textarea class="form-control" rows="5" name="mensaje" placeholder="Mensaje" required style="border-radius: 5px; width: 85%;"></textarea>

            <input type="hidden" name="correo" value="<?php echo Auth::user()->correo; ?>">

          </div>

          <button class="btn btn-lg btn-primary" type="submit" id="btnc">ENVIAR</button> <br><br>
 
        {!!Form::close()!!}

        @include('alerts.success')
        @include('alerts.errors')

      </div>

@endif


<!-- ///////////////////////////**ADMIN**////////////////////////////////////// -->

@if(Auth::user()->privilegio == 1)

     <div class="row">

        <div class="col-lg-1"></div>

        <div class="col-lg-3">

          <div class="small-box bg-aqua">
            <div class="inner">
              <?php  $nro = DB::select('select COUNT(*) as cant From convocatoria'); ?>
                @foreach($nro as $res)
                  <h3>{{$res->cant}}</h3>
                @endforeach
              <p style="font-size: 17px;">Convocatorias</p>
            </div>

            <div class="icon">
             <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
            </div>
            <a href="#" class="small-box-footer" style="font-size: 17px;" data-toggle="modal" data-target="#ModalContraseña">Añadir Nueva <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
          </div>

          @include('alerts.success')
          @include('alerts.errors')
          
        </div>

        <div class="col-lg-3">

          <div class="small-box bg-yellow">
            <div class="inner">
              <?php  $nro2 = DB::select('SELECT COUNT(*) as cant FROM convocatoria WHERE estado="activa"'); ?>
                @foreach($nro2 as $res2)
                  <h3>{{$res2->cant}}</h3>
                @endforeach
              <p style="font-size: 17px;">Convocatorias Activas</p>
            </div>

            <div class="icon">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </div>
            <a href="{!!URL::to('convocatoriasactivas')!!}" class="small-box-footer" style="font-size: 17px;">Ver Todas <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
          </div>
          
        </div>

        <div class="col-lg-3">

          <div class="small-box bg-red">
            <div class="inner">
              <?php  $nro2 = DB::select('SELECT COUNT(*) as cant FROM convocatoria WHERE estado="inactiva"'); ?>
                @foreach($nro2 as $res2)
                  <h3>{{$res2->cant}}</h3>
                @endforeach
              <p style="font-size: 17px;">Convocatorias Inactivas</p>
            </div>

            <div class="icon">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </div>
            <a href="{!!URL::to('convocatoriasinactivas')!!}" class="small-box-footer" style="font-size: 17px;">Ver Todas <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
          </div>
          
        </div>
        
      </div>

<!-- //////////////////////////////////////////////////////////////////// -->

      <div class="col-lg-6">

        <?php  $sql = DB::select('select nombre, idpublic, titulo, descripcion, DATE_FORMAT(fecha,"%d-%m-%Y") AS fecha, estado FROM categoria, convocatoria WHERE categoria.idcat=convocatoria.idcat and convocatoria.estado="activa" Order by fecha desc LIMIT 7'); ?>

          <div>
            <h3> Últimas Convocatorias </h3> 
             <!--<a href="{!!URL::to('convocatoriasaprobadas')!!}"> <button class="btn btn-primary pull-right" style="font-size: 15px; background-color: black; border-color: black;">Ver Todas</button></a> -->
          </div>
            


      <div class="panel-group" id="accordion" role="tablist">

          @foreach($sql as $mov)

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="ab" >

                    <h2 class="panel-title">

                      <?php $x = "#".$mov->idpublic; ?>
                        <a href="<?php echo "$x"; ?>" data-toggle="collapse" data-parent="#accordion">
                          <strong style="font-size: 18px;">{{$mov->titulo}}</strong>

                          <i class="fa fa-chevron-circle-down pull-right" aria-hidden="true" style="font-size: 23px;"></i>
                          
                        </a><br>

                        {{$mov->nombre}}

                          <p style="font-size: 15px;" class="pull-right">{{$mov->fecha}}</p>

                    </h2>

                </div>  

                <div id="{{$mov->idpublic}}" class="panel-collapse collapse">
                  <div class="panel-body">

                  <a href="{!! nl2br(e($mov->descripcion)) !!}"><button class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 20px;"></i> DESCARGAR</button></a>
                  
                      <!-- <p style="font-size: 17px;">{!! nl2br(e($mov->descripcion)) !!}</p> -->
                    </div>
                </div>
             </div>  

          @endforeach

        </div>

      </div>

@endif  


    </div>

  </div>


@endsection