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

         $col->push(['nombre'=>$prod->name,'category_id'=>$prod->category_id,'image'=>$prod->image,'price' => $prod->price,'ingr'=>$ingredientes]);

      
          }       
    
    
      }

      $col->collapse();	
	
       return view('page',compact('col','category','top','ing'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Auth::routes();



Route::resource('ingredientes', 'IngredientsController')->middleware('auth');;
Route::resource('category', 'CategoryController')->middleware('auth');
Route::get('/categoryStatus/{id}/{status}','CategoryController@status')->name('CategoryStatus')->middleware('auth');;Route::get('mail','CategoryController@mail')->name('mail');
Route::resource('products', 'ProductsController')->middleware('auth');;
Route::get('/IngredienteStatus/{id}/{status}','IngredientsController@status')->name('IngredienteStatus')->middleware('auth');
Route::get('/ProductsStatus/{id}/{status}','ProductsController@status')->name('ProductsStatus')->middleware('auth');