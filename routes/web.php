<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form'); // ✅ tambahkan name
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');