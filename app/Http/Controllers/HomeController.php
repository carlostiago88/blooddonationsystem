<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('campanhas');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function campanhas()
    {
        $campanhas = DB::table('campanhas')->orderBy('nome', 'asc')->get();

        return view('campanhas', [
            'campanhas' => $campanhas,
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function hospitais()
    {
        $hospitais = DB::table('hospitais')->orderBy('nome', 'asc')->get();

        return view('hospitais', [
            'hospitais' => $hospitais,
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function laboratorios()
    {
        $laboratorios = DB::table('laboratorios')->orderBy('nome', 'asc')->get();

        return view('laboratorios', [
            'laboratorios' => $laboratorios,
        ]);
    }

}
