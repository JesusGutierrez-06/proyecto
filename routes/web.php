<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PostularOfertaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin/index');
})->name('home');

Route::get('estudiante', [EstudianteController::class,'index'])->name('estudiante.index');
Route::get('estudiante/{estudiante}/create', [EstudianteController::class,'create'])->name('estudiante.create');
Route::post('estudiante', [EstudianteController::class,'store'])->name('estudiante.store');
Route::get('estudiante/{estudiante}', [EstudianteController::class,'show'])->name('estudiante.show');
Route::get('estudiante/{estudiante}/edit', [EstudianteController::class,'edit'])->name('estudiante.edit');
Route::put('estudiante/{estudiante}', [EstudianteController::class,'update'])->name('estudiante.update');
Route::delete('estudiante/{estudiante}', [EstudianteController::class,'destroy'])->name('estudiante.destroy');

Route::get('/ofertas', [OfertaController::class,'index'])->name('ofertas.index');
Route::get('/ofertas/create', [OfertaController::class,'create'])->name('ofertas.create');
Route::post('/ofertas', [OfertaController::class,'store'])->name('ofertas.store');
Route::get('/ofertas/{ofertas}', [OfertaController::class,'show'])->name('ofertas.show');
Route::get('/ofertas/{ofertas}/edit', [OfertaController::class,'edit'])->name('ofertas.edit');
Route::put('/ofertas/{ofertas}', [OfertaController::class,'update'])->name('ofertas.update');
Route::delete('ofertas/{ofertas}', [OfertaController::class,'destroy'])->name('ofertas.destroy');

Route::get('/postular', [PostularOfertaController::class,'index'])->name('postular.index');
Route::get('/postular/create', [PostularOfertaController::class,'create'])->name('postular.create');
Route::post('/postular', [PostularOfertaController::class,'store'])->name('postular.store');
Route::get('/postular/{postular}', [PostularOfertaController::class,'show'])->name('postular.show');
Route::get('/postular/{postular}/edit', [PostularOfertaController::class,'edit'])->name('postular.edit');
Route::put('/postular/{postular}', [PostularOfertaController::class,'update'])->name('postular.update');
Route::delete('postular/{postular}', [PostularOfertaController::class,'destroy'])->name('postular.destroy');

Route::get('admin', [AdminController::class,'index'])->name('admin.index');
Route::get('admin/create', [AdminController::class,'create'])->name('admin.create');
Route::post('admin', [AdminController::class,'store'])->name('admin.store');
Route::get('admin/{admin}', [AdminController::class,'show'])->name('admin.show');
Route::get('admin/{admin}/edit', [AdminController::class,'edit'])->name('admin.edit');
// Route::get('admin/buscar', [AdminController::class,'buscar'])->name('admin.buscar');
Route::delete('admin/{admin}', [AdminController::class,'destroy'])->name('admin.destroy');

Route::get('reportes/admin', [AdminController::class,'imprimir'])->name('reportes.admin');
Route::get('reportes/estudiante', [EstudianteController::class,'imprimir'])->name('reportes.estudiante');
Route::get('reportes/empresa', [EmpresaController::class,'imprimir'])->name('reportes.empresa');

Route::get('contacto', [ContactoController::class,'index'])->name('contacto.index');
Route::get('contacto/{contacto}/create', [ContactoController::class,'create'])->name('contacto.create');
Route::post('contacto', [ContactoController::class,'store'])->name('contacto.store');
Route::get('contacto/{contacto}', [ContactoController::class,'show'])->name('contacto.show');
Route::get('contacto/{contacto}/edit', [ContactoController::class,'edit'])->name('contacto.edit');
Route::put('contacto/{contacto}', [ContactoController::class,'update'])->name('contacto.update');
Route::delete('contacto/{contacto}', [ContactoController::class,'destroy'])->name('contacto.destroy');

Route::get('empresa', [EmpresaController::class,'index'])->name('empresa.index');
Route::get('empresa/{empresa}/create', [EmpresaController::class,'create'])->name('empresa.create');
Route::post('empresa', [EmpresaController::class,'store'])->name('empresa.store');
Route::get('empresa/{empresa}', [EmpresaController::class,'show'])->name('empresa.show');
Route::get('empresa/{empresa}/edit', [EmpresaController::class,'edit'])->name('empresa.edit');
Route::put('empresa/{empresa}', [EmpresaController::class,'update'])->name('empresa.update');
Route::delete('empresa/{empresa}', [EmpresaController::class,'destroy'])->name('empresa.destroy');



# combos
Route::get('combos', [EstudianteController::class,'index'])->name('combos.index');
Route::get('combos/{combos}/create', [EstudianteController::class,'create'])->name('combos.create');
Route::post('combos', [EstudianteController::class,'store'])->name('combos.store');
Route::get('combos/{combos}', [EstudianteController::class,'show'])->name('combos.show');
Route::get('combos/{combos}/edit', [EstudianteController::class,'edit'])->name('combos.edit');
Route::put('combos/{combos}', [EstudianteController::class,'update'])->name('combos.update');

