<?php

namespace App\Http\Controllers;

use App\Regalo;
use Illuminate\Http\Request;

class RegaloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Se consulta los datos */
        $regalos = Regalo::paginate(5);

        /* Se carga la vista */
        return view('/Regalo', [
            'regalos' => $regalos
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Regalo  $regalo
     * @return \Illuminate\Http\Response
     */
    public function show(Regalo $regalo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regalo  $regalo
     * @return \Illuminate\Http\Response
     */
    public function edit(Regalo $regalo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regalo  $regalo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regalo $regalo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regalo  $regalo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regalo $regalo)
    {
        //
    }
}
