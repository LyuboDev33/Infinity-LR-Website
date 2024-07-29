<?php

use App\Http\Controllers\Assesment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\Auth\RegisteredUserController;



Route::get('/', function () {
    return view('main-page-components.welcome');
});

Route::fallback(function () {
    return redirect('/');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::post('/dashboard/assesment', [AssesmentController::class, 'insert_assessment'])->name('assesment');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/access', [ProfileController::class, 'get_all_users'])->name('get_all_users');
    Route::get('/user/{email}', [ProfileController::class, 'getSpecificUser']);
    Route::post('/access/delete', [ProfileController::class, 'delete_user'])->name('delete_user');
    Route::post('/access/permission', [ProfileController::class, 'give_permission'])->name('give_permission');

    Route::get('/biblioteka', [ProfileController::class, 'get_library']);
    Route::get('/events', [ProfileController::class, 'getEvents'])->name('get_events');
    Route::post('/events/create', [ProfileController::class, 'insert_events'])->name('insert_event');
    Route::post('/events/update', [ProfileController::class, 'update_event'])->name('update_event');


    Route::get('/blog', [BlogController::class, 'all_articles'])->name('theArticles');
    Route::post('/blog', [BlogController::class, 'insert_article'])->name('insert_article');
    Route::post('/blog/delete', [BlogController::class, 'delete_article'])->name('delete_article');
    Route::get('/article/{id}', [BlogController::class, 'get_specific_article'])->name('getSpecificArticle');
    Route::post('/article', [BlogController::class, 'update_specific_article'])->name('updateArticle');

    


    Route::get('/kursove', function () { return view('profile.files.course-videos'); });


});


require __DIR__.'/auth.php';
