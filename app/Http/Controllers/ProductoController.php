<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Se consulta los datos */
        $productos = Producto::paginate(5);

        /* Se carga la vista */
        return view('inventario.index', [
            'productos' => $productos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_prenda' =>  ['required'],
            'estilo'        =>  ['required'],
            'color'         =>  ['required'],
            'talla'         =>  ['required'],
            'descripcion'   =>  ['required'],
        ]);

        Producto::create([
            'nombre_prenda'     => $request->nombre_prenda,
            'estilo'            => $request->estilo,
            'color'             => $request->color,
            'talla'             => $request->talla,
            'descripcion'       => $request->descripcion,
        ]);

        // dd($request->all());

        return back()->with('status', 'Creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Producto::findOrFail($id);
        return view('inventario.edit', [
            'productos' => $productos
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validData = $request->validate([
            'nombre_prenda' =>  ['required'],
            'estilo'        =>  ['required'],
            'color'         =>  ['required'],
            'talla'         =>  ['required'],
            'descripcion'   =>  ['required'],
        ]);

        $producto = Producto::findOrFail($id);
        $producto->nombre_prenda = $validData['nombre_prenda'];
        $producto->estilo = $validData['estilo'];
        $producto->color = $validData['color'];
        $producto->talla = $validData['talla'];
        $producto->descripcion = $validData['descripcion'];
        $producto->save();

        // dd($request->all());

        return redirect('/Inventario')->with('status', 'Actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return back()->with('status', 'Eliminado satisfactoriamente');
    }
}
