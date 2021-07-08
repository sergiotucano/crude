<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChartSalesController extends Controller
{
    public static function create()
    {
                
        $orders = Sale::with('produto')
            ->whereRaw('MONTH(date) = MONTH(NOW())')
            ->groupBy('product')
            ->orderBy('quantity', 'desc')
            ->take(5)                
            ->get();

        return view('welcome',['orders' => $orders]);   

    }
}
