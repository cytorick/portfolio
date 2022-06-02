<?php

namespace App\Http\Livewire\Admin\Concerns\DataTable;

use App\Http\Livewire\Concerns\DataTable\Array;
use App\Http\Livewire\Concerns\DataTable\Illuminate;

trait WithSorting
{

    /**
     * Sort parameters.
     *
     * @var Array
     */
    public $sorts = [];
    public $values;

    /**
     * Sort data table by the given field (column).
     *
     * @param String $field
     * @return void
     */
    public function sortBy ($field)
    {
        // Sort ascending if no sort direction is set.
        if (! isset($this->sorts[$field])) return $this->sorts[$field] = 'asc';

        // Sort descending if direction is set to ascending.
        if ($this->sorts[$field] === 'asc') return $this->sorts[$field] = 'desc';

        // Clear sorting if the direction is (implicitely) descending.
        unset($this->sorts[$field]);
    }

    /**
     * Sort data table by the given field (column).
     *
     * @param Illuminate\Database\Eloquent\Builder $query
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function applySorting ($query)
    {
        // First try to apply custom sorting.
        if ( ! empty($this->sorts))
        {
            foreach ($this->sorts as $field => $direction)
            {
                $query->orderBy($field, $direction);
            }

            return $query;
        }

        // Then try to set default sorting.
        if (isset($this->defaultSorting))
        {
            return $query->orderBy($this->defaultSorting['field'], $this->defaultSorting['order']);

        // Then try to sort by multiple values.
        } else if(isset($this->rawSorting)) {

           foreach ($this->rawSorting['values'] as $value)
           {
                $this->values .= $value . ',';
           }

           $this->values .= 0;

           return $query->orderByRaw('FIELD('. $this->rawSorting['field'] . ',' . $this->values . ') ' . $this->rawSorting['order']);
        }

        // No sorting possible; just return the builder.
        return $query;
    }

}
