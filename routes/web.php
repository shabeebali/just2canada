<?php

use App\Http\Controllers\FormValidation;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkilledWorkerController;
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
    return view('welcome');
})->name('home');
Route::view('obtain-free-assessment', 'obtain_free_assessment')->name('obtain-free-assessment');
Route::post('contact-form', [HomeController::class, 'submitCallbackForm'])->name('callback.form.submit');
Route::view('cb-thank', 'callback_form_thank')->name('cb.thank');
Route::view('cb-error', 'callback_form_error')->name('cb.error');
Route::view('skilled-worker-assessment', 'skilled_worker_assessment')->name('skilled-worker-assessment');
Route::post('skilled-worker-form-valdation-1', [FormValidation::class, 'skilledWorkerFormValidation1'])->name('skilled-worker-form-validation-1');
Route::post('skilled-worker-form-valdation-2', [FormValidation::class, 'skilledWorkerFormValidation2'])->name('skilled-worker-form-validation-2');
Route::post('skilled-worker-form-valdation-3', [FormValidation::class, 'skilledWorkerFormValidation3'])->name('skilled-worker-form-validation-3');
Route::post('skilled-worker-form-valdation-4', [FormValidation::class, 'skilledWorkerFormValidation4'])->name('skilled-worker-form-validation-4');
Route::post('skilled-worker-form-submit', [SkilledWorkerController::class, 'submit'])->name('skilled-worker-form-submit');
Route::view('skilled-worker-thank', 'skilled-worker-thank')->name('skilled-worker-thank');
