<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Route;

class basicMaintenanceController extends Controller
{
    public function index()
    {
        $area = Area::all();
        $route = Route::all();
        return view('basicMaintenance', [
            "area"=>$area,
            "route"=>$route
        ]);
    }
}
