<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Productos;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedidos = Pedido::all();
        return view("pedidos.index",compact("pedidos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("pedidos.create");
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
        $pedidos = new Pedido;
        $pedidos -> fechapedido =$request-> fechapedido;
        $pedidos -> estadopedido =$request-> estadopedido;
        $pedidos -> fechaenvio =$request-> fechaenvio;
        $pedidos -> cliente_id =$request-> cliente_id;
        $pedidos -> vendedor_id =$request-> vendedor_id;
        $pedidos -> cantidad =$request-> cantidad;
        $pedidos -> codigo_producto =$request-> codigo_producto;
        $pedidos->save();
        return redirect("/pedidos");
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
        $pedidos = Pedido::findorFail($id);
        return view("pedidos.show", compact("pedidos"));
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
        $pedidos = Pedido::findorFail($id);
        return view("pedidos.edit", compact("pedidos"));
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
        $pedidos = Pedido::findOrFail($id);
        $pedidos->update($request->all());
        return redirect("/pedidos");
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
        $pedidos = Pedido::findOrFail($id);
        $pedidos ->delete();
        return redirect("/pedidos");
    }
    }
