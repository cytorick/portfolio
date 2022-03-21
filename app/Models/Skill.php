<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'name',
        'color',
    ];

    /**
     * @param $query
     * @param $filters
     * @return mixed
     */
    public function scopeWithFilters
    (
        $query,
        $filters
    )
    {
        return $query
            ->when(!empty($filters['search']), fn($query, $search) =>
            $query->where('name', 'like', '%' . $filters['search'] . '%')
                ->orWhere('icon', 'like', '%' . $filters['search'] . '%')
                ->orWhere('color', 'like', '%' . $filters['search'] . '%'));
//            // Apply the auctionId filter settings.
//            ->when(!empty($filters['status']), fn($query, $status) => $query->where('status', $filters['status']))
//
//            ->when(!empty($filters['type']), fn($query, $type) => $query->where('type', $filters['type']))
//
//            ->when($filters['archived'] == 0, fn($query) => $query->where('archived', 0));
    }
}
