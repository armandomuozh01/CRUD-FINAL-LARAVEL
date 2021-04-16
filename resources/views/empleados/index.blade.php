@extends("layouts.plantilla")

@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Vendedores</h2>
            </div>
            
            <div class="table-responsive">
                <table class="table table-dark table-sm text-center">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($empleados as $empleados )
                            <tr>
                            <td>{{$empleados-> id}}</td>
                            <td>{{$empleados -> nombre}}</td>
                            <td>{{$empleados -> apellido_paterno}}</td>
                            <td>{{$empleados -> apellido_materno}}</td>
    
                            <td>
                            <a href="{{route('empleados.edit', $empleados-> id)}}"><strong>Editar</strong> </a>
                             </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2></h2>
                <a class="btn btn-dark"  href="{{route('empleados.create')}}"> Añadir nuevo vendedor</a>
            </div>
        </main>
@endsection





