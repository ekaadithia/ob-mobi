<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardLokerController extends Controller
{
    public function index()
    {
        return view('partials.dashboard1', [
            'title' => 'Registrasi',
            'bodyclass' => 'py-5'
        ]);
    }
}
