<?php

use App\Http\Controllers\FreelancerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/freelancers', [FreelancerController::class, 'store']);
// Route::get('/freelancers', [FreelancerController::class, 'index']);
// Route::get('/freelancers/{id}', [FreelancerController::class, 'show']);
// Route::get('/freelancers/create', [FreelancerController::class, 'create']);

Route::resources(['/freelancers' => FreelancerController::class]);