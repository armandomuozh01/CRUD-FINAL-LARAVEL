@extends("layouts.plantilla")

@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 style="text-align: center; position:center;">Todos los productos</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-sm text-center">
                    <thead>
                        <tr>
                        <th>Id del producto</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Contenido</th>
                        <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($producto as $producto )
                            <tr>
                            <td>{{$producto-> id}}</td>
                            <td>{{$producto -> Nombre}}</td>
                            <td>{{$producto -> Descripcion}}</td>
                            <td>{{$producto -> Precio}}</td>
                            <td>{{$producto -> Contenido}}</td>
                            <td>
                            <a href="{{route('productos.edit', $producto-> id)}}"><strong>Editar</strong> </a>
                            
                             </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2></h2>
                <a class="btn btn-dark"  href="{{route('productos.create')}}"> Añadir un producto</a>
            </div>
        </main>
@endsection





