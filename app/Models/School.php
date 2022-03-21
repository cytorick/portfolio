<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'school',
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
                ->orWhere('school', 'like', '%' . $filters['search'] . '%')
                ->orWhere('place', 'like', '%' . $filters['search'] . '%')
                ->orWhere('street', 'like', '%' . $filters['search'] . '%'));
    }
}
