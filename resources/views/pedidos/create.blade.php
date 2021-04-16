@extends("../layouts/plantilla")
@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Nuevo pedido</h2>
            </div>
            <form method="post" action="/pedidos" >
            <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Id del cliente:</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="Numero de cliente"  name="cliente_id">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Id del vendedor:</label>
      <input type="number" class="form-control" id="inputPassword4" placeholder="Id de vendedor" name="vendedor_id">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Id del producto:</label>
      <input type="number" class="form-control" id="inputPassword4" placeholder="Codigo del vendedor" name="codigo_producto">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Catidad:</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="Cantidad de Producto"  name="cantidad">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Fecha:</label>
      <input type="date" class="form-control" id="inputPassword4" placeholder="Fecha del Pedido"  name="fechapedido">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Fecha de envio:</label>
      <input type="date" class="form-control" id="inputPassword4" placeholder="Fecha de envio" name="fechaenvio">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Estado:</label>
      <select class="form-control" id="exampleFormControlSelect1" name="estadopedido">
      <option value="Pendiente">Pendiente</option>
      <option value="Entregado">Entregado</option>
      <option value="Cancelado">Cancelado</option>
    </select>
    </div>
  </div>
   
  
    {{csrf_field()}}
    <input class="btn btn-dark" type="submit" value="Crear Pedido" name="Enviar">
</form>
        </main>

@endsection