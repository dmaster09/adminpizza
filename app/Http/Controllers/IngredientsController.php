<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredients;
use Illuminate\Support\Facades\Session;
class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ing=Ingredients::all();
        return view('Ingredientes.index',compact('ing'));

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
        //
        $ing=New Ingredients();
        $ing->name=ucfirst(strtolower($request->nombre));
        if($ing->save()){
         Session::flash('mensaje', 'El Ingrediente se creo  Exitosamente');
          Session::flash('class', 'success');
        }else{

          Session::flash('mensaje', 'Su solicitud no fue Procesada');
          Session::flash('class', 'danger');

        }

        return redirect()->intended(url('/ingredientes'))->withInput();
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
        $ing=Ingredients::find($id);
        $ing->name=ucfirst(strtolower($request->nombre));
        if($ing->save()){
         Session::flash('mensaje', 'El Ingrediente se modifico  Exitosamente');
          Session::flash('class', 'success');
        }else{

          Session::flash('mensaje', 'Su solicitud no fue Procesada');
          Session::flash('class', 'danger');

        }

        return redirect()->intended(url('/ingredientes'))->withInput();
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

        $ing=Ingredients::find($id);
        $ing->status=$st;

        if($st!='false'){
            $mensaje='Desactivado';
        }else{
            $mensaje='Activado';
        }

        #####################################################################

        if($ing->save()){
          Session::flash('mensaje', 'El Ingrediente ha Sido '.$mensaje.' Exitosamente');
          Session::flash('class', 'success');
        }else{

          Session::flash('mensaje', 'Su solicitud no fue Procesada');
          Session::flash('class', 'danger');

        }

        return redirect()->intended(url('/ingredientes'))->withInput();


    }

}
