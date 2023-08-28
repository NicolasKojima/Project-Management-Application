<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\IndivController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\TestimgController;
use App\Http\Controllers\EventController;


Route::middleware(['auth'])->group(function () {
    
    
    Route::get('post-project', [FormController::class, 'index']);
    Route::post('store-form', [FormController::class, 'store']);
    
    Route::get('registration', [IndivController::class, 'index']);
    Route::post('store-form1', [IndivController::class, 'store']);

    Route::get('testimg-upload', [TestimgController::class, 'index']);
    Route::post('store-form2', [TestimgController::class, 'store1']);
    Route::get('/dash', [TestimgController::class, 'indexdash'])->name('dash');
    
    Route::get('/projects', [FormController::class, 'index1'])->name('projects');
    Route::get('/about-us', [AboutusController::class, 'index'])->name('about-us');
    Route::get('/contact-form', [ContactformController::class, 'index'])->name('contact-form');
    
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

    
    Route::get('/register-events', function () {
        return view('/register-events');
    });
    Route::get('/calendar-events', [CalenderController::class, 'event_reg']);
    Route::post('/calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);

    Route::get('display-events', [EventController::class, 'displayEvents'])->name('display-events');



Route::get('/', function () {
    return view('welcome');
});
});