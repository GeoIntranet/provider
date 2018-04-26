<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Fournisseur;
use App\marques;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fournisseurs')
            ->with('fournisseurs',Fournisseur::all())
            ;
    }

    public function action()
    {
        return view('home')
            ->with('marques',marques::all())
            ->with('categories',Categories::all())
            ;
    }
}
