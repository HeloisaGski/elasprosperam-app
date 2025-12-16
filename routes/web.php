<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController; 
use App\Http\Controllers\TestimonialController;



Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about.us', [SiteController::class, 'aboutUs'])->name('about.us');
Route::get('/journey', [SiteController::class, 'journey'])->name('journey');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/testimonials', [SiteController::class, 'testimonials'])->name('testimonials');

Route::get('/eventos', [SiteController::class, 'events'])->name('events.list');


/*
|--------------------------------------------------------------------------
| Rotas Administrativas (Protegidas por Login)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //TESTEMUNHAS
    Route::resource('admin/testimonials', TestimonialController::class);
    
    Route::resource('admin/events', EventController::class)->names([
        'index'   => 'events.index',
        'create'  => 'events.create',
        'store'   => 'events.store',
        'edit'    => 'events.edit',
        'update'  => 'events.update',
        'destroy' => 'events.destroy',
    ]);
});


require __DIR__.'/auth.php';