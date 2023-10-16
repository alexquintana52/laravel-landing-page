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



//Home controller se encarga de las vistas del home y about
Route::get('/',
    [\App\Http\Controllers\HomeController::class, 'index']
);
Route::get('/',
    [\App\Http\Controllers\HomeController::class, 'home']
);
Route::get('/nosotros',
    [\App\Http\Controllers\HomeController::class, 'about']
);




//Blog controller se encarga de las vistas del blog
Route::get('/blog',
    [\App\Http\Controllers\blogController::class, 'index']
);
Route::get('/blog/{id}',
    [\App\Http\Controllers\blogController::class, 'show']
)->whereNumber('id');



Route::get('/admin/blog',
    [\App\Http\Controllers\adminBlogController::class, 'admin']
);
Route::get('/admin/blog/nuevaEntrada',
    [\App\Http\Controllers\adminBlogController::class, 'createPost']
);
Route::post('/admin/blog/nuevaEntrada',
    [\App\Http\Controllers\adminBlogController::class, 'processPost']
);

Route::get('admin/blog/{id}/borrar',
    [\App\Http\Controllers\adminBlogController::class, 'deletePost']
)->whereNumber('id');

Route::post('admin/blog/{id}/borrar',
    [\App\Http\Controllers\adminBlogController::class, 'processDeletePost']
)->whereNumber('id');

route::get('/admin/blog/{id}/editar',
    [\App\Http\Controllers\adminBlogController::class, 'editPost']
)->whereNumber('id');
route::post('/admin/blog/{id}/editar',
    [\App\Http\Controllers\adminBlogController::class, 'processEditPost']
)->whereNumber('id');





//Noticias controller se encarga de las vistas de noticias
Route::get('/noticias',
    [\App\Http\Controllers\noticiasController::class, 'index']
);
Route::get('/noticias/{id}',
    [\App\Http\Controllers\noticiasController::class, 'show']
)->whereNumber('id');



Route::get('/admin/noticias',
    [\App\Http\Controllers\adminNoticiasController::class, 'admin']
);
Route::get('/admin/noticias/nuevaEntrada',
    [\App\Http\Controllers\adminNoticiasController::class, 'createNoti']
);
Route::post('/admin/noticias/nuevaEntrada',
    [\App\Http\Controllers\adminNoticiasController::class, 'processNoti']
);

Route::get('admin/noticias/{id}/borrar',
    [\App\Http\Controllers\adminNoticiasController::class, 'deleteNoti']
)->whereNumber('id');
Route::post('admin/noticias/{id}/borrar',
    [\App\Http\Controllers\adminNoticiasController::class,'processDeleteNoti']
)->whereNumber('id');

route::get('/admin/noticias/{id}/editar',
    [\App\Http\Controllers\adminNoticiasController::class, 'editNoti']
)->whereNumber('id');
route::post('/admin/noticias/{id}/editar',
    [\App\Http\Controllers\adminNoticiasController::class, 'processEditNoti']
)->whereNumber('id');

