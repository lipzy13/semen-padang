<?php

namespace App\Http\Controllers;

use App\Exports\BasicMaintenanceExport;
use Maatwebsite\Excel\Facades\Excel;

class basicMaintenanceController extends Controller
{
    public function index()
    {

        return view('basicMaintenance');
    }

    public function export()
    {
        return Excel::download(new BasicMaintenanceExport, 'tes.xlsx');
    }
}
