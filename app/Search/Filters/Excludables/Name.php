<?php
namespace App\Search\Filters\Excludables;

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
	public static function apply ($builder, $filter)
	{
		// And groups are groups where records are excluded based on value 1 
		// AND value 2.
		// Example: 'macallan & cask'
		// In this query, 'Macallan Classic Cut' is excluded, while 'Macallan 
		// Sherry Cask' is included.
		//$andGroups = static::getAndGroups($value);

		// Create a clustered where clause for the whole excludable group.
		return $builder->where(function ($query) use ($filter)
		{
			// Iterate over all andGroups and create a separate where clause
			// for each of them.
			foreach ($filter as $filterGroup)
			{
				// andGroup clause.
				$query->where(function ($query) use ($filterGroup)
				{
					// Iterate over each keyword within an andGroup. Create a
					// grouped where clause for them.
					foreach($filterGroup as $filterValue)
					{
						$query->where('name', 'NOT LIKE', '%' . $filterValue . '%');
					}
				});
			}
		});
	}

	private static function getAndGroups ($value)
	{
		$values = [];
		$andGroups = explode('&', $value);

		foreach($andGroups as $andGroup)
		{
			$values[] = explode(' ', $andGroup);
		}

		return array_map('array_filter', $values);
	}

}
