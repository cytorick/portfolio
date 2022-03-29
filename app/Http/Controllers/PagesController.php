<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Internship;
use App\Models\Job;
use App\Models\School;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function renderHome ()
    {
        return view('pages.home.index');
    }

    public function renderExperienceIndex ()
    {
        return view('pages.experience.index');
    }

    public function renderAboutIndex ()
    {
        return view('pages.about.index');
    }

    public function renderBlogIndex ()
    {
        return view('pages.blog.index');
    }

    public function renderProjectsIndex ()
    {
        return view('pages.projects.index');
    }

    public function renderContact ()
    {
        return view('pages.contact.index');
    }

    public function renderSchoolShow ($schoolId, string $page = 'overview')
    {
        return view('pages.school.'  . $page)
            ->with('school', $this->getSchool($schoolId));
    }

    public function renderJobShow ($jobId, string $page = 'overview')
    {
        return view('pages.job.'  . $page)
            ->with('job', $this->getJob($jobId));
    }

    public function renderInternshipShow ($internshipId, string $page = 'overview')
    {
        return view('pages.internship.'  . $page)
            ->with('internship', $this->getInternship($internshipId));
    }

    public function renderCertificateShow ($certificateId, string $page = 'overview')
    {
        return view('pages.certificate.'  . $page)
            ->with('certificate', $this->getCertificate($certificateId));
    }

    private function getInternship ($internshipId)
    {
        try {
            return Internship::findOrFail($internshipId);
        }
        catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }

    private function getCertificate ($certificateId)
    {
        try {
            return Certificate::findOrFail($certificateId);
        }
        catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }

    private function getJob ($jobId)
    {
        try {
            return Job::findOrFail($jobId);
        }
        catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }

    private function getSchool ($schoolId)
    {
        try {
            return School::findOrFail($schoolId);
        }
        catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }

}
