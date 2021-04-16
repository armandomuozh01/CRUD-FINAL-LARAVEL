

@extends("layouts.plantilla")

@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Informacion Empleado</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-sm text-center">
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        </tr>
                    </thead>
                    <tr>
                <td>{{$empleado -> nombre}}</td>
                <td>{{$empleado -> apellido_paterno}}</td>
                <td>{{$empleado -> apellido_materno}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
@endsection
