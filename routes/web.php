<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/Coba', function () {
    return view('dashboard.index');
});

Route::get('/Home', function() {
    return view('homepage.index');
});

Route::get('/About', [AboutController::class, 'AboutPage'])->name('about');

Route::get('/Contact', [AboutController::class, 'ContactPage'])->name('contact');

Route::get('/Service', [AboutController::class, 'ServicePage'])->name('service');
