<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/search', function(Request $request){
    $searchTerm = $request->search;
    $products =  Product::where('title', 'like', '%'.$searchTerm.'%')->get();
    return response()->json($products);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
