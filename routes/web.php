<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
|
| Aquí registramos las rutas para la web de la aplicación.
|
*/



//!homeController se encarga de las vistas del home y about
Route::get('/',
    [\App\Http\Controllers\HomeController::class, 'index']
);
Route::get('/',
    [\App\Http\Controllers\HomeController::class, 'home']
);
Route::get('/nosotros',
    [\App\Http\Controllers\HomeController::class, 'about']
);


//!sessionContoller se encarga de las vistas de login y register
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


//
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

