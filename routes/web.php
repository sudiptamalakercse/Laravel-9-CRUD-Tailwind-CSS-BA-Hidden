<?php

use App\Http\Controllers\TaskController;
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
    return to_route('tasks.index');
});

Route::get('/dashboard', function () {

    return to_route('tasks.index');

})->name('dashboard');

Route::resource('tasks', TaskController::class);

require __DIR__ . '/auth.php';
