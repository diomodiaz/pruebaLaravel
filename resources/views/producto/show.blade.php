@extends('layouts.app')

@section('content')
<table border="1">
  <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Valor Unidario</th>
            <th>Codigo</th>
        </tr>
    </thead>

  <tbody>
       @foreach($Productos as $Producto)
            <tr>
                <td>{{$Producto['id']}}</td>
                <td>{{$Producto['nombre']}}</td>     
                <td>{{$Producto['valorUnitario']}}</td>
                <td>{{$Producto['codigo']}}</td>
            </tr>
       @endforeach
  </tbody>
</table><br><br>

<form action="{{url('productos')}}" method="post">
    {{csrf_field()}}
    <label for="nombre">Nombre: </label><br>
        <input type="text" name="Nombre" id="nombre" require="" placeholder="Nombre Producto"><br>
    <label for="nombre">Valor Unitario: </label><br>
        <input type="text" name="ValorUnidad" id="valorUnidad" require="" placeholder="Valor Unidad"><br>
    <label for="nombre">Codigo Producto: </label><br>
        <input type="text" name="Codigo" id="codigo" require="" placeholder="Codigo del producto"><br><br>
    <button type="submit">Registrar</button>
</form>

@endsection