<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria=Category::all();
        return view('Categoria.index',compact('categoria'));

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
        

        $category=New Category();
        $category->name=ucfirst(strtolower($request->categoria));
        $category->save();

        if($category->save()){
          Session::flash('mensaje', 'La Categoria se creo Exitosamente');
          Session::flash('class', 'success');
        }else{

          Session::flash('mensaje', 'Su solicitud no fue Procesada');
          Session::flash('class', 'danger');

        }

          return redirect()->intended(url('/category'))->withInput();


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
        //


        $category=Category::find($id);
        $category->name=ucfirst(strtolower($request->categoria));


        if($category->save()){
          Session::flash('mensaje', 'La Categoria se modifico Exitosamente');
          Session::flash('class', 'success');
        }else{

          Session::flash('mensaje', 'Su solicitud no fue Procesada');
          Session::flash('class', 'danger');

        }

          return redirect()->intended(url('/category'))->withInput();
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

        $category=Category::find($id);
        $category->status=$st;

        if($st!='true'){
            $mensaje='Desactivada';
        }else{
            $mensaje='Activada';
        }

        #####################################################################

        if($category->save()){
          Session::flash('mensaje', 'La Categoria ha Sido '.$mensaje.' Exitosamente');
          Session::flash('class', 'success');
        }else{

          Session::flash('mensaje', 'Su solicitud no fue Procesada');
          Session::flash('class', 'danger');

        }

          return redirect()->intended(url('/category'))->withInput();


    }



    public function mail($request){
            $data="";
          Mail::send('emails.reminder', ['user' => $data], function ($m) use ($user) {
            $m->from('yendersonhernandez@.com', 'Your Application');

            $m->to('yendersonhernandez@gmail.com', 'yenderson')->subject('Your Reminder!');
        });
    }
}
