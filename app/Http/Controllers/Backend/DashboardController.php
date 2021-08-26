<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // display the dashboard page
    public function index(){
        return view('backend.pages.dashboard.index');
    }
}
