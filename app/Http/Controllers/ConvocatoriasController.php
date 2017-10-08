<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use App\Http\Requests\ConvocatoriasRequest;
use App\Convocatoria;

use Auth;
use Session;
use Redirect;
use DB;

class ConvocatoriasController extends Controller {

  public function __construct(Request $request) {
         $this->middleware('auth');
         $this->middleware('admin');
        $this->middleware('auth',['only'=>'admin']);
        
    }
  
    function index() {    

        return view('convocatorias.index');        
                
    }
   

function covocatorias($id){

    $idcategoria = DB::select ('select nombre FROM categoria WHERE idcat='.$id);

    $idc=DB::table('convocatoria')
    ->join('categoria','categoria.idcat','=','convocatoria.idcat')
    ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
    ->where('convocatoria.idcat','=',$id)
    ->where('convocatoria.estado','=','activa')
    ->orderBy('fecha', 'desc')
    ->paginate(10);  

    return view('convocatorias.index',['idc'=>$idc], compact('idcategoria',$idcategoria)); 
}



    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {


        $fecha = DB::select('SELECT curdate() as fecha');
 
       Convocatoria::create([
            'titulo' => $request['txttitulo'],
            'descripcion' => $request['txtlink'],
            'fecha' => $fecha[0]->fecha,
            'estado' => $request['txtestado'],
            'idcat' => $request['cbocategorias'],        
        ]);

        Session::flash('message','CONVOCATORIA PUBLICADA');
        return Redirect::to('/escritorio');

        
    }



    public function logout() {

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
