<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\PagesController;

Route::controller(PagesController::class)->group( function (){
    Route::get('/', 'renderHome')->name('home');
    Route::get('bericht-mij', 'renderContact')->name('contact');
    Route::get('bericht-mij/send-mail', 'sendmail')->name('contact.send-mail');
    Route::prefix('ervaring')->group( function () {
        Route::get('/', 'renderExperienceIndex')->name('experience');
    });
    Route::prefix('over-mij')->group( function () {
        Route::get('/', 'renderAboutIndex')->name('about');
    });
    Route::prefix('projecten')->group( function () {
        Route::get('/', 'renderProjectsIndex')->name('projects');
    });
});
