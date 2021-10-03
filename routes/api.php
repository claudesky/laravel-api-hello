<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\MetadataController;
use App\Http\Controllers\GmoSiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

// Hello World
Route::get('hello', function() {
    return response()
        ->json([
            'message' => 'hello world',
        ]);
})
    ->name('hello');

// 404 catchall
Route::any('{any?}', function () {
    return response()->noContent(404);
})->where('any', '.*');
