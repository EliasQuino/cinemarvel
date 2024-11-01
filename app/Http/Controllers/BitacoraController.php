<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BitacoraController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('bitacora');

        // Filtrar por IP si se proporciona
        if ($request->has('ip_address') && $request->ip_address) {
            $query->where('ip_address', $request->ip_address);
        }

        $logs = $query->orderBy('fecha_hora', 'desc')->paginate(10);

        return view('admin.bitacora', compact('logs'));
    }
}