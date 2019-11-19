@extends('layouts.admin')

@section('content')


 <!-- Content Header (Page header) -->
     
    

      <!-- Main content -->
      <section class="content">
       
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Categorias De Tu Sitio WEB</strong></h3>
          </div>
          <div class="box-body text-center">
            <center><button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Nueva Categoria</button></center>
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
                @foreach($categoria as $category)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$category->name}} </td>
                  <td>
                    <button class="btn btn-default" data-toggle="modal" data-target="#exampleModaledit{{$category->id}}" ><i class="fa fa-edit"></i></button>
                    @if($category->status!='false')
                    <a href="{{url('/categoryStatus/'.$category->id.'/false')}}"><button class="btn btn-danger" title="Desactivar"><i class="fa fa-power-off"></i></button></a>
                    @else
                    <a href="{{url('/categoryStatus/'.$category->id.'/true')}}">
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



      @include('Categoria.modal_create');
      @include('Categoria.modal_edit');



@endsection
