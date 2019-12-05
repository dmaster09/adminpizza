@extends('layouts.admin')

@section('content')


 <!-- Content Header (Page header) -->
     
    

      <!-- Main content -->
      <section class="content">
       
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Crea Tu Producto</strong></h3>
          </div>
          <div class="box-body text-center">
            <center><button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Crear Producto</button></center>
            <br><br>
            <!--AQUI VA TODO-->
            <div class="table-responsive">
             <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                  <th>Nombre</th>
                  <th>detalle</th>
                                 
                </tr>
                </thead>
                <tbody>  
                  @foreach($producto as $prod)
                  <?php
                 $res=explode(",",$prod->ingredients);
                  $ingredientes=$ing->whereIn('id',$res);


                  ?>
                   <tr>
                  
                 <td>
                  <img src="{{ url('productos/pizza/'.$prod->image) }}"  class="img-thumbnail" style="    width: 150px;
                  height: 101px;">
                    <br><br>
                    <button class="btn btn-default"  data-toggle="modal" data-target="#exampleModaledit{{$prod->id}}"><i class="fa fa-edit"></i></button>           
                    
                    @if($prod->status!='false')
                    <a href="{{url('/ProductsStatus/'.$prod->id.'/false')}}"><button class="btn btn-danger" title="Desactivar"><i class="fa fa-power-off"></i></button></a>
                    @else
                    <a href="{{url('/ProductsStatus/'.$prod->id.'/true')}}">
                    <button class="btn btn-success" title="Activar"><i class="fa fa-check-circle"></i></button>
                    </a>
                    @endif
                   </td>
                 <td>
                  <strong>Nombre: </strong> {{$prod->name}} <br>
                  <strong>Categoria: </strong> {{$prod->categoria->name}} <br>
                  <strong>Ingredientes: </strong> 
                  @foreach($ingredientes as $ig)
                  {{$ig->name}},
                  @endforeach


                   <br>
                  <strong>Precio: €</strong> {{number_format($prod->price,2,',','.')}} <br>
                  @if($prod->top=='on')
                  <strong>Top:</strong>
                  <span class="fa fa-check"></span><br>
                  @else
                  <strong>Top:</strong>
                  <span class="fa fa-power-off"></span><br>

                  @endif

                   @if($prod->status=='true')
                  
                  <span class="btn btn-success btn-xs">Activo</span><br>
                  @else
                  <span class="btn btn-danger btn-xs">Inactivo</span>

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
                  <input type="text" name="nombre" class="form-control" id="nameproducto" placeholder="Nombre de Producto" required="">
                </div>  

                 <div class="form-group">
                  <label for="exampleInputPassword1">Categoria</label>
                  <select class="form-control" name='category_id'  e required="">
                    <option value="">-seleccione Categoria-</option>  
                    @foreach($categoria as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach                 
                  </select>
                </div> 

                 <div class="form-group">
                  <label for="exampleInputPassword1">Precio </label>
                  <input type="number" name="price" class="form-control input-number"  step="0.01" id="price" placeholder="0.00" required="">
                </div> 

                <div class="form-group">
                  <label for="exampleInputPassword1">Ingredientes </label>
                  <select class="form-control" name='ingredientes[]'  multiple required="">
                    <option value="" disabled="">-seleccione un Items-</option>  
                    <option value="">No Posee Ingredientes</option>

                    @foreach($ing as $ingr)
                    <option value="{{$ingr->id}}">{{$ingr->name}}</option>
                    @endforeach                 
                  </select>
                </div> 

                 <div class="form-group">
                  <label for="exampleInputPassword1">Top ?</label>
                  <input type="checkbox" name="top">
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



<!--modal update-->
 @foreach($producto as $prod)

<div class="modal fade" id="exampleModaledit{{$prod->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crea Tu Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{action('ProductsController@update',$prod->id)}}"  enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT"> 
           {{ csrf_field() }}
               <div class="form-group">
                  <label for="exampleInputPassword1">Nombre de Producto</label>
                  <input type="text" name="nombre" class="form-control" id="nameproducto" value="{{$prod->name}}" placeholder="Nombre de Producto" required="">
                </div>  

                 <div class="form-group">
                  <label for="exampleInputPassword1">Categoria</label>
                  <select class="form-control" name='category_id' required="">
                    <option value="">-seleccione Categoria-</option>  
                    @foreach($categoria as $category)
                    <option value="{{$category->id}}" @if($category->id=$prod->category_id) selected @endif>{{$category->name}}</option>
                    @endforeach                 
                  </select>
                </div> 

                 <div class="form-group">
                  <label for="exampleInputPassword1">Precio </label>
                  <input type="number" name="price" class="form-control" id="price" value="{{$prod->price}}" placeholder="0.00" required="">
                </div> 

                <div class="form-group">
                  <label for="exampleInputPassword1">Ingredientes </label>
                  <select class="form-control" name='ingredientes[]'  multiple required="">
                    <option value="" disabled="">-seleccione un Items-</option>  
                    <option value="">No Posee Ingredientes</option>
                    @foreach($ing as $ingr)
                    <option value="{{$ingr->id}}" <?php if(in_array($ingr->id,explode(',',$prod->ingredients))){ echo "selected";}?> >{{$ingr->name}}</option>
                    @endforeach                 
                  </select>
                </div> 

                 <div class="form-group">
                  <label for="exampleInputPassword1">Top ?</label>
                  <input type="checkbox" name="top" @if($prod->top=='on') checked @endif>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Foto del Producto</label>
                  <input type="file" name="image_prod" class="form-control" id="image_prod">
                </div>


                <!--Home view-->
        <div class="col-md-12 center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
         </form>

      </div>
      <div class="modal-footer">
       
      </div>
     
    </div>
  </div>
</div>
@endforeach







<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript">
$('.input-number').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
})

var app = new Vue({
    el: '#app',
    created(){
    },  

    data: {   
    },

    watch: {
    }
  });
 </script>
 

@endsection
