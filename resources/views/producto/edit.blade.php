@extends('layouts.app')

@section('content')
<form action="" method="post">
    {{csrf_field()}}
    <label for="nombre">Nombre: </label><br>
        <input type="text" value="{{$datoProducto['nombre']}}" require="" placeholder="Nombre Producto"><br>
    <label for="nombre">Valor Unitario: </label><br>
        <input type="text" value="{{$datoProducto['valorUnitario']}}" require="" placeholder="Valor Unidad"><br>
    <label for="nombre">Codigo Producto: </label><br>
        <input type="text" value="{{$datoProducto['codigo']}}" placeholder="Codigo del producto"><br><br>
    <button type="submit">Registrar</button>
</form>
@endsection