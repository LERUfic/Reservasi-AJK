<?php

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

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'index']);
Route::get('/jadwal', 'HomeController@jadwal');
Route::get('/listvideo', 'VideoController@listvideo');

Route::group(['middleware' => ['guest']], function (){
    Route::get('/login', ['uses' => 'AuthController@showLoginForm', 'as' => 'login']);
    Route::post('/login', ['uses' => 'AuthController@login', 'as' => 'auth.login']);
});

Route::group(['middleware' => ['auth','admin']], function (){
    Route::get('/admin', ['uses' => 'AdminController@index', 'as' => 'index.admin']);
    Route::post('/admin/accept', 'AdminController@accept');
    Route::post('/admin/reject', 'AdminController@reject');
    Route::post('/admin/delete', 'AdminController@delete');

    Route::get('/videolist', ['uses' => 'VideoController@next', 'as' => 'video.list']);
    Route::post('/videolist/edit', 'VideoController@edit');
    Route::post('/videolist/delete', 'VideoController@delete');
    Route::post('/videolist/update/{id}', ['uses' => 'VideoController@update', 'as' => 'video.update']);

    Route::get('/addvideo', ['uses' => 'VideoController@viewVideo', 'as' => 'video.setting']);
    Route::post('/addvideo', 'VideoController@create');


    Route::get('/pcatur', ['uses' => 'VideoController@pc_status', 'as' => 'pc.atur']);
    Route::get('/resetpc', ['uses' => 'VideoController@reset', 'as' => 'pc.reset']);

    Route::get('/inventaris', ['uses' => 'InventarisController@index', 'as' => 'index.inven']);
    Route::post('/inventaris/edit', 'InventarisController@edit');
    Route::post('/inventaris/delete', 'InventarisController@delete');
    Route::post('/inventaris/update/{id}', ['uses' => 'InventarisController@update', 'as' => 'update.inven']);

    Route::get('/inventaris/list', ['uses' => 'InventarisController@indexadmin', 'as' => 'list.invenadmin']);
    Route::post('/inventaris/list/accept', 'InventarisController@listaccept');
    Route::post('/inventaris/list/reject', 'InventarisController@listreject');
    Route::post('/inventaris/list/delete', 'InventarisController@listdelete');

    Route::post('/changestatus', ['uses' => 'VideoController@changestatus', 'as' => 'change.status']);
});

Route::group(['middleware' => ['auth']], function (){
    Route::get('/user', ['uses' => 'AdminController@indexuser', 'as' => 'index.user']);
    Route::get('/listres', ['uses' => 'HomeController@listres', 'as' => 'listres']);

    Route::get('/videodisplay', ['uses' => 'VideoController@display', 'as' => 'video.display']);

    Route::get('/reserve', ['uses' => 'HomeController@showReserve', 'as' => 'form.reservation']);
    Route::post('/reserve', 'HomeController@reserve');

    Route::get('/pcview', ['uses' => 'VideoController@pcedit', 'as' => 'pc.view']);
    
    Route::get('/invenuser', ['uses' => 'InventarisController@userindex', 'as' => 'index.invenuser']);

    Route::get('/inventaris/add', ['uses' => 'InventarisController@addinven', 'as' => 'add.inven']);
    Route::post('/inventaris/add', 'InventarisController@create');

    Route::get('/inventaris/reserve', ['uses' => 'InventarisController@showReserve', 'as' => 'reserve.inven']);
    Route::post('/inventaris/reserve', 'InventarisController@reserve');

    Route::get('/inventaris/listuser', ['uses' => 'InventarisController@indexuser', 'as' => 'list.invenuser']);

    Route::get('/logout', ['uses' => 'AuthController@logout', 'as' => 'logout']);
});

Route::get('/register', 'AuthController@showRegister');
Route::post('/register', 'AuthController@register');


