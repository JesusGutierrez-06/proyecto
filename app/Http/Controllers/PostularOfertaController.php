<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostularOferta;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PostularOfertaController extends Controller
{
    //
    public function index()
    {
        // // $data = PostularOferta::all()->where('oferta_laboral_id','=',$postular_oferta)->where('estudiante_id','=','2');
        // $data['postular'] = PostularOferta::all()->where('oferta_laboral_id','=',$postular_oferta);
        // $estudiante = Estudiante::all()->where('users_id','=',Auth::user()->id);
        // $estudiante = $estudiante[0];
        // $estudiante= $estudiante->id;
        // // dd($estudiante);
        // $data= DB::table('postular_oferta')
        // ->join('oferta_laboral','oferta_laboral.id','=','postular_oferta.oferta_laboral_id')
        // ->join('estudiante','estudiante.id','=','postular_oferta.estudiante_id')
        // ->select('postular_oferta.*','estudiante.*')
        // ->where('postular_oferta.id','=',$postular_oferta)
        // ->where('estudiante.id','=',$estudiante)
        // ->orderBy('postular_oferta.id','asc')
        // ->paginate(5);
        # code...
    }
    public function create($id)
    {
        // dd($id);
        // $carrera = Carrera::All();
        // $tipo_sueldo = TipoSueldo::All();
        // $contrato = Contrato::All();
        // $salario = Salario::All();
        // $todos['carrera']=$carrera;
        // $todos['salario']=$salario;
        // $todos['tipo_sueldo']=$tipo_sueldo;
        // $todos['contrato']=$contrato;
        // // return $todos['admin'];
        // // dd($todos);
        // return view('ofertas.create', compact('todos'));
        // return view('postular_oferta.create');
    }
    public function store(Request $request)
    {
        // return $request->all();
        // $date = new Date();
        $postular_oferta = new PostularOferta();
        $postular_oferta->estudiante_id = $request->estudiante_id;
        $postular_oferta->oferta_laboral_id = $request->oferta_laboral_id;
        $postular_oferta->estado_preseleccion = 0;
        $postular_oferta->estado = 1;
        $postular_oferta->fecha_postulacion = Carbon::now('america/la_paz')->toDateString();
        // dd($postular_oferta);
        $postular_oferta->save();
        return redirect()->route('ofertas.index', $postular_oferta);
    }
    public function show($postular_oferta)
    {

        // $data = PostularOferta::all()->where('oferta_laboral_id','=',$postular_oferta)->where('estudiante_id','=','2');
        // dd($estudiante);
        $data = DB::table('postular_oferta')
            ->join('estudiante', 'estudiante.id', '=', 'postular_oferta.estudiante_id')
            ->join('oferta_laboral', 'oferta_laboral.id', '=', 'postular_oferta.oferta_laboral_id')
            ->select(
                'postular_oferta.*',
                'estudiante.nombre',
                'estudiante.apellidop',
                'estudiante.apellidom',
                'estudiante.celular',
                'estudiante.telefono',
                'oferta_laboral.titulo'
            )
            ->where('postular_oferta.oferta_laboral_id', '=', $postular_oferta)
            ->orderBy('postular_oferta.id', 'asc')
            ->paginate(5);
        // dd($data);

        return view('ofertas.postular_oferta.show', compact('data'));
    }

    public function edit(PostularOferta $postular_oferta)
    {
        // $carrera = Carrera::All();
        // $salario = Salario::All();
        // $contrato = Contrato::All();
        // $tipo_sueldo = TipoSueldo::All();
        // $empresa = Empresa::All();
        // return view('ofertas.edit', compact('postular_oferta','carrera','salario','contrato','tipo_sueldo','empresa'));
    }
    public function update(Request $request, $postular_oferta)
    {

        $oferta = $request->oferta_laboral_id;
        $postular_oferta = PostularOferta::find($postular_oferta);
        $postular_oferta->estado_preseleccion = $request->preseleccion;
        $postular_oferta->save();
        // dd($oferta);
        return redirect()->route('postular.show', $oferta);
    }
    public function destroy(PostularOferta $postular_oferta)
    {
        $postular_oferta->estado = 0;
        // dd($empresa);
        $postular_oferta->save();
        return redirect()->route('ofertas.index');
    }
}
