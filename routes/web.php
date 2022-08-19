<?php

use App\Http\Controllers\ListItemController;
use App\Models\ListItem;
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

Route::get('/', [ListItemController::class, 'index']);
Route::post('/saveItem', [ListItemController::class, 'saveItem'])->name('saveItem');
Route::post('/markComplete/{id}', [ListItemController::class, 'markComplete'])->name('markComplete');
