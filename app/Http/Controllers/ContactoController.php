<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Contacto;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class ContactoController extends Controller
{
    //
    public function index(){
        $data= DB::table('contacto')
        ->join('empresa','empresa.id','=','contacto.empresa_id')
        ->join('users','users.id','=','contacto.users_id')
        ->select('contacto.*','empresa.nombre as empresa',
        'users.email as email')
        ->paginate(5);
        // return dd($data);
        // $data = Admin::All();
        return view('empresa.contacto.index', compact('data'));   
    }

    public function create($id){
        $cadena=explode('-',$id);
        $empresa = $cadena[1];
        $admin = $cadena[0];
        $todos['empresa']=$empresa;
        $todos['admin']= $admin;
        // return $todos['admin'];
        // dd($todos);
        return view('empresa.contacto.create', compact('todos'));
        // return view('empresa.create');
    }
    public function store(Request $request){
        // return $request->all();
        $contacto = new Contacto();
        $contacto->empresa_id =$request->empresa_id;
        $contacto->users_id =$request->users_id;
        $contacto->nombre =$request->nombre;
        $contacto->celular =$request->celular;
        $contacto->telefono =$request->telefono;
        $contacto->estado=1;
        // dd($contacto);
        $contacto->save();
        return redirect()->route('empresa.index' );
    }
    public function edit(Contacto $contacto){

        return view('contacto.edit', compact('contacto'));
    }
    public function update(Request $request, Contacto $contacto){

        $contacto->nombre =$request->nombre;
        $contacto->telefono =$request->telefono;
        $contacto->celular =$request->celular;
        $contacto->estado=1;
        $contacto->save();
        return redirect()->route('empresa.index');
    }
    public function destroy( Contacto $contacto){

        $contacto->estado =0;
        // dd($empresa);
        $contacto->save();
        return redirect()->route('empresa.index');
    }
}
