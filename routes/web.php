<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\IndivController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\CalenderController;


Route::middleware(['auth'])->group(function () {
    Route::get('/contact-form', [ContactformController::class, 'index']);
    Route::get('/about-us', [AboutusController::class, 'index']);
    
    Route::get('post-project', [FormController::class, 'index']);
    Route::post('store-form', [FormController::class, 'store']);
    
    Route::get('registration', [IndivController::class, 'index']);
    Route::post('store-form1', [IndivController::class, 'store']);
    
    Route::get('/projects', [FormController::class, 'index1'])->name('projects');
    
    Route::get('/forms/edit/{id}', [DatabaseController::class, 'edit']);
    Route::post('/forms/update/{id}', [DatabaseController::class, 'update']);
    Route::get('/forms/edit/{id}', [DatabaseController::class, 'edit'])->name('edit');
    Route::post('/forms/update/{id}', [DatabaseController::class, 'update'])->name('update');
    
    Route::post('/forms/{id}', [FormController::class, 'delete'])->name('delete');
    Route::post('/indiv/{id}', [FormController::class, 'delete'])->name('delete');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('employees', App\Http\Livewire\Crud::class);
    Route::get('calendar-event', [CalenderController::class, 'index']);
    Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);
});

Route::get('/', function () {
    return view('welcome');
});
