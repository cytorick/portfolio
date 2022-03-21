<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    public function scopeWithFilters ($query, $filters)
    {
        return $query
            ->when(!empty($filters['search']), fn($query, $search) =>
            $query->where('name', 'like', '%' . $filters['search'] . '%')
                ->orWhere('company', 'like', '%' . $filters['search'] . '%')
                ->orWhere('place', 'like', '%' . $filters['search'] . '%')
                ->orWhere('street', 'like', '%' . $filters['search'] . '%'));
    }

    public function hasDates ()
    {
        return $this->start_date && $this->end_date;
    }

    public function getStartDateForHumansAttribute () { return $this->start_date ? $this->start_date->format('d-m-Y H:i') : null; }
    public function getEndDateFromForHumansAttribute () { return $this->end_date ? $this->end_date->format('d-m-Y H:i') : null; }

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
