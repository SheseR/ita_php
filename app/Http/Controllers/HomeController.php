<?php

namespace App\Http\Controllers;

/**
 * Фактично імя класа App\Http\Controllers\HomeController
 */
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
