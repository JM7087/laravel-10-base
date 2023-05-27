<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\TesteVueController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('teste', function () {
    return response('Olá mundo');
});

Route::get('somar/{n1}/{n2}', function ($n1, $n2) {
    $r = $n1 + $n2;
    return response($r);
});

Route::get('somarV2/{n1}/{n2}', function ($n1, $n2) {
    return $n1 + $n2;
});

Route::get('/testeVue', [TesteVueController::class, 'view']);



Route::delete('supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
Route::put('supports/{id}', [SupportController::class, 'update'])->name('supports.update');
Route::get('supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::get('supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('supports/{id}', [SupportController::class, 'show'])->name('supports.show');
Route::post('supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('contato', [SiteController::class, 'contact']);
