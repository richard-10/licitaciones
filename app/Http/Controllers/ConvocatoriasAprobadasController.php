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

class ConvocatoriasAprobadasController extends Controller {

  public function __construct(Request $request) {
         $this->middleware('auth');
         $this->middleware('admin');
        $this->middleware('auth',['only'=>'admin']);
        
    }
  
    function index() {  

        if(Auth::user()->privilegio==0)
        {
            $sql=DB::table('categoria')
            ->join('convocatoria','categoria.idcat','=','convocatoria.idcat')
            ->select('nombre','idpublic','titulo','descripcion','fecha')
            ->where('convocatoria.id','=',Auth::user()->id)
            ->orderBy('fecha', 'desc')
            ->paginate(10);        
            return view('convocatoriasaprobadas.index',['sql'=>$sql]);  
        }
        elseif (Auth::user()->privilegio==1) {
            $sqlAdm=DB::table('categoria')
            ->join('convocatoria','categoria.idcat','=','convocatoria.idcat')
            ->join('proveedor','proveedor.id','=','convocatoria.id')
            ->select('nombre','proveedor','idpublic','titulo','descripcion','fecha')
            ->orderBy('fecha', 'desc')
            ->paginate(10);        
            return view('convocatoriasaprobadas.index',['sqlAdm'=>$sqlAdm]); 
        }
                
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
    public function store(LoginRequest $request) {
        
       
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
