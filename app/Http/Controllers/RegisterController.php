<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registrasi');
    }

    public function register(Request $request){

        $this->validate(request(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'nip' => 'required'
        ]);

        $user = User::create(request(['username', 'email', 'password', 'nip']));
        return redirect(route('login'));
    }
}
