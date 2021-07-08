<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ChartSalesController;

Route::get('/', [ChartSalesController::class, 'create']);
Route::resource('products', ProductController::class);
Route::get("import", [SaleController::class, "importSales"]);
Route::post("import", [SaleController::class, "import"])->name('import');


