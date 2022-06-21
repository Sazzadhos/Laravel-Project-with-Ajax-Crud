

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');


//Route::get('/add', function () {
//    return view('backend.pages.product.addproduct');
//})->name('dashboard');

//Route::get('/blank', function () {
 //   return view('backend.blank');
//});

//For Product
  Route::group(['prefix'=>'/product'],function(){

  Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->name('store');
   
  Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->name('create');

  Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->name('manage');

  Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->name('edit');

  Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->name('update');

  Route::get('/delete/{id}','App\Http\Controllers\Backend\ProductController@destroy')->name('delete');
});

//For Category
Route::group(['prefix'=>'/category'],function(){

  Route::post('/catstore','App\Http\Controllers\Backend\CategoryController@store')->name('catstore');
   
  Route::get('/create','App\Http\Controllers\Backend\CategoryController@create')->name('catcreate');

  Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->name('catmanage');

  Route::get('/catedit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->name('catedit');

  Route::get('/catshow','App\Http\Controllers\Backend\CategoryController@catshow')->name('catshow');

  Route::post('/catupdate/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('catupdate');

  Route::get('/delete/{id}','App\Http\Controllers\Backend\CategoryController@destroy')->name('catdelete');
});



