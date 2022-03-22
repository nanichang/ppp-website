<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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

Route::get('/',[PagesController::class, 'home'])->name('pages.home');
Route::get('/what-we-do', [PagesController::class, 'about'])->name('pages.about');

Route::get('/board', [PagesController::class, 'board'])->name('pages.board');
Route::get('/management', [PagesController::class, 'management'])->name('pages.management');
Route::get('/discover-plateau', [PagesController::class, 'discover'])->name('pages.discover');
Route::get('/projects', [PagesController::class, 'project'])->name('pages.project');
Route::get('/publications', [PagesController::class, 'publications'])->name('pages.publications');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('pages.contact');