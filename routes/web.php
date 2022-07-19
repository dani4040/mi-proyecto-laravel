<?php

use ProductosController as ProductosController;
use PedidosController as PedidosController;
use App\productos as productos;
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
    $productos['prod'] = productos::get();
    return view('productos', $productos);
});

/* Route::get('/productos', [ProductosController::class, 'index']);
 */

 Route::resource('productos', ProductosController::class);
 Route::resource('pedidos', PedidosController::class);
