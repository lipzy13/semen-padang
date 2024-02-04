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
            'password' => 'required',
            'nip' => 'required|unique:users,nip'
        ]);

        $user = User::create(request(['username', 'password', 'nip']));
        return redirect(route('login'));
    }
}
