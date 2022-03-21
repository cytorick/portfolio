<?php

namespace App\Http\Livewire\Experience\School;

use App\Models\School;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;

class Show extends Component
{
//    public $school;
//
//    public function __construct($schoolId)
//    {
//        $this->school = School::find($schoolId);
//    }
//
//    private function getSchool ($schoolId)
//    {
//        try {
//            return School::findOrFail($schoolId);
//        }
//        catch (ModelNotFoundException $exception) {
//            abort(404);
//        }
//    }

    public function render()
    {

        return view('livewire.experience.school.show');
    }
}
