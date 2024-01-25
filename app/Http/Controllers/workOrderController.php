<?php

namespace App\Http\Controllers;

use App\Models\workOrder;
use Illuminate\Http\Request;

class workOrderController extends Controller
{
    public function index()
    {
        return view('workOrder');
    }

    public function store(Request $request){
        $this->validate(request(), [
            'area_id' => 'required',
            'route_id' => 'required',
            'pic' => 'required',
            'tanggal' => 'required',
            'kode_alat' => 'required',
            'abnormalitas' => 'required',
            'action' => 'required',
            'kondisi' => 'required'
        ]);
        $user = workOrder::create(request(['area_id', 'route_id', 'pic', 'tanggal', 'kode_alat', 'abnormalitas', 'action', 'kondisi']));
        return redirect(route('main'));
    }
}
