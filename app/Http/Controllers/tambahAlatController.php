<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Route;
use Illuminate\Http\Request;

class tambahAlatController extends Controller
{
    public function index()
    {
        return view('tambahAlat');
    }
    public function store(Request $request){
        $this->validate(request(), [
            'kode_alat' => 'required',
        ]);
        $user = Alat::create(request(['kode_alat']));
        return redirect('/tambah-route');
    }
}
