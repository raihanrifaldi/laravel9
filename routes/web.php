<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\Layout;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SttController;

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

// Route::get('/', function () {
//     return view('home', [
//         'name' => 'AxA',
//         'role' => 'Admin',
//         'hobi' => ['Game', 'Soccer', 'Archery', 'Watch Movie']
//     ]);
// });

//layout
Route::get('/', [LoginController::class, 'index']);

Route::controller(Layout::class)->group(function () {
    route::get('/', 'home')->middleware('auth');
    route::get('/layout/home', 'home')->middleware('auth');
    route::get('/layout/akun', 'detail')->middleware('auth');

    route::get('/layout/{id}/edit', 'edit')->middleware('auth');
    route::put('/layout/{id}', 'update')->middleware('auth');

    route::get('/logout', 'logout')->middleware('auth');
});

Route::controller(AdminController::class)->group(function () {
    route::get('AdminController', 'index');
});

Route::controller(UserController::class)->group(function () {
    route::get('UserController', 'index');
});

//stt
Route::controller(SttController::class)->group(function () {
    route::get('/stt', 'index');
    route::get('/stt/index', 'index');
    route::get('/stt/indexforuser', 'indexforuser');

    route::get('/stt/app', 'app');

    route::get('/stt/insert', 'insert');
    // route::get('/stt/inserts', 'inserts');
    route::post('/stt/store', 'store');

    route::get('/stt/{id}/edit', 'edit');
    route::put('/stt/{id}', 'update');

    route::get('/stt/{id}/detail', 'detail');
    route::put('/stt/{id}', 'update');

    route::delete('/stt/{id}', 'destroy');
});

//sd
Route::controller(SdController::class)->group(function () {
    route::get('/sd', 'index');
    route::get('/sd/index', 'index');
    route::get('/sd/indexforuser', 'indexforuser');

    // route::get('/sd/app', 'app');

    route::get('sd/speakerdiarization', 'speaker');

    // route::get('/sd/insert', 'insert');
    route::get('/sd/inserts', 'inserts');
    route::post('/sd/store', 'store');

    route::get('/sd/{id}/edit', 'edit');
    route::put('/sd/{id}', 'update');

    route::get('/sd/{id}/detail', 'detail');
    route::put('/sd/{id}', 'update');

    route::delete('/sd/{id}', 'destroy');
});

//vtt atau V2
Route::controller(V2Controller::class)->group(function () {
    route::get('/vtt', 'index');
    route::get('/vtt/index', 'index');
    // route::get('/vtt/indexforuser', 'indexforuser');

    route::get('/vtt/app', 'app');

    // route::get('/stt/insert', 'insert');
    // route::post('/stt/store', 'store');

    // route::get('/stt/{id}/edit', 'edit');
    // route::put('/stt/{id}', 'update');

    // route::get('/stt/{id}/detail', 'detail');
    // route::put('/stt/{id}', 'update');

    // route::delete('/stt/{id}', 'destroy');
});

//Akun
Route::controller(AkunController::class)->group(function () {
    route::get('/akun', 'index');
    route::get('/akun/index', 'index');

    route::get('/akun/app', 'app');

    route::get('/akun/insert', 'insert');
    route::post('/akun/store', 'store');

    route::get('/akun/{id}/edit', 'edit');
    route::put('/akun/{id}', 'update');

    route::get('/akun/{id}/detail', 'detail');
    route::put('/akun/{id}', 'update');

    route::delete('/akun/{id}', 'destroy');
});


//admin
Route::controller(App\Http\Controllers\AdminController::class)->group(function () {
    Route::get('admin_home', 'index');
});

//user
Route::controller(App\Http\Controllers\UserController::class)->group(function () {
    Route::get('user', 'index');
});



//login
Route::controller(App\Http\Controllers\LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::get('login/proses', 'proses');
    Route::get('logout', 'logout');
    Route::get('admin_home', 'admin');
    Route::get('user_home', 'user');
});

Route::group(['middleware' => ['Auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('beranda', App\Http\Controllers\AdminController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('beranda', App\Http\Controllers\UserController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:0']], function () {
        Route::resource('beranda', App\Http\Controllers\LoginController::class);
    });
});

//Registrasi
Route::controller(App\Http\Controllers\RegistrasiController::class)->group(function () {
    Route::get('register', 'index')->name('registrasi');
    Route::get('register/view_register', 'index')->name('registrasi');
    Route::get('regis/proses', 'proses');
    route::post('/regis/store', 'store');
    Route::get('logout', 'logout');
});



////////////////////////////////////////////////////////////////////////////////////////////



// no use

Route::get('/table', function () {
    return view('table', [
        'name' => 'Aqsha',
        'role' => 'Admin',
        'hobi' => ['Game', 'Soccer', 'Archery', 'Watch Movie']
    ]);
});


Route::get('/stt', [SttController::class, 'index']);

Route::get('/stt/insert', [SttController::class, 'insert']);

Route::post('/stt/store', [SttController::class, 'store']);

Route::get('/stt/{id}/edit', [SttController::class, 'edit']);

Route::put('/stt/{id}', [SttController::class, 'update']);

Route::delete('/stt/{id}', [SttController::class, 'destroy']);


Route::get('/templte', function () {
    return view('templte');
});

Route::get('/contact', function () {
    return view('contact', [
        'name' => 'Aqsha',
        'phone' => '+628323211232',
        'hobi' => ['Game', 'Soccer', 'Archery', 'Watch Movie']
    ]);
});
