<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\PagesController;

Route::controller(PagesController::class)->group( function (){
    Route::get('/', 'renderHome')->name('home');
    Route::get('contact', 'renderContact')->name('contact');
    Route::get('contact/send-mail', 'sendmail')->name('contact.send-mail');
    Route::prefix('experience')->group( function () {
        Route::get('/', 'renderExperienceIndex')->name('experience');
        Route::prefix('schools')->group( function () {
            Route::get('/{schoolId}/{page}', 'renderSchoolShow')->name('schools.show');
        });
        Route::prefix('jobs')->group( function () {
            Route::get('/{jobId}/{page}', 'renderJobShow')->name('jobs.show');
        });
        Route::prefix('internships')->group( function () {
            Route::get('/{internshipId}/{page}', 'renderInternshipShow')->name('internships.show');
        });
//        Route::prefix('certificates')->group( function () {
//            Route::get('/{certificateId}/{page}', 'renderCertificateShow')->name('certificates.show');
//        });
    });
    Route::prefix('about-me')->group( function () {
        Route::get('/', 'renderAboutIndex')->name('about');
    });
    Route::prefix('projects')->group( function () {
        Route::get('/', 'renderProjectsIndex')->name('projects');
    });
});
