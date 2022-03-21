<?php
namespace App\Search\Filters;

use App\Search\Filter;

class Name implements Filter
{

    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed $value
     * 
     * @return Builder
     */
    public static function apply ($builder, $value)
    {
        $orGroups = static::getOrGroups($value);

        foreach ($orGroups as $orGroup)
        {

            $builder->orWhere(function ($query) use ($orGroup) {

                foreach($orGroup as $value)
                {
                    $query->where('name', 'LIKE', '%' . $value . '%');
                }

                return $query;

            });

        }

        return $builder;
    }

    private static function getOrGroups ($value)
    {
        $values = [];
        $orGroups = explode('|', $value);

        foreach($orGroups as $orGroup)
        {
            $values[] = explode(' ', $orGroup);
        }

        return array_map('array_filter', $values);
    }

}
