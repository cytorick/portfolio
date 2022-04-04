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
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\Searchcontroller;

Route::get('search', [ SearchController::class, 'search' ])->name('search');

Route::controller(PagesController::class)->group( function (){
    Route::get('/', 'renderHome')->name('home');
    Route::get('contact', 'renderContact')->name('contact');
    Route::get('contact/send-mail', 'sendmail')->name('contact.send-mail');
    Route::prefix('experience')->group( function () {
        Route::get('/', 'renderExperienceIndex')->name('experience');
        Route::prefix('school')->group( function () {
            Route::get('/{schoolId}/{page}', 'renderSchoolShow')->name('school.show');
        });
        Route::prefix('job')->group( function () {
            Route::get('/{jobId}/{page}', 'renderJobShow')->name('job.show');
        });
        Route::prefix('internship')->group( function () {
            Route::get('/{internshipId}/{page}', 'renderInternshipShow')->name('internship.show');
        });
        Route::prefix('certificate')->group( function () {
            Route::get('/{certificateId}/{page}', 'renderCertificateShow')->name('certificate.show');
        });
    });
    Route::prefix('about-me')->group( function () {
        Route::get('/', 'renderAboutIndex')->name('about');
    });
    Route::prefix('blog')->group( function () {
        Route::get('/', 'renderBlogIndex')->name('blog');
        Route::get('/{blogId}/show', 'renderBlogShow')->name('blog.show');
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
        Route::get('/create','renderCreateForm')->name('admin.create.job');
        Route::get('/{jobId}/edit','renderEditForm')->name('admin.edit.job');
        Route::get('/{jobId}/details','renderDetails')->name('admin.job.details');
    });
    Route::controller(InternshipsController::class)->prefix('internships')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.internships');
        Route::get('/create','renderCreateForm')->name('admin.create.internship');
        Route::get('/{internshipId}/edit','renderEditForm')->name('admin.edit.internship');
    });
    Route::controller(LanguagesController::class)->prefix('languages')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.language');
        Route::get('/create','renderCreateForm')->name('admin.create.language');
        Route::get('/{languageId}/edit','renderEditForm')->name('admin.edit.language');
    });
    Route::controller(SkillsController::class)->prefix('skills')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.skill');
        Route::get('/create','renderCreateForm')->name('admin.create.skill');
        Route::get('/{skillId}/edit','renderEditForm')->name('admin.edit.skill');
    });
    Route::controller(SchoolsController::class)->prefix('schools')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.school');
        Route::get('/create','renderCreateForm')->name('admin.create.school');
        Route::get('/{schoolId}/edit','renderEditForm')->name('admin.edit.school');
    });
    Route::controller(CertificatesController::class)->prefix('certificates')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.certificate');
//        Route::get('/create','renderCreateForm')->name('admin.create.school');
//        Route::get('/{schoolId}/edit','renderEditForm')->name('admin.edit.school');
    });
    Route::controller(ProjectsController::class)->prefix('projects')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.project');
//        Route::get('/create','renderCreateForm')->name('admin.create.school');
//        Route::get('/{schoolId}/edit','renderEditForm')->name('admin.edit.school');
    });
    Route::controller(BlogsController::class)->prefix('blogs')->group( function () {
        Route::get('/', 'renderIndex')->name('admin.blogs');
//        Route::get('/create','renderCreateForm')->name('admin.create.school');
//        Route::get('/{schoolId}/edit','renderEditForm')->name('admin.edit.school');
    });
});
