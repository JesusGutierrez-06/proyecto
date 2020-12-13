<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade;
use App\Models\Estudiante;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\EstadoCivil;
use App\Models\TipoSangre;
use App\Models\Genero;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class EstudianteController extends Controller
{
    //
    public function index(Request $request){
        $buscar=$request->get('buscar');
        $data= DB::table('estudiante')
        ->join('provincia','provincia.id','=','estudiante.provincia_id')
        ->join('tipo_sangre','tipo_sangre.id','=','estudiante.tipo_sangre_id')
        ->join('genero','genero.id','=','estudiante.genero_id')
        ->join('estado_civil','estado_civil.id','=','estudiante.estado_civil_id')
        ->join('departamento','provincia.dpto_id','=','departamento.id')
        ->select('estudiante.*','departamento.nombre as departamento',
        'provincia.nombre as provincia','tipo_sangre.nombre as tipo_sangre',
        'genero.nombre as genero','estado_civil.nombre as estado_civil')
        ->where('estudiante.nombre','like','%'.$buscar.'%')
        ->orderBy('estudiante.id','asc')
        ->paginate(5);
        // return dd($data);
        // $data = Admin::All();
        
        return view('estudiante.index', compact('data','buscar'));

        // return view('estudiante.index');
    }
    public function create($id){
        $departamento = Departamento::All();
        $provincia = Provincia::All();
        $estado_civil = EstadoCivil::All();
        $tipo_sangre = TipoSangre::All();
        $genero = Genero::All();
        $admin = Admin::find($id);
        $todos['genero']=$genero;
        $todos['tipo_sangre']=$tipo_sangre;
        $todos['provincia']=$provincia;
        $todos['departamento']=$departamento;
        $todos['estado_civil']=$estado_civil;
        $todos['admin']=$admin;
        // return $todos['admin'];
        // dd($todos);
        return view('estudiante.create', compact('todos'));
        // return view('estudiante.create');
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
        
        $estudiante = new Estudiante();
        $estudiante->genero_id =$request->genero_id;
        $estudiante->estado_civil_id =$request->estado_civil_id;
        $estudiante->tipo_sangre_id =$request->tipo_sangre_id;
        $estudiante->provincia_id =$request->provincia_id;
        $estudiante->users_id = $request->users_id;
        $estudiante->matricula =$request->matricula;
        $estudiante->nombre =$request->nombre;
        $estudiante->apellidop =$request->apellidop;
        $estudiante->apellidom =$request->apellidom;
        $estudiante->fechanac =$request->fechanac;
        $estudiante->telefono =$request->telefono;
        $estudiante->celular =$request->celular;
        $estudiante->dni =$request->dni;
        $estudiante->direccion =$request->direccion;
        $estudiante->estado=1;
        $estudiante->save();
        return redirect()->route('estudiante.show',$estudiante );
    }
    public function show(Estudiante $estudiante){

        // return $estudiante;
        $data['provincia'] = Provincia::find($estudiante->provincia_id);
        $data['tipo_sangre'] = TipoSangre::find($estudiante->tipo_sangre_id);
        $data['genero'] = Genero::find($estudiante->genero_id);
        $departamento = $data['provincia'];
        $data['departamento'] = Departamento::find($departamento->dpto_id);
        $data['users'] = Admin::find($estudiante->users_id);
        $data['estado_civil'] = EstadoCivil::find($estudiante->estado_civil_id);
        $data['estudiante']=$estudiante;
        // return $data;        
        return view('estudiante.show', compact('data'));
    }

    public function edit(Estudiante $estudiante){
        $departamento = Departamento::All();
        $provincia = Provincia::All();
        $estado_civil = EstadoCivil::All();
        $tipo_sangre = TipoSangre::All();
        $genero = Genero::All();
        return view('estudiante.edit', compact('estudiante','departamento','provincia','estado_civil','tipo_sangre','genero'));
    }
    public function update(Request $request, Estudiante $estudiante){

        $estudiante->genero_id =$request->genero_id;
        $estudiante->estado_civil_id =$request->estado_civil_id;
        $estudiante->tipo_sangre_id =$request->tipo_sangre_id;
        $estudiante->provincia_id =$request->provincia_id;
        $estudiante->users_id =$request->users_id;
        $estudiante->matricula =$request->matricula;
        $estudiante->nombre =$request->nombre;
        $estudiante->apellidop =$request->apellidop;
        $estudiante->apellidom =$request->apellidom;
        $estudiante->fechanac =$request->fechanac;
        $estudiante->telefono =$request->telefono;
        $estudiante->celular =$request->celular;
        $estudiante->dni =$request->dni;
        $estudiante->direccion =$request->direccion;
        $estudiante->estado=1;
        $estudiante->save();
        return redirect()->route('estudiante.index');
    }
    public function destroy( Estudiante $estudiante){

        $estudiante->estado =0;
        // dd($empresa);
        $estudiante->save();
        return redirect()->route('estudiante.index');
    }
    public function imprimir(){
        $data= DB::table('estudiante')
        ->join('provincia','provincia.id','=','estudiante.provincia_id')
        ->join('tipo_sangre','tipo_sangre.id','=','estudiante.tipo_sangre_id')
        ->join('genero','genero.id','=','estudiante.genero_id')
        ->join('estado_civil','estado_civil.id','=','estudiante.estado_civil_id')
        ->join('departamento','provincia.dpto_id','=','departamento.id')
        ->select('estudiante.*','departamento.nombre as departamento',
        'provincia.nombre as provincia','tipo_sangre.nombre as tipo_sangre',
        'genero.nombre as genero','estado_civil.nombre as estado_civil')
        ->get();
         $pdf = Facade::loadView('reportes.estudiante', compact('data'));
        // dd($data);
        return $pdf->stream('filename.pdf');
        // view()->share('data',$data);
        // $pdf = PDF::loadView('reportes.admin', $data);
        // return $pdf->download('imprimir.pdf');
    }
}
