<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function ecommerce()
    {
        return view('admin.dashboard.ecommerce');
    }
    public function analytics()
    {
        return view('admin.dashboard.analytics');
    }
}

