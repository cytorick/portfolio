<?php
namespace App\Search;

interface Filter
{
    /**
     * Apply a given search value to the builder instance.
     * 
     * @param Builder $builder
     * @param mixed $filter
     * 
     * @return Builder $builder
     */
    public static function apply ($builder, $filter);
    
}
