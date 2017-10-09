<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use Mail;
use Session;
use Redirect;
use DB;

 
class MailController extends Controller
{
 
    public function __construct()
    {
 
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
 
    }
 
    /**
     * Update posisi menu
     *
     * @param  int  $id
     * @return Response
     */

    public function store(Request $request)
    {
        Mail::send('emails.plantilla',$request->all(), function($msj){
            $msj->subject('Registro de Proveedor');
            $msj->to('richardpizarro@grayhatcorp.com');
        });

        Session::flash('message','Enviado Correctamente');
        return Redirect::to('registrarse');
    }
 
    public function store2(Request $request)
    {
       /* $mail=DB::select('select correo from proveedor where proveedor.correo='.$request['emails']); 
        if ($mail[0] == $request['emails']) {
            Session::flash('message','Enviado Correctamente');
            return Redirect::to('log.inicio');
         } */

    }
 
 
}