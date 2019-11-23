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

Route::get('/', function () {

	$category=App\Category::where('status','true')->get();
    $ing=App\Ingredients::all();
    $top=App\Products::where('top','on')->take(6)->get();
	
	$col=collect();
	     foreach($category as $cat){

	     $producto=App\Products::where('category_id',$cat->id)->get();
     
          foreach ($producto as $key => $prod) {

    	  $res=explode(",",$prod->ingredients);
          $ingredientes=$ing->whereIn('id',$res);

          $col->push(['producto'=>$prod,'categoria'=>$cat,'ingr'=>$ingredientes]);
      
          }       
    
    
}

	$col->collapse();
	
    return view('page',compact('col','category','top'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ingredientes', 'IngredientsController');
Route::resource('category', 'CategoryController');
Route::get('/categoryStatus/{id}/{status}','CategoryController@status')->name('CategoryStatus');
Route::resource('products', 'ProductsController');
Route::get('/IngredienteStatus/{id}/{status}','IngredientsController@status')->name('IngredienteStatus');
Route::get('/ProductsStatus/{id}/{status}','ProductsController@status')->name('ProductsStatus');