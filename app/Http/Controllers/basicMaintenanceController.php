<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Route;
use App\Models\User;

class basicMaintenanceController extends Controller
{
    public function index()
    {

        return view('basicMaintenance');
    }
}
