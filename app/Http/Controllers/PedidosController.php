<?php

namespace App\Http\Controllers;

use App\pedidos;
use App\productos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
        $query= trim($request->get('search'));         
        $pedidos['pedi'] =pedidos::where('id','LIKE','%'.$query.'%')->get(); 
        return view('pedidos', $pedidos);
        }else{

 $pedidos['pedi'] = pedidos::get();
 return view('pedidos', $pedidos);
        }
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos= productos::get();
        $alerta = false;
        return view('create-pedido', ['prod' => $productos, 'alert' => $alerta]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $CreatePedido = request()->except('_token');
        if($request->hasFile('cedula')){
            $CreatePedido['cedula'] = $request->file('cedula')->store('uploads','public'); 
        }
        pedidos::insert($CreatePedido);
        $productos  = productos::get();
        $alerta = true;
        return view('create-pedido', ['prod' => $productos, 'alert' => $alerta]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(pedidos $pedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedidos $pedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedidos $pedidos)
    {
        //
    }
}
