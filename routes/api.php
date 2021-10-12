<?php

use App\Http\Controllers\Tickets\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(
	[
		// TODO: add 'middlware' => '',
		'prefix' => 'tickets', 'as' => 'tickets.'
	], function () {
		Route::get('/', [TicketController::class, 'index'])->name('index');
		Route::post('store', [TicketController::class, 'create'])->name('create');
		Route::get('{ticket}', [TicketController::class, 'read'])->name('read');
		Route::post('{ticket}', [TicketController::class, 'update'])->name('update');
		Route::delete('{ticket}', [TicketController::class, 'destroy'])->name('destroy');
});
