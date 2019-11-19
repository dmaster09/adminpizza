@extends('layouts.admin')

@section('content')


 <!-- Content Header (Page header) -->
     
    

      <!-- Main content -->
      <section class="content">
       
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Ingredientes para Tus Pizzas</strong></h3>
          </div>
          <div class="box-body text-center">
            <center><button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Crear Ingrediente</button></center>
            <br><br>
            <!--AQUI VA TODO-->
            <div class="table-responsive">
             <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Acción</th>                 
                </tr>
                </thead>
                <tbody>  
                @foreach($ing as $ingredientes)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$ingredientes->name}}</td>
                  <td>
                    <button class="btn btn-default" data-toggle="modal" data-target="#exampleModaleditar{{$ingredientes->id}}" ><i class="fa fa-edit"></i></button>
                    @if($ingredientes->status!='false')
                    <a href="{{url('/IngredienteStatus/'.$ingredientes->id.'/false')}}"><button class="btn btn-danger" title="Desactivar"><i class="fa fa-power-off"></i></button></a>
                    @else
                    <a href="{{url('/IngredienteStatus/'.$ingredientes->id.'/true')}}">
                    <button class="btn btn-success" title="Activar"><i class="fa fa-check-circle"></i></button>
                    </a>
                    @endif
                  </td>
                </tr>
                @endforeach          
               
                </tbody>
                <tfoot>
                <tr>
                  
                </tr>
                </tfoot>
              </table>
            </div>




          <!--END FILTRO-->

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->



    <!-- Modal  crear -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Ingrediente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/ingredientes') }}">

           {{ csrf_field() }}
               <div class="form-group">
                  <label for="exampleInputPassword1">Nombre de Ingrediente</label>
                  <input type="text" name="nombre" class="form-control" id="nameIngrediente" placeholder="Nombre de Ingrediente" required="">
                </div>  


                <!--Home view-->
        <div class="col-md-12 center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
         </form>

      </div>
      <div class="modal-footer">
       
      </div>
     
    </div>
  </div>
</div>


  @foreach($ing as $ingredientes)

      <!-- Modal  editar -->
<div class="modal fade" id="exampleModaleditar{{$ingredientes->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Ingrediente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="{{action('IngredientsController@update',$ingredientes->id)}}" method="POST">
    <input type="hidden" name="_method" value="PUT"> 

           {{ csrf_field() }}
               <div class="form-group">
                  <label for="exampleInputPassword1">Nombre de Ingrediente</label>
                  <input type="text" name="nombre" class="form-control" id="nameIngrediente" placeholder="Nombre de Ingrediente" value="{{$ingredientes->name}}" required="">
                </div>  


                <!--Home view-->
        <div class="col-md-12 center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
         </form>

      </div>
      <div class="modal-footer">
       
      </div>
     
   </div>
  </div>
  </div>

  @endforeach

@endsection
