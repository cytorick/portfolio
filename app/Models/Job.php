<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Job extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'company',
        'function',
        'street',
        'place',
        'start_date',
        'end_date',
        'website',
        'contract_type',
        'is_active',
        'description',
        'introduction',
        'learned',
        'image',
    ];

    protected $casts = [
        'start_date' => 'date:Y-m-d',
        'end_date' => 'date:Y-m-d'
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('jobs-logo')
            ->singleFile();
    }

    public function scopeWithFilters ($query, $filters)
    {
        return $query
            ->when(!empty($filters['search']), fn($query, $search) =>
            $query->where('function', 'like', '%' . $filters['search'] . '%')
                ->orWhere('company', 'like', '%' . $filters['search'] . '%')
                ->orWhere('place', 'like', '%' . $filters['search'] . '%')
                ->orWhere('street', 'like', '%' . $filters['search'] . '%'));
    }
}
