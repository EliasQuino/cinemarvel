<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ClienteVirtualController;


class RedirectController extends Controller
{
    //
    public function redirectTo()
    {
        return '/clienteVirtual.create';
    }
}
