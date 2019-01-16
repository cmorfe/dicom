<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function empresa()
    {
        return view('empresa');
    }

    public function productos()
    {
        return view('productos');
    }

    public function presupuestos()
    {
        return view('presupuestos');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
