<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Route::get('/dashboard', function () {
 //   return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
  return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix'=>'/admin'],function(){
  //For Product
  Route::group(['prefix'=>'/product'],function(){

    Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->middleware(['auth'])->name('store');
    
    Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->middleware(['auth'])->name('create');

    Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->middleware(['auth'])->name('manage');

    Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->middleware(['auth'])->name('edit');

    Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->middleware(['auth'])->name('update');

    Route::get('/delete/{id}','App\Http\Controllers\Backend\ProductController@destroy')->middleware(['auth'])->name('delete');
  });

  //For Category
  Route::group(['prefix'=>'/category'],function(){

    Route::post('/catstore','App\Http\Controllers\Backend\CategoryController@store')->middleware(['auth'])->name('catstore');
    
    Route::get('/create','App\Http\Controllers\Backend\CategoryController@create')->middleware(['auth'])->name('catcreate');

    Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->middleware(['auth'])->name('catmanage');

    Route::get('/catedit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->middleware(['auth'])->name('catedit');

    Route::get('/catshow','App\Http\Controllers\Backend\CategoryController@catshow')->middleware(['auth'])->name('catshow');

    Route::post('/catupdate/{id}','App\Http\Controllers\Backend\CategoryController@update')->middleware(['auth'])->name('catupdate');

    Route::get('/delete/{id}','App\Http\Controllers\Backend\CategoryController@destroy')->middleware(['auth'])->name('catdelete');
  });

  //For Vendor
  Route::group(['prefix'=>'/vendor'],function(){

    Route::post('/venstore','App\Http\Controllers\Backend\ProductController@store')->middleware(['auth'])->name('venstore');
    
    Route::get('/vencreate','App\Http\Controllers\Backend\ProductController@create')->middleware(['auth'])->name('vencreate');

    Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->middleware(['auth'])->name('venmanage');

    Route::get('/venedit/{id}','App\Http\Controllers\Backend\ProductController@edit')->middleware(['auth'])->name('venedit');

    Route::post('/venupdate/{id}','App\Http\Controllers\Backend\ProductController@update')->middleware(['auth'])->name('venupdate');

    Route::get('/vendelete/{id}','App\Http\Controllers\Backend\ProductController@destroy')->middleware(['auth'])->name('vendelete');
  });
});  


//For FrontEnd
Route::get('/abc', function () {
  return view('frontend.index');
})->name('index');





















require __DIR__.'/auth.php';
