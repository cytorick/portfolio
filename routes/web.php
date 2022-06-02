<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\InternshipsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\SchoolsController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\LinksController;

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

// Admin Routes
Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::get('/dashboard',[AdminController::class, 'renderDashboard'])->name('dashboard');

    Route::controller(JobsController::class)->prefix('jobs')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.jobs');
        Route::get('/create','renderCreateForm')->name('admin.create.jobs');
        Route::get('/{jobId}/edit','renderEditForm')->name('admin.edit.jobs');
    });
    Route::controller(InternshipsController::class)->prefix('internships')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.internships');
        Route::get('/create','renderCreateForm')->name('admin.create.internships');
        Route::get('/{internshipId}/edit','renderEditForm')->name('admin.edit.internships');
    });
    Route::controller(LanguagesController::class)->prefix('languages')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.languages');
        Route::get('/create','renderCreateForm')->name('admin.create.languages');
        Route::get('/{languageId}/edit','renderEditForm')->name('admin.edit.languages');
    });
    Route::controller(SkillsController::class)->prefix('skills')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.skills');
        Route::get('/create','renderCreateForm')->name('admin.create.skills');
        Route::get('/{skillId}/edit','renderEditForm')->name('admin.edit.skills');
    });
    Route::controller(SchoolsController::class)->prefix('schools')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.schools');
        Route::get('/create','renderCreateForm')->name('admin.create.schools');
        Route::get('/{schoolId}/edit','renderEditForm')->name('admin.edit.schools');
    });
    Route::controller(CertificatesController::class)->prefix('certificates')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.certificates');
        Route::get('/create','renderCreateForm')->name('admin.create.certificates');
        Route::get('/{certificateId}/edit','renderEditForm')->name('admin.edit.certificates');
    });
    Route::controller(ProjectsController::class)->prefix('projects')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.projects');
        Route::get('/create','renderCreateForm')->name('admin.create.projects');
        Route::get('/{projectId}/edit','renderEditForm')->name('admin.edit.projects');
    });
    Route::controller(LinksController::class)->prefix('links')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.links');
        Route::get('/create','renderCreateForm')->name('admin.create.link');
        Route::get('/{linkId}/edit','renderEditForm')->name('admin.edit.link');
    });
});
