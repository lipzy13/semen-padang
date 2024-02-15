<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\workOrder;
use Illuminate\Http\Request;

class tambahAreaController extends Controller
{
    public function index()
    {
        return view('tambahArea');
    }

    public function store(Request $request){
        $this->validate(request(), [
            'nama_area' => 'required',
        ]);
        $user = Area::create(request(['nama_area']));
        return redirect('/tambah-area');
    }
}
