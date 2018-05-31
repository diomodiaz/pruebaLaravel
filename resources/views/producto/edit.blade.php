@extends('layouts.app')

@section('content')
<form action="{{url('productos/'.$datoProducto['id'])}}" method="post">
<input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
    <label for="nombre">Nombre: </label><br>
        <input type="text" value="{{$datoProducto['nombre']}}" name="Nombre" require="" placeholder="Nombre Producto"><br>
    <label for="nombre">Valor Unitario: </label><br>
        <input type="text" value="{{$datoProducto['valorUnitario']}}" name="ValorUnidad" require="" placeholder="Valor Unidad"><br>
    <label for="nombre">Codigo Producto: </label><br>
        <input type="text" value="{{$datoProducto['codigo']}}" name="Codigo" placeholder="Codigo del producto"><br><br>
    <button type="submit">Registrar</button>
</form>
@endsection