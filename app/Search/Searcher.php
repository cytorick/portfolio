<?php

namespace App\Search;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class Searcher
{

	/**
	 * Product type.
	 * @var String
	 */
	protected $type;

	/**
	 * Create a new search engine instance.
	 *
	 * @param String $type Auction or platform products.
	 *
	 * @return void
	 */
	public function __construct ($type)
	{
		$this->type = $type;
	}

	/**
	 * Get platform item collection with the given filters applied.
	 *
	 * @param Array $filters
	 *
	 * @return Builder
	 */
	public function apply ($filters)
	{
		// All filters to apply.
		$filterCollection = [
			'platform',
			'search',			// Default includables.
			'exclude',
		];

		// Create a new query builder instance.
		$builder = $this->getQueryBuilder();

		// Iterate over the filter collection and apply the filters to
		// the query builder.
		foreach ($filterCollection as $filterName)
		{
			// Only run the filter method applier if the filters for
			// the current filter name are set.
			if ($filters[$filterName])
			{
				// Format filter method name.
				$filterMethod = 'apply' . ucfirst($filterName) . 'Filter';

				// Apply the current filter.
				$builder = $this->$filterMethod($builder, $filters[$filterName]);
			}
		}

		// All done, return the builder including the applied filters.
		return $builder;
	}

	/**
	 * Apply platform filter.
	 *
	 * @param Builder $builder
	 * @param String $value
	 *
	 * @return Builder
	 */
	protected function applyPlatformFilter ($builder, $value)
	{
		return ($value == 'all')

			// The search is not limited to a specific platform. Just return
			// the unmodified builder.
			? $builder

			// Limit the search to the given platform. Since the id is unknown,
			// the relationship has to be filtered on the slug.
			: $builder->whereHas('platform', function ($query) use ($value) {
			      $query->where('slugified_name', $value);
			  });
	}

	/**
	 * Apply includables filter.
	 *
	 * @param Builder $builder
	 * @param Array $values
	 *
	 * @return Builder
	 */
	protected function applySearchFilter ($builder, $values)
	{
		// Subfilters the includable values should be applied to.
		$filters = [
			'name'
		];

		// Prepare filter values. For the includable filter, the search
		// string should be split on the | operator.
		$filterValues = $this->splitToGroups($values, '|');

		// Format basepath for the filter decorator.
		$basePath = __NAMESPACE__ . '\\Filters\\Includables\\';

		// Iterate over the subfilters collection and apply each of
		// them to the query builder.
		foreach($filters as $filterName)
		{
			// Format filter class.
			$filterClass = $basePath . ucfirst($filterName);

			// Apply the filter to the query builder.
			$builder = $filterClass::apply($builder, $filterValues);
		}

		// All done, return the builder.
		return $builder;
	}

	/**
	 * Apply exclude filter.
	 *
	 * @param Builder $builder
	 * @param Array $values
	 *
	 * @return Builder
	 */
	protected function applyExcludeFilter ($builder, $values)
	{
		// Subfilters the excludable values should be applied to.
		$filters = [
			'name'
		];

		// Prepare filter values. For the excludable filter, the search
		// string should be split on the & operator.
		$filterValues = $this->splitToGroups($values, '&');

		// Format basepath for the filter decorator.
		$basePath = __NAMESPACE__ . '\\Filters\\Excludables\\';

		// Iterate over the subfilters collection and apply each of
		// them to the query builder.
		foreach($filters as $filterName)
		{
			// Format filter class.
			$filterClass = $basePath . ucfirst($filterName);

			// Apply the filter to the query builder.
			$builder = $filterClass::apply($builder, $filterValues);
		}

		// All done, return the builder.
		return $builder;
	}

	/**
	 * Create a new query builder instance.
	 *
	 * @return Builder
	 */
	protected function getQueryBuilder ()
	{
		return Product::query()
			->inStock()
			->whereHas('platform', function ($query) {
				$query->where('type', $this->type);
			});
	}

	/**
	 * Split filter values to OR ('|') or AND ('&') groups.
	 *
	 * @param Array $values
	 *
	 * @return Array
	 */
    private static function splitToGroups ($values, $operator)
    {
        $filterValues = [];

        // Split search string on the given operator.
        $groups = explode($operator, $values);

        // Iterate over the groups and split each group into separate
        // filter words. Each word will be applied individually.
        foreach($groups as $group)
        {
            $filterValues[] = explode(' ', $group);
        }

        // Remove null and empty values from the array.
        return array_map('array_filter', $filterValues);
    }

}
