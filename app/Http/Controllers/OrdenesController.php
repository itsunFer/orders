<?php

namespace App\Http\Controllers;

use App\Models\Ordenes;
use Illuminate\Http\Request;

class OrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Ordenes::get();
        return view('orders.index', compact('orders')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Ordenes();
        $order->Description = $request ->description;
        $order->Amount = $request ->amount;
        $order->Date = $request -> due;
        $order ->Due = $request -> due;
        $order->save();

        return redirect('/orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return \Illuminate\Http\Response
     */
    public function show(Ordenes $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return \Illuminate\Http\Response
     */
    public function edit(Ordenes $ordenes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ordenes  $ordenes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordenes $ordenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ordenes $ordenes)
    {
        //
    }
}
