<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function credentials()
    {
        return view('admin.credentials');
    }
    public function monitoring()
    {
        return view('admin.monitoring');
    }
    public function reports()
    {
        return view('admin.reports');
    }
}
