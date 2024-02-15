<?php

namespace App\Http\Controllers;

use App\Exports\workOrderExport;
use App\Models\User;
use App\Models\workOrder;
use App\Notifications\workOrderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

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

        $users = User::find(auth()->user()->id);
        $users->notify(new workOrderNotification());
        return redirect('/work-order');
    }

    public function delete()
    {
        if(workOrder::exists()){
            DB::table('work_orders')->delete();
        }
        return back();
    }
    public function export()
    {
        return Excel::download(new workOrderExport, 'work-order.xlsx');
    }
}
