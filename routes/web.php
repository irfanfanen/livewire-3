<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Counter;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/counter', Counter::class);

Route::middleware('auth')->group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('/about', \App\Livewire\About::class)->name('about');
    Route::get('/contact', \App\Livewire\Contact::class)->name('contact');
    Route::get('/posts', \App\Livewire\Posts\Index::class)->name('posts.index');
    Route::get('/users/', \App\Livewire\Users\Index::class)->name('users');
    Route::get('/users/{user}', \App\Livewire\Users\Show::class)->name('users.show');
    Route::get('/timeline', \App\Livewire\Timeline::class)->name('timeline');
});

Route::get('login', \App\Livewire\Login::class)->name('login')->middleware('guest');
Route::post('/logout', LogoutController::class)->name('logout');