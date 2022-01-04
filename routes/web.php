<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormValidation;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkilledWorkerController;
use App\Models\ApplicationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
Route::view('about-us', 'about-us')->name('about-us');
Route::view('services', 'services')->name('services');
Route::view('personal-immigration', 'personal-immigration')->name('personal-immigration');
Route::view('business-immigration', 'business-immigration')->name('business-immigration');
Route::view('about-us-detail', 'about-us-detail')->name('about-us-detail');
Route::view('our-team', 'our-team')->name('our-team');
Route::view('canada', 'canada')->name('canada');
Route::view('united-states', 'united-states')->name('united-states');
Route::get('view-application/{id}', function ($id) {
    $form = ApplicationForm::find($id);
    if ($form->user_id == Auth::user()->id) {
        return view('view-application', ['data' => $form]);
    } else {
        return redirect(route('dashboard'));
    }
})->name('view-application')->middleware(['auth']);
Route::get('/dashboard', function () {
    $rows = ApplicationForm::where('user_id', Auth::user()->id)->get();
    return view('dashboard', ['rows' => $rows]);
})->middleware(['auth'])->name('dashboard');
Route::get('download-resume/{id}', function ($id) {
    $af = ApplicationForm::find($id);
    if ($af->user_id == Auth::user()->id && $af->typable->resume_uri) {
        $extension = pathinfo(storage_path($af->typable->resume_uri), PATHINFO_EXTENSION);
        return Storage::download($af->typable->resume_uri, $af->application_id . '.' . $extension);
    }
})->name('download-resume')->middleware(['auth']);
Route::view('skilled-worker-assessment-2', 'skilled-worker-assessment-2')->name('skilled-worker-assessment-2')->middleware('auth');
require __DIR__ . '/auth.php';

Route::prefix('admin')->name('admin.')->middleware('guest:admin')->group(function () {
    Route::view('login', 'admin.login')->name('login');
    Route::post('login', [AdminController::class, 'login'])->name('login');
});

Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', function () {
        $rows = ApplicationForm::paginate(20);
        return view('admin.dashboard', ['rows' => $rows]);
    })->name('dashboard');
    Route::post('logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('view-application/{id}', function ($id) {
        $form = ApplicationForm::find($id);
        return view('admin.view-application', ['data' => $form]);
    })->name('view-application');
    Route::post('change-status/{id}', function (Request $request, $id) {
        $form = ApplicationForm::find($id);
        $form->status = $request->status;
        $form->save();
        return redirect(route('admin.view-application', $id))->with('success', 'Status updated!');
    })->name('change-status');
});
