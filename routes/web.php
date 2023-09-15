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
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;




Route::middleware(['auth'])->group(function () {
    
    
    Route::middleware(['permission:product-create'])->group(function () {
    Route::get('products/create', 'ProductController@create')->name('products.create');
    Route::post('products', 'ProductController@store')->name('products.store');
    });
    
    Route::get('post-project', [ProductController::class, 'form']);
    Route::post('post-project', [ProductController::class, 'store1']);
    
    Route::get('registration', [IndivController::class, 'index']);
    Route::post('store-form1', [IndivController::class, 'store']);

    Route::get('testimg-upload', [TestimgController::class, 'index']);
    Route::post('store-form2', [TestimgController::class, 'store1']);
    Route::get('/dash', [TestimgController::class, 'indexdash'])->name('dash');
    
    Route::get('/projects', [ProductController::class, 'index1'])->name('projects');
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

     Route::get('/permissions', function () {
        return view('permissions');
    })->name('permissions');
    
    
    Route::get('employees', App\Http\Livewire\Crud::class);

    Route::get('/register-events', function () {
        return view('register-events');
    });
    Route::get('calendar-event', [CalenderController::class, 'index']);
    
    Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);

    Route::get('/calendar-events', [CalenderController::class, 'getCalendarEvents'])->name('calendar-events');



    
    Route::get('display-events', [EventController::class, 'displayEvents1'])->name('display-events');
    Route::get('register-events', [EventController::class, 'registerEvents'])->name('register-events');


    Route::get('/permissions', [TestimgController::class, 'permissions'])->name('permissions');

    Route::get('dashboard', [EventController::class, 'dashboard'])->name('dashboard');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    
    Route::redirect('/', '/dashboard');
});
Auth::routes();

Route::get('/permissions', [App\Http\Controllers\HomeController::class, 'index'])->name('permissions');
