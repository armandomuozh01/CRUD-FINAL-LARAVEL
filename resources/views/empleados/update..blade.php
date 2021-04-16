@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")
<form action="" method="post">
    <label>Nombre del producto:</label>
    <input type="text" name="Nombre">
    <br>
    <label>Descripcion del producto:</label>
    <input type="text" name="Descripcion">
    <br>
    <label>Precio del producto:</label>
    <input type="text" name="Precio">
    <br>
    <label>Contenido del producto:</label>
    <input type="text" name="Contenido">
    <br>
    <br>
    <input type="submit" value="Enviar" name="Enviar">
</form>
@section("pie")