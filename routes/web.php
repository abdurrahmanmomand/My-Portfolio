<?php

use App\Http\Controllers\InformationController;
use App\Http\Controllers\MessageController;

use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

Route::get('/',[FrontendController::class,'index'])->name('wellcome');

Route::get('/dashboard',function(){
    return view('dashboard');
})->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('services', 'services')
->middleware(['auth', 'verified'])
->name('services');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/profilepage',[ProfileController::class,'index'])->name('profilepage');
Route::post('/storeprofile',[ProfileController::class,'store'])->name('storeprofile');
Route::post('/changepassword',[ProfileController::class,'changepassword'])->name('changepassword');

Route::resource('information',InformationController::class);
Route::resource('skills',SkillController::class);
Route::resource('experience',ExperienceController::class);
Route::resource('category',CategoryController::class);
Route::resource('education',EducationController::class);

Route::resource('message',MessageController::class);
Route::resource('services',ServiceController::class);
// routes/web.php
Route::resource('testimonial', TestimonialController::class);
Route::resource('section', SectionController::class);


Route::get('/ajax/message-count', [MessageController::class, 'getPendingMessageCount']);


Route::get('logout' , function () {
    Auth::guard('web')->logout();

    Session::invalidate();
    Session::regenerateToken();
    return redirect('/');
});

require __DIR__.'/auth.php';
