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

    public function update (){
        
    }

    public function show (){
        
    }

    public function destroy (){
        
    }

    public function edit (){
        
    }
}
