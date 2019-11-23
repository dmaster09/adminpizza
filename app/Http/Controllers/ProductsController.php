<?php

namespace App\Http\Controllers;
use App\Products;
use App\Ingredients;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $producto=Products::all();
        $categoria=Category::where('status','true')->get();
        $ing=Ingredients::where('status','true')->get();
        return view('Productos.index',compact('producto','categoria','ing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());


    if ($request->hasFile('image_prod')) {
      $file = $request->file('image_prod');
      //valido formato de imagen
          $cadena = str_replace(' ', '', $request->nombre);
        $fileName = $cadena.'/'.$cadena . '.' . $file->getClientOriginalExtension();
      
        $path = $request->file('image_prod')->storeAs(
          'public/pizza/',$fileName
        );
    }else{

        Session::flash('mensaje', 'Introduzca Una Imgen referencial de su producto');
        Session::flash('class', 'danger');

         return redirect()->intended(url('/products'))->withInput();
    }


    $Products=new Products();
    $Products->name=$request->nombre;
    $Products->price=number_format($request->price,'2','.',',');
    $Products->Category_id=$request->category_id;
    $Products->ingredients=implode(',', $request->ingredientes);
    $Products->top=$request->top;
    $Products->image=$fileName;


    if($Products->save()){
        Session::flash('mensaje', 'Su producto fue creado de manera exitosa!! ');
        Session::flash('class', 'success'); 
    }else{
         Session::flash('mensaje', 'El producto no Ha Sido Cargado por favor Verifique ');
        Session::flash('class', 'danger'); 
    }

    return redirect()->intended(url('/products'))->withInput();


}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        //dd($request->all());
     $Products=Products::find($id);

    if ($request->hasFile('image_prod')) {
      $file = $request->file('image_prod');
     //valido formato de imagen
         $cadena = str_replace(' ', '', $request->nombre);
        $fileName = $cadena.'/'.$cadena . '.' . $file->getClientOriginalExtension();
      
        $path = $request->file('image_prod')->storeAs(
          'public/pizza/',$fileName
        );
        $Products->image=$fileName;
    }


   
    $Products->name=$request->nombre;
    $Products->price=number_format($request->price,'2','.',',');
    $Products->Category_id=$request->category_id;
    $Products->ingredients=implode(',', $request->ingredientes);
    $Products->top=$request->top;
 


    if($Products->save()){
        Session::flash('mensaje', 'Su producto fue Modificado de manera exitosa!! ');
        Session::flash('class', 'success'); 
    }else{
         Session::flash('mensaje', 'El producto no Ha Sido modificado por favor Verifique ');
        Session::flash('class', 'danger'); 
    }

    return redirect()->intended(url('/products'))->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   public function status($id,$st){

        $producto=Products::find($id);
        $producto->status=$st;

        if($st!='true'){
            $mensaje='Desactivado';
        }else{
            $mensaje='Activado';
        }

        #####################################################################

        if($producto->save()){
          Session::flash('mensaje', 'El producto ha Sido '.$mensaje.' Exitosamente');
          Session::flash('class', 'success');
        }else{

          Session::flash('mensaje', 'Su solicitud no fue Procesada');
          Session::flash('class', 'danger');

        }

        return redirect()->intended(url('/products'))->withInput();


    }
}
