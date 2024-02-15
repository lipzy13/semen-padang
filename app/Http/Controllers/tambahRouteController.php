<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Route;
use Illuminate\Http\Request;

class tambahRouteController extends Controller
{
    public function index()
    {
        return view('tambahRoute');
    }
    public function store(Request $request){
        $this->validate(request(), [
            'nama_route' => 'required',
        ]);
        $user = Route::create(request(['nama_route']));
        return redirect('/tambah-route');
    }
}
