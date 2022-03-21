<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'percentage',
        'level',
    ];

    public function scopeWithFilters ($query, $filters)
    {
        return $query
            ->when(!empty($filters['search']), fn($query, $search) =>
            $query->where('name', 'like', '%' . $filters['search'] . '%')
                ->orWhere('level', 'like', '%' . $filters['search'] . '%'));
    }
}
