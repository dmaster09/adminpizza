<!-- Modal  crear -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/category') }}">

           {{ csrf_field() }}
               <div class="form-group">
                  <label for="exampleInputPassword1">Nombre de Categoria</label>
                  <input type="text" name="categoria" class="form-control" id="nameCategoria" placeholder="Nombre de Cateoria" required="">
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