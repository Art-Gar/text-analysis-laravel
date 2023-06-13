<?php

use App\Models\kn_zodziai;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Models\kn_tekstas_eil;
use App\Http\Controllers\LexemeController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\WordController;

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

Route::get('/zodziai', [WordController::class, 'getAll'] )->name('zodziai');
Route::get('zodziai.getWords', [WordController::class, 'getWords'] )->name('zodziai.getWords');
Route::get('zodziai.search', [WordController::class, 'searchWords'] )->name('zodziai.search');
Route::get('/leksemos', [LexemeController::class, 'getAll'] );
Route::get('leksemos.getLexemes', [LexemeController::class, 'getLexemes'] ) ->name('leksemos.getLexemes');
Route::get('leksemos.search', [LexemeController::class, 'searchLexemes'] )->name('leksemos.search');

Route::get('/', [ReadingController::class, 'getAll']);
Route::post('/', [ReadingController::class, 'searchScope']);

Route::get('/skaitymas2', function () {
    $lines = kn_tekstas_eil::all();
    $grouped= $lines->groupBy('puslapis');
//    error_log($grouped->all()[0][2]['eilutes']);
    return view('skaitymasTemp', [
        'heading' => 'zodziai',
            'lines' => $grouped->all()
    ]);
});
//Route::get('/skaitymas/search', [ReadingController::class, 'search']);

