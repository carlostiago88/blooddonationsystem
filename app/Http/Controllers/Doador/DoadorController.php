<?php

namespace App\Http\Controllers\Doador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\DoadorImpedimento;

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

        $doador = \App\Doador::where(['user_id' => $id, 'status' => 1])->first();

        $doadorImpedimento = \App\DoadorImpedimento::where(['user_id' => $id, 'status' => 1])->get();

        $impedimentos = DB::table('impedimentos')->where('tipo_impedimento', 'definitivo')->orderBy('nome', 'asc')->get();
        return view('doador.create')->with([
            'user_id' => $id,
            'impedimentos' => $impedimentos,
            'doador' => $doador,
            'doadorImpedimento' => $doadorImpedimento
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

        $id = $request->user()->id;

        $tipos_impedimentos = $request->input('tipo_impedimento');

        $this->model->where([
            'user_id' => $id,
        ])->update(['status' => 0]);

        $result = $this->model->create($request->all());
        if ($tipos_impedimentos == null) {
            return redirect()->route('doador.agendar')
                ->with('success', 'Seu cadastro foi atualizado com sucesso! Você não tem impedimentos definitivos. Aproveite e agende sua doação.');

        } else {
            $this->model->where([
                'user_id' => $id,
                'status' => 1
            ])
                ->update(['aptidao' => 0]);

            DB::table('doador_impedimento')
                ->where('user_id', $id)
                ->update(['status' => 0]);

            foreach ($tipos_impedimentos as $key => $value) {
                DB::table('doador_impedimento')->insert([
                    'user_id' => $id,
                    'impedimento_id' => $key,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ]);
            }
            return redirect()->route('campanhas')
                ->with('error', 'Infelizmente você possui impedimento definitivo para doar. Ajude-nos divulgando as nossas campanhas nas redes sociais.');
        }
    }

    public function avaliar()
    {
        return view('doador.avaliar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
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
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }

}
