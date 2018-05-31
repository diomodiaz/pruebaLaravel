<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function index (){
        $productos = Producto::all();
    return view('producto.show',['Productos'=>$productos]);
    }

    public function store (Request $request){
        $nuevoProducto = new Producto;
        $nuevoProducto->nombre=$request->Nombre;
        $nuevoProducto->valorUnitario=$request->ValorUnidad;
        $nuevoProducto->codigo=$request->Codigo;

        $nuevoProducto->save();
        return redirect('productos');
    }

    public function create (){
        
    }

    public function update ($Producto, Request $request){
        
        $ObjProducto = Producto::findOrFail($Producto);
        $ObjProducto->nombre=$request->Nombre;
        $ObjProducto->valorUnitario=$request->ValorUnidad;
        $ObjProducto->codigo=$request->Codigo;

        $ObjProducto->save();
        return redirect('productos');
    }

    public function show (){
        
    }

    public function destroy ($Producto){
        $producto = Producto::find($Producto);
        $producto->delete();
        return redirect('productos');
    }

    public function edit ($Producto){
        $datoProducto = Producto::findOrFail($Producto);
        return view('producto.edit',['datoProducto'=>$datoProducto]);
    }
}
