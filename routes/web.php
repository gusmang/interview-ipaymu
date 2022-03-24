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

Route::get('/', [
	'as'   => 'home',
	'uses' => 'FrontController@index'
]);

Route::get('/checkout', [
	'as'   => 'checkout',
	'uses' => 'FrontController@checkout'
]);

Route::post('/payment', [
	'as'   => 'payment',
	'uses' => 'FrontController@payment'
]);

Route::get('administrator/', function () {
    return view('auth.login');
});


Route::get('administrator/login', function () {
	return view('auth.login');
});

Route::group(['as' => 'api', 'prefix' => 'api'], function () {

	Route::get('/get_product_list', [
		'as'   => 'get_product_list',
		'uses' => 'Api\ProductController@get_product_list'
	]);

});

	
Route::group(['as' => 'administrator', 'prefix' => 'administrator',
'middleware' => 'admin'], function () {

	Route::get('/home', [
        'as'   => 'dashboard',
        'uses' => 'Administrator\DashboardController@indexhome'
    ]);
	
	Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'Administrator\DashboardController@indexhome'
    ]);

	Route::get('/gallery', [
        'as'   => 'gallery',
        'uses' => 'Administrator\GalleryController@index_gal'
    ]);
    
    // Route::get('/gallery', function () {
    //     return view('admin.pages.data_gallery.table');
	// })->middleware('admin');
    

	Route::get('/home', [
        'as'   => 'home',
        'uses' => 'Administrator\DashboardController@indexhome'
    ]);

	Route::get('/profile', [
        'as'   => 'home',
        'uses' => 'Administrator\DashboardController@indexprofile'
    ]);

	Route::get('/contacts', [
        'as'   => 'home',
        'uses' => 'Administrator\DashboardController@indexcontacts'
    ]);
    
	

	Route::get('/userprofile', [
        'as'   => 'home',
        'uses' => 'UserController@indexuser'
    ]);

	Route::get('/datauser', function () {
	    return view('admin.pages.data_user.table');
	});
	
	
	Route::get('/product-list','Administrator\ProductController@index');
	Route::get('/get_product','Administrator\ProductController@get_product');
	Route::get('/get_detail_product/{index}','Administrator\ProductController@get_detail_product');
	Route::post('post_data_product','Administrator\ProductController@post_data_product');
	Route::put('post_product_edit','Administrator\ProductController@post_product_edit');
	Route::delete('hapus_product/{index}','Administrator\ProductController@hapus_product');
	

	Route::get('/hapus_gambar_gallery/{index}', [
        'as'   => 'hapus_gambar_gallery',
        'uses' => 'Administrator\RoomCatController@hapus_gambar_gallery'
    ]);

	Route::get('/detail-room-category/{index}','Administrator\RoomCatController@index_detail');


	Route::get('/pekerjaan','Administrator\PekerjaanController@index_pekerjaan');
	Route::post('/tambah_pekerjaan' , 'Administrator\PekerjaanController@tambah_pekerjaan');
	Route::get('/get_detail_pekerjaan/{index}' , 'Administrator\PekerjaanController@get_detail_pekerjaan');
	Route::put('/update_pekerjaan' , 'Administrator\PekerjaanController@update_pekerjaan');
	Route::delete('/post_hapus_pekerjaan_new/{index}' , 'Administrator\PekerjaanController@post_hapus_pekerjaan');


	Route::get('/karyawan','Administrator\KaryawanController@index_karyawan');
	Route::post('/tambah_karyawan' , 'Administrator\KaryawanController@tambah_karyawan');
	Route::get('/get_detail_karyawan/{index}' , 'Administrator\KaryawanController@get_detail_karyawan');
	Route::put('/update_karyawan' , 'Administrator\KaryawanController@update_karyawan');
	Route::delete('/post_hapus_karyawan/{index}' , 'Administrator\KaryawanController@post_hapus_karyawan');
	
	Route::get('/generate_random_karyawan' , 'Administrator\KaryawanController@generate_random_karyawan');

	Route::get('logoutadmin','LoginController@logout');
	

	});


	
Route::post('runlogin','LoginController@runlogin');

Auth::routes();