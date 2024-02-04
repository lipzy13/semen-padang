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
            'tanggal' => 'required',
            'alat_id' => 'required',
            'abnormalitas' => 'required',
            'action' => 'required',
            'konidis' => 'bool'
        ]);
        $user = workOrder::create(request(['tanggal', 'alat_id', 'abnormalitas', 'action', 'kondisi']));
        return redirect('/work-order');
    }
}
