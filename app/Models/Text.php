<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Text extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

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
            $query->Where('page', 'like', '%' . $filters['search'] . '%')
                ->orWhere('content', 'like', '%' . $filters['search'] . '%')
                ->orWhere('title', 'like', '%' . $filters['search'] . '%'));
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('text-image')
            ->singleFile();
    }
}
