@extends("layouts.plantilla")

@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Informacion Producto</h2>
              
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-sm text-center">
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Contenido</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                   
                            <tr>
                            <td>{{$producto -> Nombre}}</td>
                            <td>{{$producto -> Descripcion}}</td>
                            <td>{{$producto -> Precio}}</td>
                            <td>{{$producto -> Contenido}}</td>
                           
                            </tr>
               
                    </tbody>
                </table>
            </div>
        </main>
@endsection