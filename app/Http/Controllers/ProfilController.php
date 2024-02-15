<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil');
    }

    public function save(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $this->validate(request(), [
            'no_hp' => 'required',
            'email' => 'required',
        ]);
        $user->update([
            'no_hp' => $request['no_hp'],
            'email' => $request['email'],
        ]);
        return redirect()->back();
    }
}
