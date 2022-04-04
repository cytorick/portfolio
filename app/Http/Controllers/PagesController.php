<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Blog;
use App\Models\Certificate;
use App\Models\Internship;
use App\Models\Job;
use App\Models\School;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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


    public function renderBlogShow ($blogId)
    {
        return view('pages.blog.show')->with('blog', $this->getBlog($blogId));
    }

    private function getBlog ($blogId)
    {
        try {
            return Blog::findOrFail($blogId);
        }
        catch (ModelNotFoundException $exception) {
            abort(404);
        }
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

    public function sendmail(\Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'company' => 'nullable',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('rickvisser99@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting me!');
    }

}
