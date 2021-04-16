@extends("../layouts/plantilla")
@section('nav')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Producto seleecionado, presiona el boton para borrar</h2>
                <form action="/productos/{{$producto->id}}" method="POST">
{{csrf_field()}}
<input type="hidden" name="_method" value="DELETE">
<input class="btn btn-danger" type="submit" value="Eliminar">
</form>
            </div>
            <form method="post" action="/productos/{{$producto -> id}}" >
            <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Nombre del producto:</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre del producto"  name="Nombre">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Contenido:</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Contenido del producto" name="Contenido">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Precio:</label>
      <input type="number" class="form-control" id="inputPassword4" placeholder="Precio del producto"  name="Precio">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-12">
      <label for="inputPassword4">Descripcion:</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Descripcion del Producto" name="Descripcion" style="WIDTH: 1092px; HEIGHT: 98px">
    </div>
    
  </div>
    {{csrf_field()}}
    <br>
    <input type="hidden" name="_method" value="PUT">
    <input class="btn btn-dark" type="submit" value="Editar Producto" name="Enviar" >
</form>


        </main>

@endsection