<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Mail\MailableName;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['role:admin']], function () {
	Route::get('/admin2', function(){
		return view('adminView');
	});
});

Route::group(['middleware' => ['role:regular']], function () {
	Route::get('/regular', function(){
		return view('normalView');
	});
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/testroute', function() {
	$name = "Funny Coder";
    // The email sending is done using the to method on the Mail facade
    Mail::to('michelefmedeiros@gmail.com')->send(new MailableName($name));
});

Route::resource('products', 'App\Http\Controllers\ProductController');

require __DIR__.'/auth.php';
