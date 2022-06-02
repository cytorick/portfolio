<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class School extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $casts = [
        'start_date' => 'date:Y-m-d',
        'end_date' => 'date:Y-m-d'
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('schools-logo')
            ->singleFile();
    }

    protected $fillable = [
        'schools',
        'name',
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

    public function scopeWithFilters ($query, $filters)
    {
        return $query
            ->when(!empty($filters['search']), fn($query, $search) =>
            $query->where('name', 'like', '%' . $filters['search'] . '%')
                ->orWhere('schools', 'like', '%' . $filters['search'] . '%')
                ->orWhere('place', 'like', '%' . $filters['search'] . '%')
                ->orWhere('street', 'like', '%' . $filters['search'] . '%'));
    }
}
