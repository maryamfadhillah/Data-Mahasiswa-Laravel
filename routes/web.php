<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Models\Profil_NIM;
/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|--------------------
*/

Route::get('/', 'Dashboard@index');
Route::get('/{id}/delete', 'Dashboard@delete');
Route::get('/{id}/edit', 'Dashboard@edit');
Route::get('/{id}/store', 'Dashboard@store');
Route::post('/{id}/update', 'Dashboard@update');