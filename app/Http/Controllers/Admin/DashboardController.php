<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function user()
    {
        return view('user.dashboard');
    }
    public function supplier()
    {
        return view('supplier.dashboard');
    }
   
}
