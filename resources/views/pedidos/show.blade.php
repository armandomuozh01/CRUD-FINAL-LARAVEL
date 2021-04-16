@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")
<table border="1">
<tr>
<td>Nombre</td>
<td>Descripcion</td>
<td>Precio</td>
<td>Contenido</td>
<td>Acciones</td>
</tr>
<tr>
<td>{{$producto -> Nombre}}</td>
<td>{{$producto -> Descripcion}}</td>
<td>{{$producto -> Precio}}</td>
<td>{{$producto -> Contenido}}</td>
<td>
<a href="{{route('productos.edit', $producto-> id)}}">Editar</a>
<a href="{{route('productos.destroy', $producto-> id)}}">Eliminar</a>
</td>
</tr>
</table>
@section("pie")