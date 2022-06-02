<?php

namespace App\Http\Livewire\Admin\Concerns\DataTable;

use App\Http\Livewire\Concerns\DataTable\Illuminate;
use Cache;
use Illuminate\Pagination\Paginator;

trait WithCachedRows
{
    /**
     * Flag indicating the data should be pulled from the cache.
     *
     * @var Boolean
     */
    public $useCache = false;

    /**
     * Cache identifier for the active module.
     *
     * @var String
     */
    public $cacheIdentifier;

    /**
     * Enable the cache functionality.
     *
     * @return void
     */
    public function useCachedRows ($cacheIdentifier = null)
    {
        $this->useCache = true;

        if (!empty($cacheIdentifier)) {
            $this->cacheIdentifier = $cacheIdentifier;
        }
    }

    /**
     * Cache data and return result.
     *
     * @param Callback
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function cache ($callback)
    {
        // Get cache key and tag.
        $cacheTag = $this->cacheTag();
        $cacheKey = $this->cacheKey();

        // Check if we should use cached data and try to fetch if so.
        if ($this->useCache && Cache::tags($cacheTag)->has($cacheKey)) {
            return Cache::tags($cacheTag)->get($cacheKey);
        }

        // No cached data is used.
        $result = $callback();

        // Put callback result in the cache store.
        Cache::tags($cacheTag)->put($cacheKey, $result);

        // Just return the callback.
        return $result;
    }

    /**
     * Build a cache key for this query. The key contains all applied
     * filter values.
     *
     * @return string
     */
    public function cacheKey ()
    {
        // Convert attributes array to collection.
        return collect($this->filters)

            // Add search information.
            ->put('search', isset($this->search) ? $this->search : null)

            // Add status information.
            ->put('status', isset($this->status) ? $this->status : null)

            // Add sorting information.
            // TO DO...

            // Add per page information to the collection.
            ->put('perPage', $this->perPage)

            // Add the current page to the collection.
            ->put('page', $this->currentPage())

            // If no callback is provided, all empty filter values
            // are removed from the collection. We don't need empty
            // segments for the cache key.
            ->filter()

            // Glue key and value to a flat string.
            ->map(function ($value, $key) {
                return $key . '.' . $value;
            })

            // Prepend query identifier.
            ->prepend($this->cacheIdentifier)

            // Implode collection to a flat string.
            ->implode('.');
    }

    /**
     * Pluck cache tag from the cache identifier.
     *
     * @return string
     */
    public function cacheTag ()
    {
        return explode('-', $this->cacheIdentifier)[0];
    }

    /**
     * Resolve the current page.
     *
     * We have to use the paginator page resolver because Livewire
     * seems to have sometimes issues to access the paginator.
     *
     * @return Integer
     */
    public function currentPage ()
    {
        return Paginator::resolveCurrentPage();
    }

}
