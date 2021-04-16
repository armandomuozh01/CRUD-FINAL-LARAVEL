<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD-ARMANDO</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link"  href="{{route('productos.index')}}">
                         Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="{{route('empleados.index')}}">
                           Vendedores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="{{route('clientes.index')}}">
                           Clientes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="{{route('pedidos.index')}}">
                         Pedidos
                        </a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link"  href="{{route('pedidos.create')}}">
                        Agregar un pedido
                        </a>                       
                    </li>
                </ul>
            </div>
        </nav>

     
    </div>
</div>
@yield('nav')
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>