<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Recuperar todos los clientes presenciales
       // $usuarios = ClientePresencial::all();

        // Pasar los datos a la vista
        return view('admin.index', compact('usuarios'));
    }}
