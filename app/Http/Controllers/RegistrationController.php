<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('auth.registration',[
            'title' => 'Registrasi',
            'bodyclass' => 'login'
        ]);
    }
    public function create(Request $request){
        $request->validate([
            'name' => 'required|max=255',
            'nik' => 'required|min=9|max=50|unique:users',
            'password' => 'required|min=8|max=100'
        ]);
    }
}
