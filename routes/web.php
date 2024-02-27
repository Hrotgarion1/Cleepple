<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificarEstudiosController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CleepCard\CurriculoController;
use App\Http\Controllers\User\PostblogController;
use App\Http\Livewire\Blog\BlogpostComponent;
use App\Http\Livewire\CleepCard\ProfesionSection;
use App\Http\Livewire\CourseStatus;
use App\Http\Livewire\EstudioComponent;
use App\Http\Livewire\User\DireccionUsuario;


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

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/logro', function () { return view('logro'); })->name('logro');
Route::middleware(['auth:sanctum', 'verified'])->get('/livewire.curriculo', function () { return view('livewire.curriculo'); })->name('curriculo');
//Rutas para el curriculo de los usuarios (cleepcard)
Route::middleware(['auth:sanctum', 'verified'])->resource('curriculo', CurriculoController::class )->names('user.cleepcard');
//Este no lo utilizo de momento 
Route::middleware(['auth:sanctum', 'verified'])->get('curriculo/{curriculo}/profesion', ProfesionSection::class)->name('profesion');
//Este no se que hace aqui, tengo que revisarlo
// Route::middleware(['auth:sanctum', 'verified'])->get('address', DireccionUsuario::class)->name('address');


//Rutas para el blog de uso público
Route::middleware(['auth:sanctum', 'verified', 'is_organizacion'])->resource('postblog', PostblogController::class )->names('user.postsblog');
Route::middleware(['auth:sanctum', 'verified', 'is_user'])->get('/user.achievement', function () { return view('user.postsblog.achievement'); })->name('users.achievement');
Route::middleware(['auth:sanctum', 'verified', 'is_user'])->get('/user.achievement-list', function () { return view('user.postsblog.achievement-list'); })->name('users.achievement-list');
/*Rutas de las vistas de detalle de los post, les he pasado una variable (blogpost, categoriapost, province etc.) que la recojo en el componente BlogpostComponent*/
//Ruta show muestra el detalle de los post
Route::middleware(['auth:sanctum', 'verified', 'is_organizacion'])->get('posts/{blogpost}', [BlogpostComponent::class, 'show'])->name('posts.show');
/*Ruta vista de detalle de categorias de los posts*/
Route::middleware(['auth:sanctum', 'verified'])->get('category/{categoriapost}', [BlogpostComponent::class, 'category'])->name('posts.category');
/*Ruta vista de detalle de las provincias de los posts*/
Route::middleware(['auth:sanctum', 'verified'])->get('province/{province}', [BlogpostComponent::class, 'province'])->name('posts.province');
/*Ruta vista de detalle de los tipos de los posts*/
Route::middleware(['auth:sanctum', 'verified'])->get('type/{typepost}', [BlogpostComponent::class, 'type'])->name('posts.type');
/*Ruta vista de detalle de las etiquetas profesion*/
Route::middleware(['auth:sanctum', 'verified'])->get('profesion/{profesion}', [BlogpostComponent::class, 'profesion'])->name('posts.profesion');
/*Ruta vista de detalle de las etiquetas especializacion*/
Route::middleware(['auth:sanctum', 'verified'])->get('especializacion/{especializacion}', [BlogpostComponent::class, 'especializacion'])->name('posts.especializacion');

//Rutas para los buscadores del usuario
Route::middleware(['auth:sanctum', 'verified'])->get('/search.center', function () { return view('search.center'); })->name('centers');
Route::middleware(['auth:sanctum', 'verified'])->get('/search.company', function () { return view('search.company'); })->name('companies');
Route::middleware(['auth:sanctum', 'verified'])->get('/search.entity', function () { return view('search.entity'); })->name('entities');

//Rutas para las vistas de los aspectos legales de la app
Route::get('/livewire.legal.avisolegal', function () { return view('livewire.legal.avisolegal'); })->name('avisolegal');
Route::get('/livewire.legal.condiciones', function () { return view('livewire.legal.condiciones'); })->name('condiciones');
Route::get('/livewire.legal.normas', function () { return view('livewire.legal.normas'); })->name('normas');
Route::get('/livewire.legal.polit-priva', function () { return view('livewire.legal.polit-priva'); })->name('polit-priva');
Route::get('/livewire.legal.tarifa', function () { return view('livewire.legal.tarifa'); })->name('tarifa');

/*Rutas para enviar el mails*/
/*correo electronico*/
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
/*correo electronico de verificar estudios*/
Route::post('verificar-estudios', [VerificarEstudiosController::class, 'store'])->name('verificar-estudios.store');

 //Ruta para verificar los estudios
 Route::post('estudios/{estudio}/status', [EstudioComponent::class, 'status'])->name('estudios.status');
 //Ruta para devolver el estudio al status 2
Route::post('estudios/{estudio}/statusBack', [EstudioComponent::class, 'statusBack'])->name('estudios.statusBack');
 //Ruta para pausar la publicación del estudio, status 4
 Route::post('estudios/{estudio}/statusDeny', [EstudioComponent::class, 'statusDeny'])->name('estudios.statusDeny');

//Ruta para los idiomas de la App
Route::get('lang/{lang}', function ($lang) { session(['lang' => $lang]); return \Redirect::back(); })->where([ 'lang' => 'en|es|de|fr|it' ]);

/*Rutas para matricular usuarios en el centro de estudios*/
Route::post('courses/{course}/enrolled', [CourseController::class, 'enrolled'])->middleware('auth')->name('centro.enrolled');
Route::middleware(['auth:sanctum', 'verified'])->get('course-status/{course}', CourseStatus::class)->middleware('auth')->name('centro.status');




