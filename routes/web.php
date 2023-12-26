<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
use App\Mail\EnviarCorreoProduccion;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProduccionController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', 'PedidoController@verificar')->name('verificar-pedido');
Route::get('/mi-pedido/{referencia}', [PedidoController::class, 'verificar']);


Route::get('/', function () {
    return view('index');
});
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
Route::get('/nosotros', function () {
    return view('sobre-nosotros');
})->name('nosotros');
//Blog para ver todos los posts 
Route::get('/noticias', [BlogController::class, 'showAll'])->name('noticias');
//Acá se ve únicamente el que eligieron 
Route::get('/post/{id}', [BlogController::class, 'show'])->name('post.show');


//
//Route::get('/leer-noticia', function () {
//  return view('layouts.leer-noticia');
//})->name('leer-noticia');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/dashboard', [ProduccionController::class, 'mostrarUltimosClientes'])->middleware('auth')->name('dashboard');

Route::get('/editarUsuario', function () {
    return view('editUser');
})->middleware('auth')->name('editarUsuario');
//CRUDS
//User
Route::get('/edit-user/{id}', [LoginController::class, 'editUser'])->name('edit-user');


//Clientes
Route::resource('cliente', ClienteController::class);

//Blog -> devuelve index por defecto
Route::resource('blog', BlogController::class);
//Produccion
Route::resource('produccion', ProduccionController::class);
//
Route::resource('modificarDatos', LoginController::class);
//

Route::get('/vista-previa', function () {
    return view('mails.enviar-produccion-edicion');
})->name('vista-previa');


//Producción
//Route::get('/produccion', function () {
//  return view('produccion/index');
//})->name('produccion');
//Dotación
Route::get('/trabajadores', function () {
    return view('trabajadores.index');
})->name('trabajadores');
Route::post('enviar-correo', function () {
    //return request()->all();
    Mail::to('theuhmc@gmail.com')->send(new EnviarCorreo(request()->nombreCliente, request()->correoCliente, request()->telCliente, request()->msgCliente, request()->archivosCliente));
    return redirect()->route('contacto')->with('success', 'El correo fue enviado satisfactoriamente, pronto nos pondremos en contacto con usted.');
})->name('enviar-correo');



//Login 

Route::get('/register', function () {
    return view('validar-registro');
})->name('register');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
