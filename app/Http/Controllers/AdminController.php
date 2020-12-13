<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\TipoUsuario;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(Request $request){
        $buscar=$request->get('buscar');
        // $buscar="jesus";
        $data   = DB::table('users')
        ->join('tipo_usuario','users.tipo_usuario_id','=','tipo_usuario.id')
        ->select('users.id','users.estado','users.created_at','users.email','tipo_usuario.nombre as tipo_usuario')
        ->where('users.email','like','%'.$buscar.'%')
        ->orderBy('users.id','asc')
        ->paginate(5);
        // ->get();
        // dd($data);

        // $data= DB::table('users')
        // ->join('tipo_usuario','users.tipo_usuario_id','=','tipo_usuario.id')
        // ->select('users.id','users.estado','users.created_at','users.email','tipo_usuario.nombre as tipo_usuario')
        // ->orderBy('users.id','asc')
        // ->get();
        // // return dd($data);
        // // $data = Admin::All();
        return view('admin.index', compact('data','buscar'));
    }
    public function create(){
        
        $tipo_usuario = TipoUsuario::All();
        return view('admin.create', compact('tipo_usuario'));
        // return view('admin.create');
    }
    // public function getProvincia(Request $request,$id)
    // {
    //     if($request->ajax()){
    //         $provincias = Provincias::provincias($id);
    //         return response()->json($provincias);
    //     }
    // }
    public function store(Request $request){
        // return $request->all();
        
        $admin = new Admin();
        $admin->email =$request->email;
        $admin->password =Hash::make($request->password);
        $admin->tipo_usuario_id =$request->tipo_usuario_id;
        $admin->estado=1;
        $admin->save();
        if ($request->tipo_usuario_id == "1") {
        return redirect()->route('admin.create',$admin );
        }elseif ($request->tipo_usuario_id=="2") {
            return redirect()->route('estudiante.create',$admin );
        }elseif ($request->tipo_usuario_id=="3") {
            return redirect()->route('empresa.create',$admin );
        }

    }
    public function show($id){
        //return $admin;
        // return dd($data);
        $data = Admin::All();
        return view('admin.show', compact('data'));
    }
    public function buscar(Request $request){
        $buscar=$request->get('buscar');
        $data   = DB::table('users')
        ->join('tipo_usuario','users.tipo_usuario_id','=','tipo_usuario.id')
        ->select('users.id','users.estado','users.created_at','users.email','tipo_usuario.nombre as tipo_usuario')
        ->where('users.email',' like','%'.$buscar.'%')
        ->orderBy('users.id','asc')
        ->get();
        dd($buscar);
        // return view('admin.index', compact('data'));
    }

    public function edit(Admin $admin){
     
        $tipo_usuario = TipoUsuario::All();
        return view('admin.edit', compact('tipo_usuario'));
    }
    public function update(Request $request, Admin $admin){

        $admin = new Admin();
        $admin->email =$request->email;
        $admin->password =Hash::make($request->password);
        $admin->tipo_usuario_id =$request->tipo_usuario_id;
        $admin->estado=1;
        $admin->save();
        return redirect()->route('admin.index' );
    }
    public function destroy( Admin $admin){

        $admin->estado =0;
        // dd($empresa);
        $admin->save();
        return redirect()->route('admin.index');
    }
    public function imprimir(){
        $data   = DB::table('users')
        ->join('tipo_usuario','users.tipo_usuario_id','=','tipo_usuario.id')
        ->select('users.id','users.estado','users.created_at','users.email','tipo_usuario.nombre as tipo_usuario')
        ->orderBy('users.id','asc')
        ->get();
        $pdf = Facade::loadView('reportes.admin', compact('data'));
        // dd($data);
        return $pdf->stream('filename.pdf');
        // view()->share('data',$data);
        // $pdf = PDF::loadView('reportes.admin', $data);
        // return $pdf->download('imprimir.pdf');
    }
}
