<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSkill extends Model
{
    use HasFactory;

    public $guarded = [];

    public function icons()
    {
        return $this->belongsTo(Skill::class, 'skill_id');
    }

    public function projects()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
