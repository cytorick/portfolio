<?php
namespace App\Search\Filters\Includables;

use App\Search\Filter;

class Name implements Filter
{

    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed $filter
     * 
     * @return Builder
     */
    public static function apply ($builder, $filter)
    {
        //$orGroups = static::getOrGroups($value);

//dd($orGroups);
        
        $builder->where(function ($query) use ($filter) {

            foreach ($filter as $filterGroup)
            {

                $query->orWhere(function ($query) use ($filterGroup) {

                    foreach($filterGroup as $filterValue)
                    {
                        $query->where('name', 'LIKE', '%' . $filterValue . '%');
                    }


                });

            }

        });


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
