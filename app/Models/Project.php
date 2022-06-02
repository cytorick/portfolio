<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $casts = [
        'start_date' => 'date:Y-m-d',
        'end_date' => 'date:Y-m-d'
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('projects-thumb')
            ->singleFile();
    }

    public function skills()
    {
        return $this->hasMany(ProjectSkill::class);
    }

    public function scopeWithFilters ($query, $filters)
    {
        return $query
            ->when(!empty($filters['search']), fn($query, $search) =>
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('company', 'like', '%' . $filters['search'] . '%')
                ->orWhere('description', 'like', '%' . $filters['search'] . '%'));
    }
}
