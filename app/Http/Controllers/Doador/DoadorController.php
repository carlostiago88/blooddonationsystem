<?php

namespace App\Http\Controllers\Doador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

class DoadorController extends Controller
{

    protected $model;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        return view('doador.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->user()->id;
        //dd($id);
        return view('doador.create')->with([
            'user_id' => $id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, \App\Doador $doador)
    {
        $this->model = $doador;
        $result = $this->model->updateOrCreate($request->all()->except('_token'));

        //create($request->all());
        return redirect()->route('doador.agendar')
            ->with('success', 'Seu cadastro foi atualizado com sucesso! Aproveite e agende sua doação.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
