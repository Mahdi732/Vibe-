<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\test;
use Illuminate\Auth\Events\Authenticated;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get("/login" , [AuthenticatedSessionController::class , 'create']);

// Route::get('/vibe', function(Request $request){
//     $ne = '<h1>vibe  BUT not my type but wisssam is exception</h1>';
//     dd($ne);
//     return '<h1>vibe  BUT not my type but wisssam is exception</h1>';
// });

// Route::get('/dark', function(Request $request){
//     return view('dark', [
//         'test' => Test::questoin()
//     ]);
// });

// Route::get('/dark/{id}', function($id) {
//     return view('dark', [
//         'test' => Test::find($id)
//     ]);
// });
 

require __DIR__.'/auth.php';
