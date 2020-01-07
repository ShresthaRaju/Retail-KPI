<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showBottomLineDashboard(Request $request)
    {
        return view('dashboards.bottom-line');
    }
    
    public function showProfitSalesDashboard()
    {
        return view('dashboards.profit-sales');
    }

    public function showProductsDashboard()
    {
        return view('dashboards.products');
    }
}
