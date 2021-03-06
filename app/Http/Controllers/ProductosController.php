<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::all();
        return view("productos.index",compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return view('productos.insert');
        $producto = new Producto;
        $producto->NombreArticulo=$request->NombreArticulo;
        $producto->Seccion=$request->SeccionArticulo;
        $producto->Precio = $request->PrecioArticulo;
        $producto->Fecha=$request->FechaArticulo;
        $producto->PaisOrigen=$request->PaisOrigen;
        $producto = $producto->save();

        if($producto==1){
            //return view('productos.create');
            return redirect("/productos");
        }
        else{
            return "No se pudo insertar correctamente";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view('productos.show',compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view('productos.edit',compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       
        $producto = Producto::findOrFail($id);
        $producto = $producto->update($request->all());
        /*$producto->NombreArticulo=$request->NombreArticulo;
        $producto->Seccion=$request->Seccion;
        $producto->Precio=$request->Precio;
        $producto->Fecha=$request->Fecha;
        $producto->PaisOrigen=$request->PaisOrigen;
        $producto->save();*/
         return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect("/productos");
        //return view('productos.delete');
    }
}
