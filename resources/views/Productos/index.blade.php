@extends('layouts.admin')

@section('content')


 <!-- Content Header (Page header) -->
     
    

      <!-- Main content -->
      <section class="content">
       
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Arma Tu Pizza</strong></h3>
          </div>
          <div class="box-body text-center">
            <center><button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Crear Producto</button></center>
            <br><br>
            <!--AQUI VA TODO-->
            <div class="table-responsive">
             <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Categoria</th> 
                  <th>Ingrediente</th> 
                  <th>Top</th>
                  <th>Status</th>
                  <th>Acción</th>               
                </tr>
                </thead>
                <tbody>  
                
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
        <h5 class="modal-title" id="exampleModalLabel">Crea Tu Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/products') }}" enctype="multipart/form-data">

           {{ csrf_field() }}
               <div class="form-group">
                  <label for="exampleInputPassword1">Nombre de Producto</label>
                  <input type="text" name="nombre" class="form-control" id="nameIngrediente" placeholder="Nombre de Ingrediente" required="">
                </div>  

                 <div class="form-group">
                  <label for="exampleInputPassword1">Precio </label>
                  <input type="number" name="price" class="form-control" id="price" placeholder="0.00" required="">
                </div> 

                <div class="form-group">
                  <label for="exampleInputPassword1">Ingredientes </label>
                  <select class="form-control" name='ingredientes[]'  multiple required="">
                    <option value="">-seleccione un Items-</option>  
                    @foreach($ing as $ingr)
                    <option value="{{$ingr->id}}">{{$ingr->name}}</option>
                    @endforeach                 
                  </select>
                </div> 

                 <div class="form-group">
                  <label for="exampleInputPassword1">Top ?</label>
                  <input type="checkbox" name="top_">
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Foto del Producto</label>
                  <input type="file" name="image_prod" class="form-control" id="image_prod" required="">
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

 

@endsection
