<?php

namespace App\Http\Controllers;

use App\Exports\BasicMaintenanceExport;
use App\Models\basicMaintenance;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class basicMaintenanceController extends Controller
{
    public function index()
    {

        return view('basicMaintenance');
    }

    public function delete()
    {
        if(basicMaintenance::exists()){
            DB::table('basic_maintenances')->delete();
        }
        return back();
    }
    public function export()
    {
        return Excel::download(new BasicMaintenanceExport, 'basic_maintenance.xlsx');
    }

}
