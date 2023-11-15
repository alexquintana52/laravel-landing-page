<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',
[\App\Http\Controllers\HomeController::class, 'index']
);
Route::get('/',
[\App\Http\Controllers\HomeController::class, 'home']
);
Route::get('/nosotros',
[\App\Http\Controllers\HomeController::class, 'about']
);


Route::get('/iniciar-sesion',
    [\App\Http\Controllers\sessionController::class, 'formlogin']
);
Route::post('/iniciar-sesion',
    [\App\Http\Controllers\sessionController::class, 'processlogin']
);
Route::post('/cerrar-sesion',
    [\App\Http\Controllers\sessionController::class, 'processlogout']
)->middleware('auth');



//!blogController se encarga de las vistas del blog
Route::get('/blog',
    [\App\Http\Controllers\blogController::class, 'index']
);
Route::get('/blog/{id}',
    [\App\Http\Controllers\blogController::class, 'show']
)->whereNumber('id');


//!adminBlogController se encarga de las vistas del adminBlog
Route::get('/admin/blog',
    [\App\Http\Controllers\adminBlogController::class, 'admin']
)->middleware('auth');
Route::get('/admin/blog/nuevaEntrada',
    [\App\Http\Controllers\adminBlogController::class, 'createPost']
)->middleware('auth');
Route::post('/admin/blog/nuevaEntrada',
    [\App\Http\Controllers\adminBlogController::class, 'processPost']
)->middleware('auth');

Route::get('admin/blog/{id}/borrar',
    [\App\Http\Controllers\adminBlogController::class, 'deletePost']
)->whereNumber('id')
->middleware('auth');

Route::post('admin/blog/{id}/borrar',
    [\App\Http\Controllers\adminBlogController::class, 'processDeletePost']
)->whereNumber('id')
->middleware('auth');

route::get('/admin/blog/{id}/editar',
    [\App\Http\Controllers\adminBlogController::class, 'editPost']
)->whereNumber('id')
->middleware('auth');
route::post('/admin/blog/{id}/editar',
    [\App\Http\Controllers\adminBlogController::class, 'processEditPost']
)->whereNumber('id')
->middleware('auth');





//!noticiasController se encarga de las vistas de noticias
Route::get('/noticias',
    [\App\Http\Controllers\noticiasController::class, 'index']
);
Route::get('/noticias/{id}',
    [\App\Http\Controllers\noticiasController::class, 'show']
)->whereNumber('id');


//!adminNoticiasController se encarga de las vistas del adminNoticias
Route::get('/admin/noticias',
    [\App\Http\Controllers\adminNoticiasController::class, 'admin']
)->middleware('auth');
Route::get('/admin/noticias/nuevaEntrada',
    [\App\Http\Controllers\adminNoticiasController::class, 'createNoti']
)->middleware('auth');
Route::post('/admin/noticias/nuevaEntrada',
    [\App\Http\Controllers\adminNoticiasController::class, 'processNoti']
)->middleware('auth');

Route::get('admin/noticias/{id}/borrar',
    [\App\Http\Controllers\adminNoticiasController::class, 'deleteNoti']
)->whereNumber('id')
->middleware('auth');
Route::post('admin/noticias/{id}/borrar',
    [\App\Http\Controllers\adminNoticiasController::class,'processDeleteNoti']
)->whereNumber('id')
->middleware('auth');

route::get('/admin/noticias/{id}/editar',
    [\App\Http\Controllers\adminNoticiasController::class, 'editNoti']
)->whereNumber('id')
->middleware('auth');
route::post('/admin/noticias/{id}/editar',
    [\App\Http\Controllers\adminNoticiasController::class, 'processEditNoti']
)->whereNumber('id')
->middleware('auth');



//!serviciosController se encarga de las vistas de servicios


Route::get('/admin/servicios',
    [\App\Http\Controllers\AdminServiciosController::class, 'admin']
)->middleware('auth');

Route::get('/admin/servicios/nuevoServicio',
    [\App\Http\Controllers\AdminServiciosController::class, 'createServicio']
)->middleware('auth');

Route::post('/admin/servicios/nuevoServicio',
    [\App\Http\Controllers\AdminServiciosController::class, 'processServicio']
)->middleware('auth');

Route::get('/admin/servicios/{id}/borrar',
    [\App\Http\Controllers\AdminServiciosController::class, 'deleteServicio']
)->whereNumber('id')
->middleware('auth');

Route::post('/admin/servicios/{id}/borrar',
    [\App\Http\Controllers\AdminServiciosController::class, 'processDeleteServicio']
)->whereNumber('id')
->middleware('auth');

route::get('/admin/servicios/{id}/editar',
    [\App\Http\Controllers\AdminServiciosController::class, 'editServicio']
)->whereNumber('id')
->middleware('auth');

route::post('/admin/servicios/{id}/editar',
    [\App\Http\Controllers\AdminServiciosController::class, 'processEditServicio']
)->whereNumber('id')
->middleware('auth');

Route::get('/servicios',
    [\App\Http\Controllers\ServiciosController::class, 'index']
);


//!adminUsuariosController se encarga de las vistas del adminUsuarios

Route::get('/admin/usuarios',
    [\App\Http\Controllers\AdminUsersController::class, 'admin']
)->middleware('auth');


Route::get('mi-perfil',
    [\App\Http\Controllers\UsersController::class, 'show']
)->middleware('auth');

Route::get('/registrarse',
    [\App\Http\Controllers\AdminUsersController::class, 'createUser']
);

Route::post('/registrarse',
    [\App\Http\Controllers\AdminUsersController::class, 'processUser']
);

Route::get('/servicios',
    [\App\Http\Controllers\AdminUsersController::class, 'editUser']
)->whereNumber('id')
->middleware('auth');

Route::post('/servicios',
    [\App\Http\Controllers\AdminUsersController::class, 'processEditUser']
)->whereNumber('id')
->middleware('auth');;
