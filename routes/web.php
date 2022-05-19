<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\TemaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentarioController;

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

/*   INICIA PARTE DE VERIFICACION EMAIL*/

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('index');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

/*   TERMINA PARTE DE VERIFICACION EMAIL*/

/*   RUTAS PUBLICAS TEMA   */
Route::get('/Tema/{tema}', [TemaController::class, 'show'])->name('posts');
Route::get('/', [TemaController::class, 'index'])->name('index');
Route::resource('Tema', TemaController::class);

/*   RUTAS ADMIN POST    */
Route::get('/Post/Editar-Post', [PostController::class, 'edit'])->name('Post.edit');
Route::post('/Post/Editar-Post/update', [PostController::class, 'update'])->name('Post.update');
Route::post('/Post/Agregar-Post/store', [PostController::class, 'store'])->name('Post.store');
Route::get('/Post/Agregar-Post', [PostController::class, 'create'])->name('add-new-post');
Route::post('/Post/{Post}/destroy', [PostController::class, 'destroy'])->name('Post.delete');
/*   RUTAS PUBLICAS POST    */
Route::get('/Posts', [PostController::class, 'index'])->name('all-posts');
Route::get('/Post/{post}', [PostController::class, 'show'])->name('post-page');
Route::resource('Post', PostController::class);

/*   RUTAS ADMIN COMENTARIO    */
Route::post('/post/comentario/destroy', [ComentarioController::class, 'destroy'])->name('Comentario.delete');
/*   RUTAS PUBLICAS COMENTARIO    */
Route::post('Comentario.store', [ComentarioController::class, 'store'])->name('Comentario.store')->middleware('auth');;
Route::get('/Post/{post}/Nuevo-Comentario', [ComentarioController::class, 'create'])->name('formulario-comentario')->middleware('auth');;

Route::resource('Comentario', ComentarioController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [TemaController::class, 'index'])->name('dashboard');