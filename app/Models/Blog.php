<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function scopeWithFilters ($query, $filters)
    {
        return $query
            ->when(!empty($filters['search']), fn($query, $search) =>
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('category', 'like', '%' . $filters['search'] . '%')
                ->orWhere('summary', 'like', '%' . $filters['search'] . '%')
                ->orWhere('read_time', 'like', '%' . $filters['search'] . '%')
                ->orWhere('body', 'like', '%' . $filters['search'] . '%'));
    }
}
