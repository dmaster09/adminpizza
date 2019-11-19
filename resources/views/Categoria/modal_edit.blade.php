<!-- Modal  editar-->

@foreach($categoria as $category)
<div class="modal fade" id="exampleModaledit{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{action('CategoryController@update',$category->id)}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token"value="{{ csrf_token()}}">
      

           {{ csrf_field() }}
               <div class="form-group">
                  <label for="exampleInputPassword1">Nombre de Categoria</label>
                  <input type="text" name="categoria" class="form-control" id="nameCategoria" placeholder="Nombre de Cateoria" value="{{$category->name}}" required="">
                </div>  


                <!--Home view-->
        <div class="col-md-12 center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambio</button>
      </div>
         </form>

      </div>
      <div class="modal-footer">
       
      </div>
     
    </div>
  </div>
</div>
@endforeach