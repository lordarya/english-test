<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // var_dump($data);
        if (Auth::user()->hasRole('admin')) {
            return redirect()->route('pesertas.index');
        } elseif (Auth::user()->hasRole('peserta')) {
            return redirect()->route('dashboard.index');
        }

        // echo Auth::user()->hasRole('admin');

        // return redirect()->route('pesertas.index');

    }
}
