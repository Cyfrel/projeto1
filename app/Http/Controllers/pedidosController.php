<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pedidos;
use Illuminate\Support\Facades\DB;
use App\Models\clientes;


class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        //$pedidos = DB::select('SELECT id_pedido, valor_frete From pedidos');
        //dd($pedidos);
        $pedidos = pedidos::all();
        //dd($pedidos);

        return view('pedidos.index')->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        
        pedidos::create($request->all());
        return redirect('/listar-pedidos')->with('sucesso','Pedido cadastrado com Sucesso!');
        //dd($request->all());
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return pedidos::findOrFail($id);
        echo "<h1>Visualizar Pedido $id.</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pedidos = pedidos::findOrFail($id);
        $pedidos->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pedidos = pedidos::findOrFail($id);
        $pedidos->delete();
    }
}
