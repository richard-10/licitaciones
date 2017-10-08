<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use Auth;
use Session;
use Redirect;
use DB;

class ConvocatoriasActivasController extends Controller {

  public function __construct(Request $request) {
         $this->middleware('auth');
         $this->middleware('admin');
        $this->middleware('auth',['only'=>'admin']);
        
    }
  
    function index() {  

        if(Auth::user()->privilegio==0)
        {

            $sql=DB::table('prov_cat')
            ->join('categoria','prov_cat.idcat','=','categoria.idcat')
            ->join('convocatoria','categoria.idcat','=','convocatoria.idcat')
            ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
            ->where('prov_cat.id','=',Auth::user()->id)
            ->where('convocatoria.estado','=','activa')
            ->orderBy('fecha', 'desc')
            ->paginate(10);  

            return view('convocatoriasactivas.index',['sql'=>$sql]);  

        }
        elseif (Auth::user()->privilegio==1) {

            $sqlAdm=DB::table('prov_cat')
            ->join('categoria','prov_cat.idcat','=','categoria.idcat')
            ->join('convocatoria','categoria.idcat','=','convocatoria.idcat')
            ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
            ->where('prov_cat.id','=',Auth::user()->id)
            ->where('convocatoria.estado','=','activa')
            ->orderBy('fecha', 'desc')
            ->paginate(10);  

            return view('convocatoriasactivas.index',['sqlAdm'=>$sqlAdm]); 
        }   
                
    }




 function adjudicar_convocatoria(Request $request) {

        DB::table('convocatoria')->where('idpublic', $request['txtidpublic'])->update(['id' => $request['cboproveedor'], 'estado' => 'inactiva' ]);


        $prov = DB::select ('select correo FROM proveedor WHERE id='.$request['cboproveedor']);
        $correo = $prov[0]->correo;

        Mail::send('emails.adjudicada',$request->all(), function($msj) use ($correo){

            $msj->subject('Propuesta Adjudicada (INCOTEC)');
            $msj->to($correo);

        });


        Session::flash('message','CONVOCATORIA ADJUDICADA');
        return Redirect::to('/convocatoriasactivas');
        
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
